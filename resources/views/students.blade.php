@extends('layouts.base')

@section('content')
    <h3 class="mb-4">Form Data Mahasiswa</h3>

    <form action="{{ route('student.submit') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" class="form-control" id="nim" name="nim" required placeholder="Masukkan NIM">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required placeholder="Masukkan Nama Lengkap">
        </div>
        <button type="submit" class="btn btn-primary">Kirim Data</button>
    </form>
@endsection