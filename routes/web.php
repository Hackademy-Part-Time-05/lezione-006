<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController; 
use Illuminate\Support\Facades\Http;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

 
Route::get('/', [PageController::class, 'homepage'])->name('homepage');
Route::get('/struttura', [PageController::class, 'structure'])->name('structure');
Route::get('/dove-siamo', [PageController::class, 'location'])->name('location');
Route::get('/corsi-disponibili', [PageController::class, 'list'])->name('list');
Route::get('/corsi-disponibili/dettagli/{id}', [PageController::class, 'show'])->name('show'); 


Route::get('/contattaci', [PageController::class, 'contact'])->name('contact');  


//---Nuova
Route::post('/contattaci/invia-tutto', [PageController::class, 'send'])->name('send');
  
Route::get('/thank-you', function (){
  return 'Grazie';
})->name('thankyou');  










Route::get('/chiamata', function(){
 dd(Http::get('https://fakestoreapi.com/products')->json()); 
});


