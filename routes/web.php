<?php

use Illuminate\Support\Facades\Route;


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



// routes for PDF Convert View
Route::get('/pdf_view',[App\Http\Controllers\PDFController::class, 'pdfView'])->name('pdf.view');

// routes for PDF Convert
Route::get('/pdf_converttd',[App\Http\Controllers\PDFController::class, 'pdfGeneration'])->name('pdf.convert');



Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');