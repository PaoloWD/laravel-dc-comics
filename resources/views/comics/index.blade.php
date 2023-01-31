@extends('layouts.app')
@section('content')
    <a href="{{ route('comics.create') }}" class="btn btn-success mb-5">Aggiungi fumetto</a>
    <div class="row gap-3 justify-content-center">
        @foreach ($comics as $element)
        <div class="card col-4" style="width: 18rem;">
            <div class="card-body">
            <h5 class="card-title">Titolo fumetto: {{$element->name}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Disponibilità: {{$element->available}}</h6>
            <p class="card-text">Descrizione fumetto: {{$element->description}}</p>
            <a href="{{ route('comics.show', $element->id) }}" class="btn btn-primary">
                Dettagli
              </a>
              <a href="{{ route('comics.edit', $element->id) }}" class="btn btn-primary">
                Modifica
              </a>
              <form action="{{ route('comics.destroy', $element->id) }}" method="POST" class="delete-form d-inline-block">
                @csrf()
                @method('delete')
  
                <button class="btn btn-danger">
                  X
                </button>
              </form>
            </div>
        </div>
        @endforeach
    </div>
@endsection