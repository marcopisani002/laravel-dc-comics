@extends('layouts.public')

@section('jumbo')
  {{-- contenuto jumbo --}}
   @include("partials.header") 
@endsection


@section('content')
  <h1>Pagina Prodotti</h1>
  <p></p>
  <div class="card"></div>
@endsection


@section('banner')
  {{-- contenuto banner --}}
  @include("partials.commercial-section") 
@endsection
