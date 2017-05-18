<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MessagesController extends Controller
{
    
    public function index() {
        $messages = DB::table('messages')->get();
        return view('index', compact('messages'));
    }
    
    public function edit($id) {
        $messagesItem = DB::table('messages')->find($id);
        return view('messages.edit', compact('messagesItem'));
    }
    
    public function add() {
        return view('messages.add');
    }


}
