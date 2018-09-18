<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Auth;
use App\Events\MessageSent;

class MessageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {

        return view('minichat');
    }

    public function getMessages() {

        return Message::with('user')->get();
    }

    public function sendMessage(Request $request) {

        $user = Auth::user();

        $message = new Message;
        $message->user_id = $user->id;
        $message->message = $request->input('message');

        $message->save();

        broadcast(new MessageSent($user, $message))->toOthers();

        return ['status' => 'Message sent'];
    }
}
