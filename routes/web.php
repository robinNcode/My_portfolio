<?php

use Illuminate\Support\Facades\Route;


Route::get('/portfolio','FrontEnd@index');
Route::get('/about','FrontEnd@about');
Route::get('/services','FrontEnd@service');
Route::get('/page1','FrontEnd@page1');
Route::get('/page2','FrontEnd@page2');
Route::get('/blog','FrontEnd@blog');
Route::get('/blogd','FrontEnd@blogd');
Route::get('/contact','FrontEnd@contact');


Route::get('/vari/{name}','demo@show');
