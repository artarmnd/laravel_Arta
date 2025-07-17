@extends('layouts.master')

@section('title', 'Form Tambah Mahasiswa')

@section('content')
<h3 class="mt-3">Form Tambah Mahasiswa</h3>

<form action="{{ route('mhs-insert') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="nim" class="form-label">NIM</label>
        <input type="text" name="nim" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="kelas" class="form-label">Kelas</label>
        <input type="text" name="kelas" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="foto" class="form-label">Upload Foto</label>
        <input type="file" name="foto" class="form-control" accept="image/*">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ route('mhs-baru') }}" class="btn btn-secondary">Kembali</a>
</form>

@endsection
