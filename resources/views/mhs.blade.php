@extends('layouts.master')
@section('title', 'Halaman Mahasiswa')
@section('content')
<!--body-->
<h3>Data Mahasiswa Baru</h3>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">NIM</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($mahasiswa as $item)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->nim }}</td>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->kelas }}</td>
        <td>
          <a href="{{ route('mhs.show', $item->id) }}" class="btn btn-info btn-sm">Detail</a>
          <a href="{{ route('mhs.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
          <form action="{{ route('mhs.destroy', $item->id) }}" method="POST" style="display:inline;">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
          </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection
