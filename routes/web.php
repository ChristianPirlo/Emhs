<?php
use Illuminate\Routing\Console\MiddlewareMakeCommand;

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

Route::group(['middleware'=>['auth']],function () {
Route::get('/home', 'PageController@home');
Route::get('/profile', 'PageController@profile');
Route::get('/mahasiswa', 'PageController@mahasiswa')->middleware('auth');
Route::get('/contact', 'PageController@contact');
Route::get('/mahasiswa/pencarian', 'PageController@pencarian');
Route::post('/mahasiswa/simpan', 'PageController@simpan');
Route::get('/mahasiswa/formtambah', 'PageController@tambah');
Route::get('/mahasiswa/hapusmhs/{id}', 'PageController@hapusmhs');
Route::get('/mahasiswa/formedit/{id}', 'PageController@edit');
Route::put('/mahasiswa/update/{id}', 'PageController@update');
Route::get('/logout', 'AuthController@logout');
});

Route::group(['middleware'=>['guest']],function () {
    Route::get('/register', 'AuthController@register');
    Route::post('/simpan', 'AuthController@simpan');
    Route::get('/', 'AuthController@login');
    Route::post('/ceklogin', 'AuthController@ceklogin');
    
    // Route::post('/mahasiswa/hapusmahasiswa', 'PageController@hapus');
});


Route::get('/index', function () {
    return view('index');
});

Route::get('/task', function () {
    return view('task   ');
});


