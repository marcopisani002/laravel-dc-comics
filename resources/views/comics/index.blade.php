@extends('layouts.app')

@section('content')
  <h1 class="d-flex justify-content-between">
    Lista prodotti

    <a href="{{ route('comics.create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i>
        Aggiungi
    </a>
  </h1>

  <table class="table table-striped">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Descrizione</th>
        <th>Prezzo</th>
        <th>Disponibile</th>
        <th></th>
      </tr>
    </thead>

    <tbody>
      @foreach ($comics as $comic)
        <tr>
         
          <td>{{ $comic['title'] }}</td>
         
          <td>{{ Str::limit($comic->genere) }}</td>
          <td>€ {{ $comic->prezzo }}</td>
          <td>{{ $comic->disponibile === 1 ? 'Si' : ' No' }}</td>
         
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
