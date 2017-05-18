<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Message;

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
    
    public function create() {
        return view('messages.create');
    }
    
    public function store() {
        $this->validate(request(),[
            'username' => 'required|min:2',
            'message' => 'required'
        ]);
        Message::create(request(['username', 'message']));
        return redirect('/');
    }
    
    public function update() {
        $this->validate(request(),[
            'username' => 'required|min:2',
            'message' => 'required'
        ]);
        Message::update(request(['username', 'message']));
        return redirect('/');
    }


}
