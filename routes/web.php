<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.main');
});

Route::get('/about', function(){
    return view('pages.about_us');
});

Route::get('/contact', function(){
    return view('pages.contact');
});
Route::get('/fasq', function(){
    return view('pages.fasq');
});
Route::get('/awards', function(){
    return view('pages.awards');
});
Route::get('/team', function(){
    return view('pages.leadership-team');
});
Route::get('/pricing', function(){
    return view('pages.pricing');
});
Route::get('/why-us', function(){
    return view('pages.why-us');
});
Route::get('/services', function(){
    return view('pages.services');
});
Route::get('/blog', function(){
    return view('pages.blog');
});
Route::get('/singleblog', function(){
    return view('pages.single_blog');
});