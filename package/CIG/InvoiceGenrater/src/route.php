<?php 
use Illuminate\Support\Facades\Route;

// Route::get('/', 'Codelink\InvoiceGenrater\InvoiceController@index');

//1-way
// Route::controller('Cig\Invoicegenrater\InvoiceController')
//     // ->prefix('invoice')
//     // ->as('placements.')
//     ->group(function () {
//         Route::get('/', 'index')->name('index');
//         Route::get('/create', 'create')->name('invoice.create');
//     });

//2-way
Route::group(['namespace' => 'Cig\Invoicegenrater'],function (){
        Route::get('/', 'InvoiceController@index')->name('index');
        Route::get('/create', 'InvoiceController@create')->name('invoice.create');
});