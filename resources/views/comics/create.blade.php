@extends('welcome')

@section('content')
  <h1>Nuovo Prodotto</h1>

  <form action="{{ route('comics.store') }}" method="POST">
    @csrf

    <div class="mb-3">
      <label class="form-label">Nome</label>
      <input type="text" class="form-control" name="name">
    </div>
    <div class="mb-3">
      <label class="form-label">Descrizione</label>
      <input type="text" class="form-control" name="description">
    </div>
    <div class="mb-3">
      <label class="form-label">Prezzo</label>
      <input type="text" class="form-control" name="price">
    </div>
    <div class="mb-3">
      <label class="form-label">Disponibile</label>
      <input type="text" class="form-control" name="available">
    </div>

    <button class="btn btn-primary" type="submit">Salva prodotto</button>
  </form>

@endsection
