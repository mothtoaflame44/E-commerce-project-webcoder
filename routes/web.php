<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/shop', [HomeController::class, 'shop']);
Route::get('/return-process', [HomeController::class, 'returnProcess']);
Route::get('/view-cart', [HomeController::class, 'viewCart']);
Route::get('/checkout', [HomeController::class, 'checkOut']);
Route::get('/category-product', [HomeController::class, 'categoryProduct']);
Route::get('/sub-category-product', [HomeController::class, 'subCategoryProduct']);
Route::get('/details', [HomeController::class, 'details']);
Route::get('/type-products', [HomeController::class, 'typeProducts']);
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy']);
Route::get('/terms-condition', [HomeController::class, 'termsCondition']);
Route::get('/refund-policy', [HomeController::class, 'refundPolicy']);
Route::get('/payment-policy', [HomeController::class, 'paymentPolicy']);
Route::get('/aboutus', [HomeController::class, 'aboutUs']);
Route::get('/contact-us', [HomeController::class, 'contactUs']);































