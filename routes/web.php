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
    $data = [
        'chisiamo' => 'Chi siamo',
        'progetti' => 'Progetti',
        'contatti' => 'Contatti'
    ];
    return view('home',$data);
});
Route::get('/contatti', function () {
    $data = [
        'contatti' => [
            '555 6 3 4434 77',
            'via pippo 53'
        ]
    ];
    return view('contatti',$data);
});
Route::get('/progetti', function () {
    $data = [
        'progetti' => []
    ];
    return view('progetti',$data);
});
Route::get('/chisiamo', function () {
    $data = [
        'chisiamo' => 'Classe 24'
    ];
    return view('chisiamo',$data);
});