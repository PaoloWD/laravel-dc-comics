@extends('layouts.app')
@section('content')
<form action="{{ route('comics.store') }}" method="POST">
    @csrf
    <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">Title</span>
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        @error('name')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
        <textarea class="form-control form-control @error('description') is-invalid @enderror" name="description" id="exampleFormControlTextarea1" rows="3">{{old('description')}}</textarea>
        @error('description')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">Price</span>
        <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" value="{{old('price')}}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        @error('price')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="form-check form-switch">
        <input name="available" class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
        <label class="form-check-label" for="flexSwitchCheckDefault">Available</label>
      </div>
    <div class="d-flex">
        <button class="btn btn-primary">Aggiungi fumetto</button>
        <a href="{{ route('comics.index') }}" class="btn btn-danger">Annulla</a>
    </div>
      
</form>
@endsection