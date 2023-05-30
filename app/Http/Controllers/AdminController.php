<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\AdminRequest;
use Illuminate\Http\RedirectResponse;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = Admin::all();
        return view('Admins.Admins' , compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admins.CreateAdmin');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdminRequest $adminRequest) : RedirectResponse
    {
        $formFields = $adminRequest->validated();
        $formFields['password'] = Hash::make($adminRequest->password);
        Admin::create($formFields);        
        
        return redirect()->route('admins.index')->with('info', 'Le admin a bien été créé');
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        return view('admins.EditAdmin', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AdminRequest $adminRequest, Admin $admin)
    {
        $formFields = $adminRequest->validated();
        $formFields['password'] = Hash::make($adminRequest->password);
        $admin->update($formFields);
        // $admin->update( $adminRequest->all() ); 

        return redirect()->route('admins.index')->with('info', 'Le admin a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        $admin->delete(); 

        return back()->with('info', 'Le admin a bien été supprimé dans la base de données.');
    }
}
