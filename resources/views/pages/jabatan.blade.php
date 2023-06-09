@extends('layouts.website')

@section('title')
    Jabatan
@endsection

@section('content')
    <div class="container">
        <h3 class="text-center">Daftar Jabatan</h3>
        <hr class="mb-5">
        <a href="{{ route('tambahJabatan') }}"><button class="btn btn-transparent border-primary text-primary py-2 px-3">Tambah</button></a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Jabatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($positions as $position)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $position->position }}</td>
                        <td>
                            <a href="{{ route('editJabatan', $position->id) }}"><i class="bi bi-pencil-square"></i></a>
                            <a href="{{ route('hapusJabatan', $position->id) }}"><i class="bi bi-x-square-fill"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
