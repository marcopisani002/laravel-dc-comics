@extends('welcome')

@section('content')
    <section class="d-flex justify-content-center bg-success mt-5 mb-5">
        <div class="card mt-5 mb-5 border-0 opacity-2 " style="width: 18rem;">
            <div class="card-body bg-primary text-white text-center">
                <h1 class=" mb-3">{{ $comic->title }} </h1>
                <h6 class="card-subtitle mb-2 ">(#{{ $comic->id }})</h6>
                <p class="card-text"><strong>Disponibile:</strong><br> {{ $comic->disponibile === 1 ? 'Si' : 'No' }}</p>
                <p href="#" class="card-link"><strong>Data creazione:</strong> <br>{{ $comic->created_at }}</p>
                <p href="#" clpss="card-link"><strong>Data ultima modifica:</strong><br> {{ $comic->updated_at }}</a>
            </div>
        </div>
    </section>
@endsection
