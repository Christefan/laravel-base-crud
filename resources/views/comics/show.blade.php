@extends('layout.app')

@section('main_content')
    <div class="container">
        <h1>{{ $comic->title }} <span>Prezzo: {{ $comic->price }}</span></h1>
        <img src="{{ $comic->thumb }}" alt="">
        <p>Descrizione: {{ $comic->description }}</p>
        <p>Data: {{ $comic->sale_date }}</p>
        <p>{{ $comic->type }}</p>
        <div>
            <a class="btn btn-primary" href="{{ route('comics.edit', ['comic' => $comic->id]) }}">Modifica</a>

            <form action="{{ route('comics.destroy', [ 'comic' => $comic->id ]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Cancella</button>
            </form>
        </div>
    </div>
@endsection
