<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ContactusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index.ContactUs');
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
    public function store(Request $request)
    {
        DB::table('messages')
            ->insert(
                ['name' => $request->name,
                'surname' => $request->surname,
                'email' => $request->email,
                'need' => $request->need,
                'message' => $request->message,
                ]
            );
            
            return view('index.ContactUs')->with('msg' , 'merci pour votre contact ...');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
