@extends('layouts.website')

@section('title')
    Tambah Pegawai
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
    <h2 class="mb-3">Tambah Pegawai</h2>
    <form method="post" action="{{ route('simpanPegawai') }}" class="col-lg-8 pt-5">
      @csrf
      
        <div class="mb-3">
          <label for="name" class="form-label">Nama</label>
          <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
          <label for="position_id" class="form-label">Jabatan</label>
          <select class="form-select" name="position_id">
            @foreach ($positions as $position)
              <option value="{{ $position->id }}">{{ $position->position }}</option>    
            @endforeach
          </select>
        </div>
        <div class="mb-3">
          <label for="contract_id" class="form-label">Kontrak</label>
          <select class="form-select" name="contract_id">
            @foreach ($contracts as $contract)
              <option value="{{ $contract->id }}">{{ $contract->contract }}</option>    
            @endforeach
          </select>
        </div>
        <button type="submit" class="btn btn-transparent border-primary text-primary py-2 px-3">Submit</button>
      </form>
</div>
@endsection