@extends('welcome')

@section('content')
    <h1 class="mt-5 text-center mb-5">Aggiungi Prodotto</h1>

    <form action="{{ route('comics.store') }}" method="POST">
    @csrf

    <div class="mb-3">
      <label class="form-label">Nome</label>
      <input type="text" class="form-control" name="name">
    </div>
    <div class="mb-3">
      <label class="form-label">Genere</label>
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

    <button class="btn btn-primary" type="submit">aggiungi prodotto</button>
  </form>


    {{-- <form class="row g-3" action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="col-md-4">
            <label class="form-label">name</label>
            <input type="text"
                class="form-control @error('name') is-invalid @elseif(old('name')) is-valid @enderror"
                name="name" value="{{ $errors->has('name') ? '' : old('name') }}">

        </div>
        <div class="col-md-4">
            <label for="validationServer02" class="form-label">description</label>
            <input type="text" class="form-control is-valid" id="validationServer02" value="Otto" required
                name="description">

        </div>
        <div class="col-md-4">
            <label class="form-label">anno_uscita</label>
            <input type="text" class="form-control is-valid" id="validationServer03" value="Mark" required
                name="anno_uscita">

        </div>

        <div class="col-md-4">
            <label for="validationServer03" class="form-label">price</label>
            <input type="number" class="form-control is-invalid" id="validationServer03"
                aria-describedby="validationServer03Feedback" name="price" required>
            <div id="validationServer03Feedback" class="invalid-feedback">
                Please provide a valid city.
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationServer03" class="form-label">available</label>
            <input type="text" class="form-control is-invalid" id="validationServer03"
                aria-describedby="validationServer03Feedback" name="available" required>
            <div id="validationServer03Feedback" class="invalid-feedback">
                Please provide a valid city.
            </div>
        </div>
        <button class="btn btn-primary" type="submit">aggiungi prodotto</button>
    </form> --}}
@endsection
