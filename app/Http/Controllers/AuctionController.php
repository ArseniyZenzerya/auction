<?php

    namespace App\Http\Controllers;

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
            $activeAuctions = Auction::where('end_time', '>', Carbon::now())
                ->with('photos')
                ->get();

            return view('pages.main')->with(['auctions' => $activeAuctions]);
        }


        public function getProduct(Auction $auction)
        {
            $startTime = Carbon::parse($auction->start_time);
            $endTime = Carbon::parse($auction->end_time);

            $duration = $endTime->diff($startTime);

            $formattedDuration = $duration->format('%a Day, %H:%I:%S');
            $auction->formatted_duration = $formattedDuration;

            $photos = $auction->photos;

            return view('pages.product')->with(['product' => $auction, 'photos' => $photos]);
        }
    }
