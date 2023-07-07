<?php

use App\Http\Controllers\Home\Index as HomePage;
use App\Http\Controllers\Contact\Index as ContactPage;
use App\Http\Controllers\AboutUs\Index as AboutUsPage;
use App\Http\Controllers\Galleries\Index as GalleriesPage;
use App\Http\Controllers\FAQs\Index as FAQsPage;
use App\Http\Controllers\Services\Index as ServicesPage;
use Illuminate\Support\Facades\Route;


Route::get('/', HomePage::class)->name('home');
Route::get('/galleries', GalleriesPage::class)->name('galleries');
Route::get('/about-us', AboutUsPage::class)->name('about-us');
Route::get('/services', ServicesPage::class)->name('services');
Route::get('/FAQs', FAQsPage::class)->name('faqs');
Route::get('/contact-us', ContactPage::class)->name('contact');

