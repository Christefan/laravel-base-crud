@extends('layout.app')

@section('main_content')
<div class="container">
    <h1>Lista dei fumetti</h1>
        <ul>
            @foreach ($comics as $comic)
            <li class="">
            <div class="card" style="width: 18rem;">
            <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">
                <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h1 class="card-text">{{ $comic->title }}</h1>
                </div>
            </a>
            </div>
            </li>          
            @endforeach
            
        </ul>
</div>        
@endsection