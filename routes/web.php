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
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/select-topic/', 'HomeController@selectTopic')->name('student.topic.select');
Route::post('/upload-file/', 'HomeController@uploadFile')->name('student.file.upload');
Route::get('/delete-file/{id}', 'HomeController@deleteFile')->name('student.file.delete');
Route::get('/download-file/{id}', 'HomeController@downloadFile')->name('student.file.download');

Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
Route::post('/admin/add-topic', 'AdminController@addTopic')->name('admin.topic.add');
Route::post('/admin/add-supervisor', 'AdminController@addSupervisor')->name('admin.supervisor.add');
Route::get('/admin/delete-supervisor/{id}', 'AdminController@deleteSupervisor')->name('admin.supervisor.delete');
Route::get('/admin/delete-topic/{id}', 'AdminController@deleteTopic')->name('admin.topic.delete');

Route::get('/supervisor/login', 'Auth\SupervisorLoginController@showLoginForm')->name('supervisor.login');
Route::post('/supervisor/login', 'Auth\SupervisorLoginController@login')->name('supervisor.login.submit');
Route::get('/supervisor', 'SupervisorController@index')->name('supervisor.dashboard');
Route::post('/supervisor/upload-file/', 'SupervisorController@uploadFile')->name('supervisor.file.upload');
//Route::post('/supervisor/upload-file/', 'SupervisorController@uploadFile')->name('supervisor.file.upload');



Route::resource('course','CourseController');
Route::resource('rooms','RoomsController');
Route::resource('exams','ExamsController');

Route::resource('gen','GenexamsController');

Route::resource('dep','DepController');
Route::resource('group','GroupController');

Route::resource('stuts','StutsController');
Route::resource('leave','LeaveController');
//Route::post('/staff', 'LeaveController@update')->name('staff.index');

Route::resource('studentt','StudenttController');
Route::resource('staff','StaffController');