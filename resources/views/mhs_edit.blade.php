@extends('layouts.master')
@section('title', 'Edit Mahasiswa')
@section('content')
<h3>Edit Data Mahasiswa</h3>
<form action="{{ route('mhs.update', $mhs->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label>NIM</label>
        <input type="text" name="nim" class="form-control" value="{{ $mhs->nim }}" required>
    </div>
    <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" value="{{ $mhs->nama }}" required>
    </div>
    <div class="mb-3">
        <label>Kelas</label>
        <input type="text" name="kelas" class="form-control" value="{{ $mhs->kelas }}" required>
    </div>
    <button type="submit" class="btn btn-success">Update</button>
    <a href="{{ route('mhs-baru') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
