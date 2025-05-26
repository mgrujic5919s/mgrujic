<?php

use App\Http\Controllers\AuthController;

use App\Http\Controllers\ZanrController;
use App\Http\Controllers\PlatformaController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\ComentarController;

use App\Http\Middleware\AuthMiddleware;
use App\Http\Middleware\CheckUserLoggedIn;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware(CheckUserLoggedIn::class)->group(function() {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'storeLogin'])->name('storeLogin');

    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'storeRegister'])->name('storeRegister');

});

Route::middleware(AuthMiddleware::class)->group(function() {

    //katalog:
    Route::get("/",  [KatalogController::class, "index"])->name("katalog.list"); //ok

    // Route::get("/index1",  [KatalogController::class, "index1"])->name("katalog.list1"); 
    // Route::get("/",  [KatalogController::class, "akcija"])->name("katalog.akcija'"); 
    // Route::get("/index2",  [KatalogController::class, "index2"])->name("katalog.list");      
                           
    Route::get("/add-katalog", [KatalogController::class, "create"])->name("katalog.create");               
    Route::post("/add-katalog", [KatalogController::class, "store"])->name("katalog.store");                
    Route::get("/edit-katalog/{id}", [KatalogController::class, "edit"])->name("katalog.edit");             
    Route::post("/edit-katalog/{id}", [KatalogController::class, "update"])->name("katalog.update");        
    Route::get("/delete-katalog/{id}", [KatalogController::class, 'delete'])->name("katalog.delete");       
    Route::post("/delete-katalog/{id}", [KatalogController::class, 'destroy'])->name("katalog.destroy");    

    //comentar:
    Route::get("/comentari-list", [ComentarController::class, "list"])->name("comentari.list");             
    Route::get("/dodaj-comentar", [ComentarController::class, 'create'])->name("comentari.create");         
    Route::post("/dodaj-comentar", [ComentarController::class, 'store'])->name("comentari.store");
    Route::get("/edit-comentar/{id}", [ComentarController::class, "edit"])->name("comentar.edit");          
    Route::post("/edit-comentar/{id}", [ComentarController::class, "update"])->name("comentar.update");     
    Route::get("/delete-comentar/{id}", [ComentarController::class, 'delete'])->name("comentar.delete");    
    Route::post("/delete-comentar/{id}", [ComentarController::class, 'destroy'])->name("comentar.destroy"); 

    //zanr:
    Route::get("/zanrovi-list",  [ZanrController::class, "list"])->name("zanr.list");              
    Route::get("/add-zanr", [ZanrController::class, "create"])->name("zanr.create");               
    Route::post("/add-zanr", [ZanrController::class, "store"])->name("zanr.store");                
    Route::get("/edit-zanr/{id}", [ZanrController::class, "edit"])->name("zanr.edit");             
    Route::post("/edit-zanr/{id}", [ZanrController::class, "update"])->name("zanr.update");        
    Route::get("/delete-zanr/{id}", [ZanrController::class, 'delete'])->name("zanr.delete");       
    Route::post("/delete-zanr/{id}", [ZanrController::class, 'destroy'])->name("zanr.destroy");    

    //platforma:
    Route::get("/platforme-list",  [PlatformaController::class, "list"])->name("platforma.list");              
    Route::get("/add-platforma", [PlatformaController::class, "create"])->name("platforma.create");               
    Route::post("/add-platforma", [PlatformaController::class, "store"])->name("platforma.store");                
    Route::get("/edit-platforma/{id}", [PlatformaController::class, "edit"])->name("platforma.edit");             
    Route::post("/edit-platforma/{id}", [PlatformaController::class, "update"])->name("platforma.update");        
    Route::get("/delete-platforma/{id}", [PlatformaController::class, 'delete'])->name("platforma.delete");       
    Route::post("/delete-platforma/{id}", [PlatformaController::class, 'destroy'])->name("platforma.destroy");   

});

Route::get('/logout', [AuthController::class, "logout"])->name('logout');

Route::get("/not-auth", [AuthController::class, "notAuth"])->name('not-auth');

Route::get("/o-nama", [AuthController::class, "oNama"])->name('o-nama');            //o-nama
Route::get("/kontakt", [AuthController::class, "kontakt"])->name('kontakt');        //kontakt
Route::get("/akcija", [AuthController::class, "akcija"])->name('katalog.akcija');   //akcija
Route::get("/index1",  [KatalogController::class, "index1"])->name("katalog.list1");  
Route::get("/comentari-list1", [ComentarController::class, "list1"])->name("comentari.list1");   
Route::get("/zanrovi-list1",  [ZanrController::class, "list1"])->name("zanr.list1");  
Route::get("/platforme-list1",  [PlatformaController::class, "list1"])->name("platforma.list1");  
Route::get("/opsirnije/{id}",  [KatalogController::class, "opsirnije"])->name("katalog.opsirnije");  