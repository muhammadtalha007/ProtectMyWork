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
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::get('/faqs', function () {
    return view('faqs');
});
Route::get('/search-work', function () {
    return view('search-work');
});
Route::get('/reviews', function () {
    return view('reviews');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/features', function () {
    return view('features');
});
Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::post('register-user', "AuthController@signup");
Route::post('login-user', "AuthController@login");
Route::post('findprotectedwork', "AuthController@findprotectedwork");
Route::post('sendmessage', "AuthController@sendmessage");
Route::get('download-certificate-file/{certificateId}/{fileId}', "DashboardController@downloadCertificateFile");
Route::get('show-image/{fileId}', "DashboardController@showImage");
Route::get('about', "AuthController@about");
Route::get('user-agreement', "AuthController@userAgreement");
Route::get('privacy-policy', "AuthController@privacyPolicy");

Route::get('logout-user', function (){
    \Illuminate\Support\Facades\Session::flush();
    \Illuminate\Support\Facades\Auth::logout();
    return redirect('/');
})->name('logout-user');



//dashboard routes
Route::get('dashboard', "DashboardController@dashboard")->middleware('dashboard');
Route::get('upload-new-work', "DashboardController@showUploadNewWorkPage")->middleware('dashboard');
Route::get('add-more-tokens', "DashboardController@addMoreTokens")->middleware('dashboard');
Route::get('personal-details', "DashboardController@personalDetails")->middleware('dashboard');
Route::get('billing', "DashboardController@billing")->middleware('dashboard');
Route::get('delete-certificate/{id}', "DashboardController@deleteCertificate")->middleware('dashboard');
Route::post('saving-new-work', "DashboardController@savingNewWork")->middleware('dashboard');
Route::post('set-certificate-password', "DashboardController@resetCertificatePassword")->middleware('dashboard');
Route::post('save-new-token', "DashboardController@saveNewToken")->middleware('dashboard');
Route::post('save-profile-info', "DashboardController@saveProfileInfo")->middleware('dashboard');
Route::post('update-card-info', "DashboardController@updateCardInfo")->middleware('dashboard');
Route::get('my-protected-work', "DashboardController@showMyProtectedWorksPage")->middleware('dashboard');
Route::get('cancel-auto-renew', "DashboardController@cancelAutoRenew")->middleware('dashboard');
Route::get('turnon-auto-renew', "DashboardController@turnOnAutoRenew")->middleware('dashboard');
Route::get('view-certificate/{id}', "DashboardController@viewCertificate")->middleware('dashboard');
Route::get('download-logo/{userId}/{fileId}', "DashboardController@downloadLogo")->middleware('dashboard');

