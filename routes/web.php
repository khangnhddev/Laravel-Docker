<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo-laravel-sanctum', function () {
    return 'Laravel Sanctum Sanctum Tutorial';
});

Route::get('/demo-blade', function () {
    return view('demo-blade');
});

Route::get('/demo-redis', function () {
   return 'Khang Dev Test Demo Redis';
});

Route::get('demo-graphql',function(){
    return 'Demo Graqpql ';
});

Route::get('demo-job-queue',function(){
    return 'Demo Graqpql ';
});

Route::get('/demo-markdown-converter', function () {
    $markdown = "# Hello World. I am Khang Dev Ne ne OK ok nha\n\nThis is a simple markdown file.";
    return \Illuminate\Support\Str::of($markdown)->markdown();
});
