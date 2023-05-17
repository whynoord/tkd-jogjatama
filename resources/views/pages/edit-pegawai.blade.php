@extends('layouts.website')

@section('title')
    Edit Pegawai
@endsection
    
@section('content')
    {{-- @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
      @endif --}}

<div class="container py-5">
    <h2 class="mb-3">Edit Pegawai</h2>
    <form method="post" action="{{ route('updatePegawai', $employee->id) }}" class="col-lg-8 pt-5">
      @csrf
      
        <div class="mb-3">
          <label for="name" class="form-label">Nama</label>
          <input type="text" class="form-control" name="name" value="{{ old('name', $employee->name) }}">
        </div>
        <div class="mb-3">
          <label for="position_id" class="form-label">Jabatan</label>
          <select class="form-select" name="position_id">
            @foreach ($positions as $position)
              @if (old('position_id', $employee->position_id) == $position->id)
                <option value="{{ $position->id }}" selected>{{ $position->position }}</option>  
              @else
                <option value="{{ $position->id }}">{{ $position->position }}</option>
              @endif    
            @endforeach
          </select>
        </div>
        <div class="mb-3">
          <label for="contract_id" class="form-label">Lama kontrak</label>
          <select class="form-select" name="contract_id">
            @foreach ($contracts as $contract)
              @if (old('contract_id', $employee->contract_id) == $contract->id)
                <option value="{{ $contract->id }}" selected>{{ $contract->contract }}</option>  
              @else
                <option value="{{ $contract->id }}">{{ $contract->contract }}</option>
              @endif    
            @endforeach
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection