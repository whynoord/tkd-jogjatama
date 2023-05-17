@extends('layouts.website')

@section('title')
    Edit Kontrak
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
    <h2 class="mb-3">Edit Kontrak</h2>
    <form method="post" action="{{ route('updateKontrak', $contract->id) }}" class="col-lg-8 pt-5">
      @csrf
      
        <div class="mb-3">
          <label for="contract" class="form-label">Lama kontrak</label>
          <input type="text" class="form-control" name="contract" value="{{ $contract->contract }}">
        </div>
        <button type="submit" class="btn btn-transparent border-primary text-primary py-2 px-3">Submit</button>
      </form>
</div>
@endsection