<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ProduitDetailControllers;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\loginController;



// Route Home Page
Route::get('' , [CategoriesController::class , "show"])->name('index.home');
// Route::view('' , "index.Home")->name("index.home");

// Route About Page
Route::view("/about" , "index.About")->name("index.about");


// Route vaches
Route::get('/produit/Vaches' , [ProduitDetailControllers::class , "CowProductindex"])->name('Vaches.index');

Route::get('/produit/vache' , [ProduitDetailControllers::class , "VacheDetailindex"])->name('vache.index');

Route::get('/produit/bovin' , [ProduitDetailControllers::class , "BovinDetailindex"])->name('bovin.index');

Route::get('/produit/tauraux' , [ProduitDetailControllers::class , "TaurauxDetailindex"])->name('tauraux.index');

// Route lapins
Route::get('/produit/Lapins' , [ProduitDetailControllers::class , "BunnyProductindex"])->name('Lapins.index');

// Route Cheval
Route::get('/produit/Chevaux' , [ProduitDetailControllers::class , "HorseProductindex"])->name('Chevaux.index');

Route::get('/produit/cheval' , [ProduitDetailControllers::class , "ChevalProductindex"])->name('cheval.index');

Route::get('/produit/equis' , [ProduitDetailControllers::class , "EquinProductindex"])->name('equis.index');

Route::get('/produit/poney' , [ProduitDetailControllers::class , "PoneyProductindex"])->name('poney.index');

// Route Volailles
Route::get('/produit/Volailles' , [ProduitDetailControllers::class , "ChickenProductindex"])->name('Volailles.index');

Route::get('/produit/poussins' , [ProduitDetailControllers::class , "PoussinsDetailindex"])->name('poussin.index');

Route::get('/produit/poulets' , [ProduitDetailControllers::class , "PouletDetailindex"])->name('poulet.index');

Route::get('/produit/coqs' , [ProduitDetailControllers::class , "CoqDetailindex"])->name('coqs.index');

Route::get('/produit/dind' , [ProduitDetailControllers::class , "DindDetailindex"])->name('dind.index');

// Route Chèvres
Route::get('/produit/Chèvres' , [ProduitDetailControllers::class , "GoatProductindex"])->name('Chèvres.index');

Route::get('/produit/chèvre' , [ProduitDetailControllers::class , "ChevreDetailindex"])->name('chevre.index');

Route::get('/produit/ovins' , [ProduitDetailControllers::class , "OvinDetailindex"])->name('ovin.index');

Route::get('/produit/caprins' , [ProduitDetailControllers::class , "CaprinDetailindex"])->name('caprin.index');


// Route Chat
Route::get('/produit/Chats' , [ProduitDetailControllers::class , "CatProductindex"])->name('Chats.index');

// Route Chien
Route::get('/produit/Chiens' , [ProduitDetailControllers::class , "DogProductindex"])->name('Chiens.index');

// Route Escargots
Route::get('/produit/Escargots' , [ProduitDetailControllers::class , "EscargotDetailindex"])->name('Escargots.index');

// Route Page Contact-Us
Route::resource('/contactus' , ContactusController::class);

// Route Page Admin
Route::get('/admin' , [AdminsController::class , 'index'])->name('admin.index');

// Route Gestion Clients
Route::resource('/clients' , ClientController::class);

// Route Gestion Messages
Route::resource('/messagerie' , MessageController::class);

// Route Gestion Produits
Route::resource('/produits' , ProduitController::class);

// Route Gestion Categorie
Route::resource('/categories' , CategorieController::class);

// Route Gestion Admin
Route::resource('/admins' , AdminController::class);

// Route::view("/test" , "ClientConnect");

//Auth
Route::get('/login',[loginController::class,'show'])->name('auth.show');
Route::post('/login',[loginController::class,'login'])->name('login');
Route::get('/logout',[loginController::class,'logout'])->name('auth.logout');

//Client Dashbord
Route::view('/dashbord/client' , 'AuthClient.DashbordClient')->name('DashbordClient');

//Admin Login
Route::view('/dashbord/admin' , 'Admin.AdminConnect')->name('auth.admin');
