@extends('layouts.app')

@section('content')
<h1 class="text-center mb-5">{{ $comic->name }}</h1>
<div class="d-flex justify-content-center">
    
  <div class="card text-center" style="width: 18rem;">
    <div class="card-body">
    <h5 class="card-title">Titolo fumetto: {{$comic->name}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">Disponibilità: {{$comic->available}}</h6>
    <p class="card-text">Descrizione fumetto: {{$comic->description}}</p>
      <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-primary">
        Modifica
      </a>
      <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="delete-form d-inline-block">
        @csrf()
        @method('delete')

        <button class="btn btn-danger">
          X
        </button>
      </form>
    </div>
</div>
</div>
<div class="d-flex justify-content-center">
    <a href="{{ route('comics.index')}}" class="btn btn-primary mt-5">Torna indietro</a>
</div>
@endsection