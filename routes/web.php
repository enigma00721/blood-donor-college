<?php

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

Route::get('/', function () {
    return view('frontend.index');
})->name('front');


Route::get('/help','FrontController@help')->name('help');
Route::get('/whyus','FrontController@whyus')->name('whyus');
Route::get('/donor/register','FrontController@donorRegister')->name('donor.register')
				->middleware('auth');
Route::get('/find/blood','FrontController@findBlood')->name('find.blood');

Route::get('/donor/profile/view/{id}','FrontController@donorProfile')->name('donor.profile.view');
Route::post('/donor/register','FrontController@donorSubmit')->name('donor.register.store');
Route::post('/feedback/submit','FrontController@feedbackSubmit')->name('feedback.submit');





Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'Backend\HomeController@index')->name('home')->middleware('admin');

// Backend
Route::resource('/backend/donor', 'Backend\DonorController', [
    'as' => 'backend' // add 'backend prefix to resource route name.
]);

Route::resource('/backend/feedback', 'Backend\FeedbackController', [
'as' => 'backend' // add 'backend prefix to resource route name.
])->middleware('admin');

Route::resource('/backend/users', 'Backend\UsersController', [
    'as' => 'backend'
]);

Route::resource('/backend/bloodgroup', 'Backend\BloodGroupController', [
'as' => 'backend' // add 'backend prefix to resource route name.
]);


Route::get('/backend/profile',[
	'as' => 'backend.profile',
	'uses' => 'Backend\UsersController@profile'
]);
Route::patch('/backend/profile/{id}',[
	'as'=>'backend.profile.update',
	'uses' => 'Backend\UsersController@profileUpdate'
]);

Route::get('/backend/messages',[
	'as' => 'backend.messages',
	'uses' => 'Backend\UsersController@messages'
]);


