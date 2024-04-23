<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontpage\HomeController;
use App\Http\Controllers\Frontpage\NewsController;
use App\Http\Controllers\Frontpage\ProductController;
use App\Http\Controllers\Frontpage\ProductInquiriesController;
use App\Http\Controllers\Frontpage\PagesController;
use App\Http\Controllers\Frontpage\CartController;
use App\Http\Controllers\Frontpage\CategoryController;
use App\Http\Controllers\Frontpage\BrandController;
use App\Http\Controllers\Frontpage\CustomerController;
use App\Http\Controllers\ClearController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Frontpage\APIRajaOngkirController;
use App\Http\Controllers\Frontpage\CheckoutController;
use App\Http\Controllers\Frontpage\ProfileController;
use App\Http\Controllers\Frontpage\ContactUsController;
use App\Http\Controllers\Frontpage\SearchController;
use App\Http\Controllers\Frontpage\GalleryController;
use App\Http\Controllers\Frontpage\AboutUsController;
use App\Http\Controllers\Frontpage\CareerController;


Auth::routes();

// Multi Language
// Route::get('lang/home', 'LangController@index');
// Route::get('lang/change', 'LangController@change')->name('changeLang');

Route::get('/auth/redirect', [LoginController::class, 'redirectToProvider']);
Route::get('/auth/callback', [LoginController::class, 'handleProviderCallback']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


// Front page old
Route::post('get-ongkir', [APIRajaOngkirController::class, 'getOngkir'])->name('get-ongkir');
Route::get('get-province', [APIRajaOngkirController::class, 'getProvince'])->name('province');
Route::post('get-cities', [APIRajaOngkirController::class, 'getCities'])->name('getCities');
Route::post('get-districts', [APIRajaOngkirController::class, 'getKecamatan'])->name('getKecamatan');
Route::post('get-waybill', [APIRajaOngkirController::class, 'getWaybill'])->name('getWaybill');

Route::get('/{slug}.html', [HomeController::class, 'layananDetail'])->name('layanan_detail');
Route::post('/pesan-layanan', [HomeController::class, 'pesanLayanan'])->name('pesan-layanan');

Route::get('/tentang-kami', [HomeController::class, 'tentangKami'])->name('tentang-kami');

// Route::get('/layanan-doktor-umum', [HomeController::class, 'layananDoktorUmum'])->name('layanan-doktor-umum');

// Route::get('/layanan-homecare', [HomeController::class, 'layananHomecare'])->name('layanan-homecare');


Route::post('/artikel-filter', [HomeController::class, 'filterArtikel'])->name('filter-artikel');

Route::get('/kontak-kami', [HomeController::class, 'kontakKami'])->name('kontak-kami');

Route::get('/member', [HomeController::class, 'member'])->name('member');
Route::post('/contact-save', [ContactUsController::class, 'contactSave'])->name('contact_save');
Route::get('/redirect', [ContactUsController::class, 'redirect'])->name('redirect');

Route::get('/inquiries', [HomeController::class, 'inquiries'])->name('inquiries');
Route::post('/inquiries-save', [ProductInquiriesController::class, 'inquiriesSave'])->name('inquiries_save');
Route::get('/redirects', [ProductInquiriesController::class, 'redirects'])->name('redirects');

Route::get('/karir', [HomeController::class, 'Karir'])->name('karir');
Route::get('/karir/{slug}.html', [HomeController::class, 'karirDetail'])->name('karir_detail');
Route::post('/karir-filter', [HomeController::class, 'filterKarir'])->name('filter-karir');


Route::get('/marketplace', [HomeController::class, 'marketplace'])->name('marketplace');

//Sinar Gemilang

Route::get('/partners', [HomeController::class, 'partner'])->name('partner');
Route::post('/sendEmail', [HomeController::class, 'sendEmail'])->name('sendEmail');


//Clear
Route::prefix('clear')->group(function () {
Route::get('/all', [ClearController::class, 'clearOptimize'])->name('clear.all');
Route::get('/config', [ClearController::class, 'clearConfig'])->name('clear.config');
Route::get('/cache', [ClearController::class, 'clearCache'])->name('clear.cache');
Route::get('/migrate', [ClearController::class, 'migrate'])->name('migrate');
Route::get('/fresh', [ClearController::class, 'migrateFresh'])->name('migrate.fresh');
Route::get('/seeder', [ClearController::class, 'seeder'])->name('seeder');
Route::get('/cart', [CartController::class, 'clearCart'])->name('clear_cart');
Route::get('/storage', [ClearController::class, 'storageLink'])->name('storage');
});

// Frontpage BPR

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/services', [HomeController::class, 'service'])->name('service');
Route::get('/career/{id}', [HomeController::class, 'career_applicant'])->name('career_applicant');
Route::post('/career-save', [CareerController::class, 'careerSave'])->name('career_save');
Route::get('/redirect', [CareerController::class, 'redirect'])->name('redirect');
Route::get('/article', [HomeController::class, 'artikel'])->name('artikel');
Route::get('/article/{slug}', [HomeController::class, 'artikel_detail'])->name('artikel_detail');
Route::get('/about', [HomeController::class, 'about_us'])->name('about_us');
Route::get('/job', [HomeController::class, 'job_title'])->name('job_title');
Route::get('/produk-simpanan', [HomeController::class, 'produk_simpanan'])->name('produk_simpanan');
Route::get('/produk-kredit', [HomeController::class, 'produk_kredit'])->name('produk_kredit');
Route::get('/detail-produk-kredit/{slug}', [HomeController::class, 'detail_produk_kredit'])->name('detail_produk_kredit');
Route::get('/detail-produk-simpanan/{slug}', [HomeController::class, 'detail_produk_simpanan'])->name('detail_produk_simpanan');
Route::get('/pages/{slug}',[PagesController::class,'index'])->name('pages');
Route::get('/search',[SearchController::class,'search'])->name('search');
Route::post('/sendContact', [HomeController::class, 'sendContact'])->name('sendContact');
Route::get('/got', [HomeController::class, 'got'])->name('got');
Route::post('/got-save', [ContactUsController::class, 'gotSave'])->name('got_save');
Route::get('/redirects', [ContactUsController::class, 'redirects'])->name('redirects');
Route::prefix('pages')->group(function () {
    Route::get('/{slug}.html', [PagesController::class, 'index'])->name('pages_detail');
});


