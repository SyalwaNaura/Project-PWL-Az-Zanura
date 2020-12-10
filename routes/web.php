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

Route::get('/', function () {
    return view('auth.login');
});

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/data', function () {
//     return 'Hello People :)';
// });

Route::get('/hai/{page}', function ($page) {
    return "Hello, ini saya Syalwa sedang belajar halaman  Route " . $page;
});

Route::get('/halo/{page?}', function ($page = 1) {
    return "Hello, ini saya Syalwa sedang mengakses halaman " . $page;
});

Route::get('/penjumlahan/{page?}', function ($page) {
    $a = 3;
    $b = 10;
    $hasil = $a + $b;
    return "Hasil penjumlahan a dan b = " . $hasil;
});

Route::get('syalwa', 'SyalwaController@index');

Route::get('tugas_pertama_Syalwa', 'tugas_pertama_Syalwa@index');

// Route::get('home', 'BlogSyalwaController@HomeController');

Route::get('home', 'HomeController@index');

// Route::get('/article/{id}', 'BlogSyalwaController@ArticleController');

// Route::get('About', 'BlogSyalwaController@AboutController');

// Route::get('index', 'BlogSyalwaController@index');

Route::get('/about', 'ProjectSyalwaController@about');
Route::get('/search', 'ProjectSyalwaController@search');
Route::get('/catalog', 'ProjectSyalwaController@catalog');
Route::get('/catalog2', 'ProjectSyalwaController@catalog2');
Route::get('/catalog3', 'ProjectSyalwaController@catalog3');
Auth::routes();

Route::get('/home', 'ProjectSyalwaController@home');
