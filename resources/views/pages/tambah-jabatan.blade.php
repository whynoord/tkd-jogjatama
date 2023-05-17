@extends('layouts.website')

@section('title')
    Tambah Jabatan
@endsection
    
@section('content')
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
      @endif

<div class="container py-5">
    <h2 class="mb-3 text-center">Tambah Jabatan</h2>
    <form method="post" action="{{ route('simpanJabatan') }}" class="col pt-5">
      @csrf
      
        <div class="mb-3">
          <label for="position" class="form-label">Nama Jabatan</label>
          <input type="text" class="form-control" name="position">
        </div>
        <button type="submit" class="btn btn-transparent border-primary text-primary py-2 px-3">Submit</button>
      </form>
</div>
@endsection