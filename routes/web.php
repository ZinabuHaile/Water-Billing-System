<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;

Route::get('/', function () {
    return view('welcome');
});


//Added for pdf Download - Based on user Id
Route::get('/{record}/pdf',[PdfController::class,'download'])->name('user.pdf.download');

//Added for pdf Download - All Users
Route::get('/pdf',[PdfController::class,'downloads'])->name('user.pdf.downloads');


// //Added for pdf Download - Fixed Query
 Route::get('/fixedQuerypdf',[PdfController::class,'downloadsonly'])->name('user.pdf.downloadsonly');


 
//Added for pdf Download - Based on Staff Id
Route::get('/{record}/pdff',[PdfController::class,'downloadstaff'])->name('staff.pdf.download');

//Added for pdf Download - All Staffs
Route::get('/pdff',[PdfController::class,'downloadstaffs'])->name('staff.pdf.downloads');


// //Added for pdf Download - Fixed Query
 Route::get('/fixedQuerypdff',[PdfController::class,'downloadstaffonly'])->name('staff.pdf.downloadsonly');
