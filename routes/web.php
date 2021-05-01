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
Route::get('download-certificate-file/{certificateId}/{fileId}', "DashboardController@downloadCertificateFile");




//Route::get('category', 'CategoryController@getCategoryView')->middleware('dashboard');
//Route::get('add-category', "CategoryController@getAddCategoryView")->middleware('dashboard');
//Route::post('save-category', "CategoryController@saveCategory")->middleware('dashboard');
//Route::get('delete-category/{id}', "CategoryController@deleteCategory")->middleware('dashboard');
//Route::get('edit-category/{id}', "CategoryController@editCategory")->middleware('dashboard');
//Route::post('save-edited-category', "CategoryController@saveEditedCategory")->middleware('dashboard');
//
//Route::get('events', 'EventsController@getEventListView')->middleware('dashboard');
//Route::get('add-event', "EventsController@getAddEventView")->middleware('dashboard');
//Route::post('save-event', "EventsController@saveEvent")->middleware('dashboard');
//Route::get('delete-event/{id}', "EventsController@deleteEvent")->middleware('dashboard');
//Route::get('edit-event/{id}', "EventsController@editEvent")->middleware('dashboard');
//Route::post('save-edited-event', "EventsController@saveEditedEvent")->middleware('dashboard');
//
//Route::get('calender', 'CalenderController@getCalenderView')->middleware('dashboard');
//Route::get('get-calender', 'CalenderController@getCalendarData')->middleware('dashboard');
//Route::post('calendar/create','CalenderController@create');
//Route::post('calendar/update','CalenderController@update');
//Route::post('calendar/delete','CalenderController@destroy');
//
//new work
//Route::post('login', "AdminController@login")->name('login');
//
//Route::get('/home', "HomeController@showDashboard")->middleware('dashboard');
//Route::get('/chat', "HomeController@chat")->middleware('dashboard');
//Route::get('/chat-details/{id}', "HomeController@chatDetails")->middleware('dashboard');
//Route::post('/send-sms/{parentId}', "HomeController@sendSMS");
//
//Route::get('staff', 'StaffController@getStaffListView')->middleware('dashboard');
//Route::get('add-staff', "StaffController@getAddStaffView")->middleware('dashboard');
//Route::post('save-staff', "StaffController@saveStaff");
//Route::get('delete-staff/{id}', "StaffController@deleteStaff")->middleware('dashboard');
//Route::get('edit-staff/{id}', "StaffController@editStaff")->middleware('dashboard');
//Route::post('save-edited-staff', "StaffController@saveEditedStaff");
//
//Route::get('customer', 'CustomerController@getCustomerListView')->middleware('dashboard');
//Route::get('add-customer', "CustomerController@getAddCustomerView")->middleware('dashboard');
//Route::post('save-customer', "CustomerController@saveCustomer");
//Route::get('delete-customer/{id}', "CustomerController@deleteCustomer")->middleware('dashboard');
//Route::get('edit-customer/{id}', "CustomerController@editCustomer")->middleware('dashboard');
//Route::post('save-edited-customer', "CustomerController@saveEditedCustomer");
//
//Route::get('message-template', 'MessageTemplateController@getMessageTemplateListView')->middleware('dashboard');
//Route::get('add-message-template', "MessageTemplateController@getAddMessageTemplateView")->middleware('dashboard');
//Route::post('save-message-template', "MessageTemplateController@saveMessageTemplate");
//Route::get('delete-message-template/{id}', "MessageTemplateController@deleteMessageTemplate")->middleware('dashboard');
//Route::get('edit-message-template/{id}', "MessageTemplateController@editMessageTemplate")->middleware('dashboard');
//Route::post('save-edited-message-template', "MessageTemplateController@saveEditedMessageTemplate");
//
//Route::post('login-staff', "StaffController@login");
//Route::post('send-sms-to-checked', "CustomerController@sendSmsToChecked");
//Route::post('send-sms-to-checked-customers', "CustomerController@sendSmsToCheckedCustomer");
//Route::post('delete-checked-customers', "CustomerController@deleteCheckedCustomer");
//Route::post('delete-checked-chats', "CustomerController@deleteCheckedChats");
//Route::post('customers/all', "CustomerController@getAll");
//Route::post('chats/all', "CustomerController@getAllChats");
//
//Route::post('/import_excel/import', 'ImportExcelController@import');
//Route::get('icoming-sms', 'HomeController@icomingSms');
