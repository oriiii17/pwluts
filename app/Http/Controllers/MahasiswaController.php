<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //
    public function showForm() {
    return view('student-form');
    }
    
    public function submitForm(Request $request) {
    $nim = $request->input('nim');
    $nama = $request->input('nama');
    return view('student-result', compact('nim', 'nama'));
    }
    
}


