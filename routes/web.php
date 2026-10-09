<?php

use App\Http\Controllers\AdminMailController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegistrationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\AwardController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HeroBannerController;
use App\Http\Controllers\OurStoryController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LicenceController;
use App\Http\Controllers\MailContactController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebsiteSettingController;
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

Route::get('/', [HomePageController::class, 'index'])->name('home');

Route::get('/services', [PageController::class, 'servicePage'])->name('services');
Route::get('/service/{slug}', [HomePageController::class, 'serviceDetails'])->name('service_details');

Route::get('/news-events', [PageController::class, 'newsPage'])->name('news.events');
Route::get('/news-events/{slug}', [PageController::class, 'newsDetailPage'])->name('news.details');

Route::get('/our-clients', [PageController::class, 'clientPage'])->name('our.clients');

Route::get('/career', [PageController::class, 'careerPage'])->name('career');
Route::get('/careers/{slug}', [PageController::class, 'careerDetailPage'])->name('career.details');

Route::get('/our-people', [PageController::class, 'peoplePage'])->name('our.people');
Route::get('/contact', [PageController::class, 'contactPage'])->name('contact');
Route::get('/licence', [PageController::class, 'licencePage'])->name('licence');
Route::get('/awards', [PageController::class, 'awardPage'])->name('award');
Route::get('/profile', [PageController::class, 'profilePage'])->name('profile');
Route::post('/contact-form', [MailContactController::class, 'store'])->name('contact-form');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegistrationController::class, 'index'])->name('register');
Route::post('/register', [RegistrationController::class, 'store']);

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('hero', HeroBannerController::class);
    Route::resource('ourstory', OurStoryController::class);
    Route::resource('services', ServicesController::class);
    Route::resource('news', NewsController::class);
    Route::resource('career', CareerController::class);
    Route::resource('people', PeopleController::class);
    Route::resource('licence', LicenceController::class);
    Route::resource('award', AwardController::class);
    Route::resource('client', ClientController::class);
    Route::resource('profile', ProfileController::class);
    Route::resource('contact', ContactController::class);
    Route::resource('website', WebsiteSettingController::class);

    Route::get('/mail', [AdminMailController::class, 'index'])->name('mail');
});





