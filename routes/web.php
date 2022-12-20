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
    $comics = config('comics.comics');
    return view('comics', compact('comics'));
})->name('comics');

Route::get('/single-page0', function () {
    $comics = config('comics.comics.0');
    return view('single-page', compact('comics'));
})->name('single-page');

Route::get('/single-page1', function () {
    $comics = config('comics.comics.1');
    return view('single-page', compact('comics'));
})->name('single-page');

Route::get('/single-page2', function () {
    $comics = config('comics.comics.2');
    return view('single-page', compact('comics'));
})->name('single-page');

Route::get('/single-page3', function () {
    $comics = config('comics.comics.3');
    return view('single-page', compact('comics'));
})->name('single-page');

Route::get('/single-page4', function () {
    $comics = config('comics.comics.4');
    return view('single-page', compact('comics'));
})->name('single-page');

Route::get('/single-page5', function () {
    $comics = config('comics.comics.5');
    return view('single-page', compact('comics'));
})->name('single-page');

Route::get('/single-page6', function () {
    $comics = config('comics.comics.6');
    return view('single-page', compact('comics'));
})->name('single-page');

Route::get('/single-page7', function () {
    $comics = config('comics.comics.7');
    return view('single-page', compact('comics'));
})->name('single-page');

Route::get('/single-page8', function () {
    $comics = config('comics.comics.8');
    return view('single-page', compact('comics'));
})->name('single-page');

Route::get('/single-page9', function () {
    $comics = config('comics.comics.9');
    return view('single-page', compact('comics'));
})->name('single-page');

Route::get('/single-page10', function () {
    $comics = config('comics.comics.10');
    return view('single-page', compact('comics'));
})->name('single-page');

Route::get('/single-page11', function () {
    $comics = config('comics.comics.11');
    return view('single-page', compact('comics'));
})->name('single-page');

Route::get('/single-page12', function () {
    $comics = config('comics.comics.12');
    return view('single-page', compact('comics'));
})->name('single-page');
