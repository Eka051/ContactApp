<?php

use Illuminate\Support\Facades\Route;
use Faker\Factory as Faker;
// use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('landing');
});

Route::get('/home', function () {
    $mahasiswa = [];
    $faker = Faker::create();
    for($i = 1; $i <= 20; $i++){
        $mahasiswa[]= [
            'name' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'phone' => $faker->phoneNumber,
            'city' => $faker->city,
        ];
    }

    $dosen = [];
    $faker = Faker::create();
    for($i = 1; $i <= 15; $i++){
        $dosen[] = [
            'name' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'job' => $faker->jobTitle,
        ];
    };

    $karyawan = [];
    $faker = Faker::create();
    for($i = 1; $i <= 15; $i++){
        $karyawan[] = [
            'name' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'address' => $faker->streetAddress,
            'postcode' => $faker->postcode,
        ];
    };

    return view('homepage', [
        'mahasiswa' => $mahasiswa,
        'dosen' => $dosen,
        'karyawan' => $karyawan
    ]);

});

Route::get('/login', function () {
    return view('login');
});


Route::get('/register', function() {
    return view('register');
});

