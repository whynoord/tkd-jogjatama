@extends('layouts.website')

@section('title')
    Pegawai
@endsection
    
@section('content')
<div class="container">
    <h3 class="text-center">Daftar Pegawai</h3>
    <hr class="mb-5">
    <div class="d-flex mb-3">
      <div class="ms-auto">
        <a href="{{ route('tambahPegawai') }}"><button class="btn btn-transparent border-primary text-primary py-2 px-3">Tambah</button></a>
      </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Jabatan</th>
              <th>Kontrak</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($employees as $employee)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{$employee->name }}</td>
              <td>{{$employee->position->position }}</td>
              <td>{{$employee->contract->contract }}</td>
              <td>
                <a href="{{ route('editPegawai', $employee->id) }}"><i class="bi bi-pencil-square"></i></a>
                <a href="{{ route('hapusPegawai', $employee->id) }}"><i class="bi bi-x-square-fill"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
    </table>
  </div>
@endsection