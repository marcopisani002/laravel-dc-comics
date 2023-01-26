@extends('welcome')

@section('content')
    <h1 class="d-flex justify-content-between mt-5  mb-5">
        Lista prodotti

        <a href="{{ route('comics.create') }}" class="btn btn-success">

            Aggiungi
        </a>
    </h1>

    <table class="table table-striped mb-5">
        <thead>
            <tr>
                <th class="text-center">NOME</th>
                <th class="text-center">GENERE</th>
                <th class="text-center">PREZZO</th>
                <th class="text-center">ANNO DI USCITA</th>
                <th class="text-center">DISPONIBILE</th>
                <th class="text-center"></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($comics as $comic)
                <tr>

                    <td class="text-center">{{ $comic['title'] }}</td>

                    <td class="text-center">{{ Str::limit($comic->genere) }}</td>
                    <td class="text-center"> {{ $comic->genere }}</td>
                    <td class="text-center">€ {{ $comic->prezzo }}</td>
                    <td class="text-center">{{ $comic->disponibile === 1 ? 'Si' : ' No' }}</td>
                    <td>
                        <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-link">
                            DETTAGLI </i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
