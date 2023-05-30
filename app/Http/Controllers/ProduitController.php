<?php

namespace App\Http\Controllers;

use App\Models\{Produit , Categorie};
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\ProduitRequest;
use App\Http\Requests\ProduitUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProduitController extends Controller
{
    
    
    public function index()
    {

        $produits = Produit::all();
        // $produits = Produit::with('Categorie')->get();
        return view('Produits.Produits' , compact('produits'));
    }

    
    
    public function create()
    {
        $categories = Categorie::all(); 
        
        return view('Produits.CreateProduit', compact('categories'));
    }

    
    
    public function store(Request $request , Produit $produit) : RedirectResponse
    {
        $request->validate([
            'Nom_Produit' => 'required',
            'Img_Produit' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'categorie_id' => 'required',
            'Protein' => 'required',
            'Sodium' => 'required',
            'Magnesium' => 'required',
            'Potassium' => 'required',
            'Cobalt' => 'required',
            'Manganese' => 'required',
            'Zinc' => 'required',
            'Iodine' => 'required',
            'Vitamin_A' => 'required',
            'Vitamin_D' => 'required',
            'Vitamin_E' => 'required',
            'date_exp' => 'required',
            
        ]);

        $fileName = time() . '.' . $request->Img_Produit->extension();
        $request->Img_Produit->move('uploads/products/', $fileName);

        // $request->image->storeAs('public/images', $fileName);
        
        $produit = new Produit;
        $produit->Nom_Produit = $request->input('Nom_Produit');
        $produit->Img_Produit = $fileName;
        $produit->categorie_id = $request->get('categorie_id');
        $produit->Protein = $request->input('Protein');
        $produit->Sodium = $request->input('Sodium');
        $produit->Magnesium = $request->input('Magnesium');
        $produit->Potassium = $request->input('Potassium');
        $produit->Cobalt = $request->input('Cobalt');
        $produit->Manganese = $request->input('Manganese');
        $produit->Zinc = $request->input('Zinc');
        $produit->Iodine = $request->input('Iodine');
        $produit->Vitamin_A = $request->input('Vitamin_A');
        $produit->Vitamin_D = $request->input('Vitamin_D');
        $produit->Vitamin_E = $request->input('Vitamin_E');
        $produit->date_exp = $request->input('date_exp');
        $produit->save();
        
        return redirect()->route('produits.index')->with('info', 'Le produit a bien été ajouter');
    }

    
    
    public function show(Produit $produit)
    {
        //
    }

    
    
    public function edit(Produit $produit)
    {
        return view('Produits.EditProduit', compact('produit'));
    }

    
    
    public function update(Request $request , $id)
    {
        // $produit->update( $produitrequest->all() ); 

        $produit = Produit::find($id);
        $produit->Nom_Produit = $request->input('Nom_Produit');
        $produit->Protein = $request->input('Protein');
        $produit->Sodium = $request->input('Sodium');
        $produit->Magnesium = $request->input('Magnesium');
        $produit->Potassium = $request->input('Potassium');
        $produit->Cobalt = $request->input('Cobalt');
        $produit->Manganese = $request->input('Manganese');
        $produit->Zinc = $request->input('Zinc');
        $produit->Iodine = $request->input('Iodine');
        $produit->Vitamin_A = $request->input('Vitamin_A');
        $produit->Vitamin_D = $request->input('Vitamin_D');
        $produit->Vitamin_E = $request->input('Vitamin_E');
        $produit->date_exp = $request->input('date_exp');

        $input = $request->all();
   
        if ($Img_Produit = $request->file('Img_Produit')) {
            $destinationPath = 'Img_Produits/';
            $profileImg_Produit = $request->get('Nom_Produit') . "." . $Img_Produit->getClientOriginalExtension();
            $Img_Produit->move($destinationPath, $profileImg_Produit);
            $input['Img_Produit'] = "$profileImg_Produit";
        }else{
            unset($input['Img_Produit']);
        }
           
        $produit->update($input);

        // if($request->hasFile('Img_Produit')){
        //     Storage::delete($produit->Img_Produit );
        //     $produit->Img_Produit = $request->file('Img_Produit')->store('produits');
        // }

        // $produit->update($request->validated() + ['Img_Produit' => $produit->Img_Produit]);

        // if( $request->hasFile('Img_Produit')) 
        // {
        //     $destination = 'uploads/products/'.$produit->Img_Produit;
        //     if(File::exists($destination))
        //     {
        //         File::delete($destination);
        //     }
        //     $fileName = $request->get('Nom_Produit') . '.' . $request->Img_Produit->extension();
        //     $request->Img_Produit->move('uploads/products/', $fileName);
        //     // dd($request);
        // }
        // if($request->hasFile('Img_Produit')) 
        // {
        //     $destination = 'uploads/products/'.$produit->Img_Produit;
        //     if(File::exists($destination))
        //     {
        //         File::delete($destination);
        //     }
        //     $file = $request->file('Img_Produit');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = $request->get('Nom_Produit') . '.' . $extension;
        //     $file->move('uploads/products/', $fileName);
        //     $produit->Img_Produit = $filename;
        //     dd($request);
        // }
        
        // $produit->save();

        return redirect()->route('produits.index')->with('info', 'Le produit a bien été modifié');
    }

    
    
    public function destroy(Produit $produit): RedirectResponse 
    {
        $produit->delete(); 

        return back()->with('info', 'Le produit a bien été supprimé dans la base de données.');
    }
}
