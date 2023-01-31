@extends('layouts.app')

@section('content')
  <h1>Modifica fumetto: {{ $comic->name }}</h1>

  <form action="{{ route('comics.update', $comic->id) }}" method="POST">
    @csrf
    @method('put')

    <div class="mb-3">
      <label class="form-label">Titolo</label>
      <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
      @error('name')
      <div class="invalid-feedback">
        {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3">
      <label class="form-label">Descrizione</label>
      <textarea class="form-control form-control @error('description') is-invalid @enderror" name="description" id="exampleFormControlTextarea1" rows="3">{{old('description')}}</textarea>
        @error('description')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    <div class="mb-3">
      <label class="form-label">Prezzo</label>
      <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" value="{{old('price')}}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        @error('price')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    <div class="mb-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox"
                name="available" id="flexCheckDefault"
                {{ $comic->available ? 'checked' : '' }}>
        <label class="form-check-label" for="flexCheckDefault">
          Disponibile
        </label>
      </div>
    </div>
    <div class=" gap-3 d-flex">
        <button class="btn btn-primary" type="submit">Carica fumetto</button>
        <a href="{{ route('comics.index') }}" class="btn btn-danger">Annulla</a>
    </div>
   
  </form>
@endsection