@extends('welcome')

@section('content')
    <h1>{{ $comic->title }} (#{{ $comic->id }})</h1>

    <ul>
        <li><strong>Prezzo:</strong> {{ $comic->prezzo }}</li>
        <li><strong>Disponibile:</strong> {{ $comic->disponibile === 1 ? 'Si' : 'No' }}</li>
        <li><strong>Data creazione:</strong> {{ $comic->created_at }}</li>
        <li><strong>Data ultima modifica:</strong> {{ $comic->updated_at }}</li>
    </ul>
@endsection
