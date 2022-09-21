<?php

use Illuminate\Support\Facades\Route;
use thiagoalessio\TesseractOCR\TesseractOCR;
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
    echo "<pre>";
    echo (new TesseractOCR( __DIR__.'/../public/one.jpeg'))
    ->executable('C:\Program Files\Tesseract-OCR\tesseract.exe')
    ->lang('eng')
    ->run();
    echo "</pre>";
});

Route::get('/home', ['as' => 'home.index', 'uses' => 'App\Http\Controllers\HomeController@index']);