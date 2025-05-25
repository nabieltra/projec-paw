<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profil_pasien', function () {
    return view('profil_pasien', [
        'user_data' => [
            'Username' => 'Ashley Kennedy', 
            'Date of Birth' => '14 Maret 2015', 
            'Gender' => 'Male', 
            'Email' => 'AshleyKen@Gmail.com', 
            'Telephone' => '+6281882853092'
        ]
    ]);
});
