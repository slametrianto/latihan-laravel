<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginationController;

use App\Http\Controllers\UploadController;

use\App\PaymentGateway\Payment;

use\App\Tes\TesFacades;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-template', function(){
    return view('test');
});


Route::get('/home', function(){
 return view('index');
});

Route::get('/about', function(){
    return view('about');
   });

   Route::get('/contact', function(){
    return view('contact');
   });

   Route::get('/users', [PaginationController::class, 'allUser']);

   Route::get('/upload', [UploadController::class, 'uploadForm']);

   Route::post('/upload' , [UploadController::class, 'uploadFile'])->name('upload.uploadfile');

   Route::get('/{locale}', function($locale){
       App::setlocale($locale);
       return view('welcome');
   });

   Route::get('/payment', function(){
       return Payment::process();
   });

   Route::get('/facadeex', function(){
       return TesFacades::testingFacades();
   });