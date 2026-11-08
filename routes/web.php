<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CustomerQuestion;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SubCategoryController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'admin.index')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__ . '/settings.php';

Route::get('/categories', [CategoryController::class, 'show'])->name('create-category');
Route::post('/categories', [CategoryController::class , 'create'])->name('admin.create-category');
Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('admin.category.destroy');
Route::get('/subcategories', [SubCategoryController::class , 'show'])->name('create-subcategory');
Route::post('/subcategories', [SubCategoryController::class, 'create'])->name('admin.create-subcategory');

Route::delete('/subcategories/{id}', [SubCategoryController::class, 'destroy'])->name('admin.subcategory.destroy');

// /--------

Route::get('/products', [ProductController::class, 'show'])->name('create-product');
Route::post('/products', [ProductController::class, 'create'])->name('admin.create-product');

// =========================




Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/faqs', [FaqController::class, 'show'])->name('faqs.index');
    Route::get('/support-questions', [CustomerQuestion::class, 'show'])->name('support-questions.index');
    Route::get('/support-questions/{id}/answer', [CustomerQuestion::class, 'answer'])->name('support-questions.answer');
    Route::view('/support-messages', 'admin.support-messages')->name('support-messages.index');
    Route::view('/contact', 'admin.contact')->name('contact.index');
    Route::get('/banners', [BannerController::class, 'show'])->name('banners.index');

});

Route::get('/customer', [CustomerController::class , 'showBanner'])->name('customer.index');

// -------------------------------------------------------------


Route::get('/customer/{id}' , [SubCategoryController::class, 'showPage'])->name('customer.subcategoryPage');




// --------------------------------------------------------------


Route::get('/customer/faqs', [CustomerController::class, 'showFAQ'])->name('customer.faqs');

Route::view('/help', 'customer.help')->name('customer.help');
Route::view('/support', 'customer.support')->name('customer.support');
Route::view('/contact', 'customer.ContactUs')->name('customer.contact');

Route::post('/faqs', [FaqController::class, 'store'])->name('admin.faqs.store');
Route::get('/faqs', [FaqController::class, 'show'])->name('admin.faq.show');
Route::post('/banners', [BannerController::class, 'store'])->name('admin.banner.store');

Route::get('/banners', [BannerController::class, 'show'])->name('admin.banner.show');

Route::delete('/banners/{id}', [BannerController::class, 'destroy_banner'])->name('admin.banners.destroy');
Route::delete('/faqs/{id}', [FaqController::class, 'destroy_faq'])->name('admin.faqs.destroy');

route::view('/contactus', 'customer.ContactUs')->name('customer.contactus');

route::post('/contactus',[CustomerController::class, 'sendmessage'])->name('customer.contactus.send');
