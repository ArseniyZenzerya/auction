<?php

    namespace App\Http\Controllers;

    use App\Models\Auction;
    use Illuminate\Http\Request;
    use App\Models\Message;
    use Illuminate\Support\Facades\Auth;

    class ChatController extends Controller
    {
        public function index()
        {
            $messages = Message::orderBy('created_at', 'desc')->get();
            return view('chat.index', compact('messages'));
        }


        public function store(Request $request, Auction $auction)
        {
            $request->validate([
                'content' => 'required',
            ]);

            $user = Auth::user();

            $message = new Message([
                'user' => $user->username,
                'content' => $request->content,
            ]);

            $auction->messages()->save($message);

            return redirect()->route('product', ['auction' => $auction]);
        }


    }
