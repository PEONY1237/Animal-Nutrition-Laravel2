<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Requests\CategorieRequest;
use Illuminate\Http\RedirectResponse;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categorie::all();

        return view('Categories.Categories' , compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Categories.CreateCategorie');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategorieRequest $request , Categorie $categorie) : RedirectResponse
    {
        $request->validate([
            'Nom_Categorie' => 'required',
            'Img_Categorie' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $fileName = time() . '.' . $request->Img_Categorie->extension();
        $request->Img_Categorie->move('uploads/categories/', $fileName);

        // $request->image->storeAs('public/images', $fileName);
        
        $categorie = new Categorie;
        $categorie->Nom_Categorie = $request->input('Nom_Categorie');
        $categorie->Img_Categorie = $fileName;
        $categorie->save();
        
        return redirect()->route('categories.index')->with('info', 'La categorie a bien été ajouter');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categorie $categorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categorie $categorie)
    {
        return view('Categories.EditCategorie' , compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategorieRequest $request , $id): RedirectResponse 
    {
        // $categorie->update( $request->all() ); 

        // $categorie = Categorie::find($id);
        // $categorie->Nom_categorie = $request->input('Nom_categorie');

        // if( $request->hasFile('Img_Categorie')) 
        // {
        //     $destination = 'uploads/categories/'.$categorie->Img_Categorie;
        //     if(File::exists($destination))
        //     {
        //         File::delete($destination);
        //     }
        //     $fileName = $request->get('Nom_categorie') . '.' . $request->Img_Categorie->extension();
        //     $request->Img_Categorie->move('uploads/categories/', $fileName);
        // }
        
        // $categorie->update();

        // $categorie = Categorie::find($id);
        // $produit->Nom_Produit = $request->input('Nom_categorie');

        // $input = $request->all();
   
        // if ($Img_Categorie = $request->file('Img_Categorie')) {
        //     // $destinationPath = 'Img_Categorie/';
        //     $destination = 'uploads/categories/'.$categorie->Img_Categorie;
        //     $profileImg_Categorie = $request->get('Nom_categorie') . "." . $Img_Categorie->getClientOriginalExtension();
        //     $Img_Categorie->move($destination, $profileImg_Categorie);
        //     $input['Img_Categorie'] = "profileImg_Categorie";
        // }else{
        //     unset($input['Img_Categorie']);
        // }
           
        // $categorie->update($input);

        // return redirect()->route('categories.index')->with('info', 'La categorie a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categorie $categorie): RedirectResponse 
    {
        // $categorie->delete(); 

        // return back()->with('info', 'La categorie a bien été supprimée dans la base de données.');
    }
}
