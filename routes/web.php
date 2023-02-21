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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',function () {
    echo "Selamat Datang";
});
Route::get('/about',function () {
    echo "Nama: Trisinus Gulo<br>";
    echo "Nim: 241720035<br>";
    echo "Absen: 28<br>";
    echo "kelas: 2G";
});
Route::get('/articles/{id?}', function ($id=1) {
    echo "Halaman Artikel dengan ID ".$id;
});

