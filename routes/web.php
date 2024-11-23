<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', ['name' => 'Jane Togo', 'age' => 20, 'position' => 'web-developer', 'address' => 'Washington, D.C.']);
});

Route::get('/contacts', function () {
    return view('contacts', [
        'address' => 'Washington, D.C., 1600 Pennsylvania Avenue NW',
        'post_code' => 20500,
        'email' => '12345@gmail.com',
        'phone' => '+18724201428'
    ]);
});
