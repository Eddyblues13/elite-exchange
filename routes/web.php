<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\RegistrationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


//home page
Route::get('/', [HomeController::class, 'homepage'])->name('homepage');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/track', [HomeController::class, 'track'])->name('track');
Route::get('/how-to', [HomeController::class, 'how'])->name('how');
Route::get('/destinations', [HomeController::class, 'destinations'])->name('destinations');
Route::match(['get', 'post'], 'package', [HomeController::class, 'viewPackage'])->name('package');





//Admin/user Controller
Route::get('package/{package}', [CustomAuthController::class, 'view'])->name('package.view');
Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->middleware('check.package')->name('dashboard');
Route::get('create-shipment', [CustomAuthController::class, 'createShipment'])->name('create.shipment');
Route::get('send-user-email', [CustomAuthController::class, 'sendUserEmail'])->name('send.user.email');
Route::match(['get', 'post'], 'send-mail', [CustomAuthController::class, 'sendMail'])->name('send.mail');
Route::get('profile', [CustomAuthController::class, 'profile'])->name('profile');
Route::match(['get', 'post'], 'change-password', [CustomAuthController::class, 'updatePassword'])->name('update-password');
Route::get('settings', [CustomAuthController::class, 'settings'])->name('settings');
Route::get('all-packages', [CustomAuthController::class, 'allPackages'])->name('all.packages');
Route::match(['get', 'post'], 'save-shipment', [CustomAuthController::class, 'saveShipment'])->name('save.shipment');
Route::put('update-shipment/{id}', [CustomAuthController::class, 'updateShipment'])->name('update.shipment');
Route::match(['get', 'post'], '/delete-package/{id}', [CustomAuthController::class, 'deletePackage'])->name('delete.package');
Route::get('edit-package/{id}', [CustomAuthController::class, 'editPackage'])->name('edit.package');
Route::get('logout', [CustomAuthController::class, 'logOut'])->name('logout');
