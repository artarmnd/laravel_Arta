@extends('layouts.master')

@section('title', 'Detail Mahasiswa')

@section('content')
<div class="container mt-4">
    <h3>Detail Mahasiswa</h3>
    <table class="table table-bordered mt-3">
        <tr>
            <th>NIM</th>
            <td>{{ $mhs->nim }}</td>
        </tr>
        <tr>
            <th>Nama</th>
            <td>{{ $mhs->nama }}</td>
        </tr>
        <tr>
            <th>Kelas</th>
            <td>{{ $mhs->kelas }}</td>
        </tr>
        <tr>
            <th>Foto</th>
            <td>
                @if($mhs->foto)
                    <img src="{{ asset($mhs->foto) }}" width="120" style="object-fit: cover;">
                @else
                    <span class="text-muted">Tidak ada foto</span>
                @endif
            </td>
        </tr>
    </table>
    <a href="{{ route('mhs-baru') }}" class="btn btn-secondary">Kembali</a>
    <form action="{{ route('mhs-insert') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <!-- Input lainnya -->
    <div class="mb-3">
        <label for="foto" class="form-label">Upload Foto</label>
        <input type="file" name="foto" class="form-control" accept="image/*">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>
@endsection
