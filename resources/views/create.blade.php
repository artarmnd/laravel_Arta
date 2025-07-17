@extends('layouts.master')

@section('title', 'Form Tambah Mahasiswa')

@section('content')
<h3 class="mt-3">Form Tambah Mahasiswa</h3>

<form action="{{ route('mhs-insert') }}" method="POST" class="mt-3">
    @csrf
    <div class="mb-3">
        <label for="nim" class="form-label">NIM</label>
        <input type="text" class="form-control" id="nim" name="nim" required>
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
    </div>
    <div class="mb-3">
        <label for="kelas" class="form-label">Kelas</label>
        <input type="text" class="form-control" id="kelas" name="kelas" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ route('mhs-baru') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
