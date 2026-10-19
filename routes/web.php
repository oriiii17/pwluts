<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/students', function () {
    return view('students');
});

Route::get('/courses', function () {
    return view('courses');
});

Route::get('/grades', function () {
    return view('grades');
});

Route::get('/assignments', function () {
    return view('assignments');
});


Route::post('/student-submit', function (Request $request) {
    $nim = $request->input('nim');
    $nama = $request->input('nama');
    return "Data Berhasil Diterima!<br>NIM: " . $nim . "<br>Nama: " . $nama;
})->name('student.submit');

