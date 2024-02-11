<?php

    namespace App\Http\Controllers;

    use App\Models\Message;
    use App\Models\Bid;
    use App\Models\Auction;
    use Illuminate\Http\Request;
    use Illuminate\Support\Carbon;
    use Illuminate\Support\Facades\Auth;

    class AuctionController extends Controller
    {
        public function viewCreateAuctionFirstStep()
        {
            return view('pages.createAuctionFirstStep');
        }


        public function createAuctionFirstStep(Request $request)
        {
            $data = $request->all();
            $user_id = Auth::id();

            $auction = Auction::create([
                'title' => $data['title'],
                'description' => $data['desc'],
                'user_id' => $user_id
            ]);

            return redirect(route('viewCreateSecondStep'))->with('id', $auction->id);
        }

        public function viewCreateAuctionSecondStep()
        {
            return view('pages.createAuctionSecondStep');
        }

        public function createAuctionSecondStep(Request $request)
        {
            $request->validate([
                'id' => 'required|exists:auctions,id',
                'photos.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $auction = Auction::find($request->get('id'));

            if ($auction) {
                if ($request->hasFile('photos')) {
                    foreach ($request->file('photos') as $photo) {
                        $path = $photo->storeAs('photos', $photo->getClientOriginalName());
                        $auction->photos()->create(['url' => $path]);
                    }
                }
            }

            return redirect(route('viewCreateThirdStep'))->with('id', $auction->id);
        }


        public function viewCreateAuctionThirdStep()
        {
            return view('pages.createAuctionThirdStep');
        }


        public function createAuctionThirdStep(Request $request)
        {
            $data = $request->all();
            $auction = Auction::find($request->get('id'));

            switch ($data['duration']) {
                case 'day':
                    $time = 24 * 60 * 60;
                    break;
                case 'week':
                    $time = 7 * 24 * 60 * 60;
                    break;
                case 'month':
                    $time = 30 * 7 * 24 * 60 * 60;
                    break;
                default:
                    $time = 24 * 60 * 60;
            }

            $duration = $data['num_duration'] * $time;
            $currentTimestamp = Carbon::now()->timestamp;

            if ($auction) {
                $auction->update([
                    'start_price' => $data['price'],
                    'end_time' => Carbon::createFromTimestamp($currentTimestamp + $duration),
                    'start_time' => Carbon::createFromTimestamp($currentTimestamp)
                ]);
            }

            return redirect(route('index'));
        }

        public function getAllNotExpired()
        {
            $activeAuctions = Auction::
            //where('end_time', '>', Carbon::now())   TODO time solution
                with('photos')
                ->get();

            return view('pages.main')->with(['auctions' => $activeAuctions]);
        }


        public function getProduct(Auction $auction)
        {
            $endTime = Carbon::parse($auction->end_time);
            $now = Carbon::now();

            $duration = $endTime->isPast() ? $endTime->diff($endTime) : $endTime->diff($now);


            $formattedDuration = $duration->format('%a Day, %H:%I:%S');
            $auction->formatted_duration = $formattedDuration;

            $photos = $auction->photos;
            $bids = $auction->bids;

            if ($auction->end_time <= now()) {
                $maxBid = $auction->bids()->max('amount');

                if ($maxBid !== null && $maxBid >= $auction->start_price) {
                    $winningBid = $auction->bids()->where('amount', $maxBid)->first();
                    $auction->winnerId = $winningBid->id;
                }
            }


            $messages = Message::where('auction_id', $auction->id)->get();

            return view('pages.product')->with([
                'product' => $auction,
                'photos' => $photos,
                'bids' => $bids,
                'messages' => $messages,
            ]);
        }




        public function addBid(Auction $auction, Request $request)
        {
            $amount = $request->get('amount');
            $maxBid = $auction->bids()->max('amount');

            if ($maxBid !== null && $amount <= $maxBid) {
                return redirect()->route('product', ['auction' => $auction])
                    ->withErrors(['amount' => 'Bid must be higher than the current maximum bid.'])
                    ->withInput();
            }

            if ($amount < $auction->start_price) {
                return redirect()->route('product', ['auction' => $auction])
                    ->withErrors(['amount' => 'Bid must be greater than or equal to the starting price.'])
                    ->withInput();
            }

            $bid = new Bid([
                'auction_id' => $auction->id,
                'user_id' => auth()->id(),
                'amount' => $amount,
            ]);

            $bid->save();

            return redirect()->route('product', ['auction' => $auction])
                ->with('success', 'Bid added successfully.');
        }



        public function listBid(Auction $auction)
        {
            $bids = $auction->bids()->latest()->with('user')->get();

            return view('pages.listBids')->with(['auction' => $auction, 'bids' => $bids]);
        }


        public function viewEditAuction(Auction $auction) {

            return view('pages.editAuction', ['product'=> $auction]);
        }



        public function updateAuction(Request $request, Auction $auction)
        {
            $request->validate([
                'title' => 'required',
                'description' => 'required',
                'start_price' => 'required|numeric',
                'end_time' => 'required|date',
            ]);

            $auction->update([
                'title' => $request->title,
                'description' => $request->description,
                'start_price' => $request->start_price,
                'end_time' => $request->end_time,
            ]);

            return redirect()->route('product', ['auction' => $auction])
                ->with('success', 'Auction updated successfully.');
        }
    }
