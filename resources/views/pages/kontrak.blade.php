@extends('layouts.website')

@section('title')
    Kontrak
@endsection
    
@section('content')
<div class="container">
    <h1>Daftar Kontrak</h1>
    <a href="{{ route('tambahKontrak') }}"><button class="btn btn-primary">Tambah</button></a>
    <table class="table table-striped">
        <thead>
            <tr>
              <th>No</th>
              <th>Lama kontrak</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($contracts as $contract)
            <tr>
              <td>{{$loop->iteration }}</td>
              <td>{{ $contract->contract }}</td>
              <td>
                <a href="{{ route('editKontrak', $contract->id) }}"><i class="bi bi-pencil-square"></i></a>
                <a href="{{ route('hapusKontrak', $contract->id) }}"><i class="bi bi-x-square-fill"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
    </table>
  </div>
@endsection