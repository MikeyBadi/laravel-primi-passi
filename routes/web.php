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

    $datas =[
        'welcome'=> 'Welcome to my new and awesome Laravel first project',
        'comps'=>['home'=>'Home','about'=>'About','projects'=>'Projects']
    ];

    return view('home',$datas);
})->name('home');

Route::get('/about', function () {
    $datas =[
        'about'=> 'This is what laravel looks like',
        'img'=> 'https://images.ctfassets.net/rporu91m20dc/4KrCV1uQj6CvFqZIYRoQuG/c92e4dcf285e1424bf063ea375baa79a/1_Hell_on_Earth.jpg'
    ];
    return view('about',$datas);
})->name('about');
