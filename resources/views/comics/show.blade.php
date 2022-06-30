@extends('layout.app')

@section('main_content')
    <div class="container">
        <h1>{{ $comic->title }} <span>Prezzo: {{ $comic->price }}</span></h1>
        <img src="{{ $comic->thumb }}" alt="">
        <p>Descrizione: {{ $comic->description }}</p>
        <p>Data: {{ $comic->sale_date }}</p>
        <p>{{ $comic->type }}</p>
    </div>
@endsection
