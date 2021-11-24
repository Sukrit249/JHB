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
    return view('home');
});
Route::get('home', function () {
    return view('home');
});

Route::get('songlist', function () {
    return view('songlist');
});

// Route::get('upload', function () {
//     return view('upload');
// });

// Route::get('songList', function () {
    
//     $songList = [
//       ['img' => '/img/Full-Speed', 'Song' => 'music/Full-speed'],
//       ['img' => '/img/Hydra-Stage', 'Song' => 'music/Hydra-Stage'],
//       ['img' => '/img/Voices', 'Song' => 'music/Voices'],
//     ];
//     return view('songList', ['songList' => $songList]);
// });


