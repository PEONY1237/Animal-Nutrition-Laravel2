<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\MessageRequest;
use Illuminate\Http\RedirectResponse;
use App\Models\Message;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $msgs = Message::all();
        return view('Admin.Messagerie' , compact('msgs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MessageRequest $messagerequest)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MessageRequest $messagerequest, Message $message)
    {
        // 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message , $id): RedirectResponse 
    {
        $message = Message::findOrFail($id);
        $message->delete(); 

        return back()->with('info', 'Le message a bien été lu');
    }
}
