<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => App\Http\Middleware\LocaleMiddleware::getLocale(), 'middleware' => 'locale'], function(){
    // Все роуты клиентской части писать здесь
    Route::get('/', [WebController::class, 'index'])->name('index');

    Route::get('/subcategories/{id}', [WebController::class, 'subcategories'])->name('subcategories');

    Route::get('/iso/{id}', [WebController::class, 'iso'])->name('iso');

    Route::get('/products/{id}', [WebController::class, 'products'])->name('products');

    Route::get('/product/{id}', [WebController::class, 'product'])->name('product');

    Route::get('/services', [WebController::class, 'services'])->name('services');

    Route::get('/contacts', [WebController::class, 'contacts'])->name('contacts');

    Route::get('/about', [WebController::class, 'about'])->name('about');

    Route::get('/advantages', [WebController::class, 'advantages'])->name('advantages');

    Route::get('/developments', [WebController::class, 'developments'])->name('developments');

    Route::post('/application', [WebController::class, 'application'])->name('application');
});




Route::get('/', function ()
{
    return redirect('/login');
});












