<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\NewMessageEvent;

class ChatController extends Controller
{
    public function index(){
        $title = "Chat Panel";
        return view('feature.chat', compact('title'));
    }
    public function sendMessage(Request $request)
    {
        // Validasi input pesan

        // Kirim pesan ke event NewMessageEvent
        event(new NewMessageEvent($request->message));

        return response()->json(['message' => 'Message sent!']);
    }
}
