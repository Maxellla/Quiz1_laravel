<?php

use Illuminate\Support\Facades\Route;

Route::get('hello/name', function($name) {
    return 'hi ' . $name; //It will say "hi" followed by whatever name you typed (like "hi John");
});
