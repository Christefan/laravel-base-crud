@extends('layout.app')

@section('main_content')
<div class="container">
    <h1>Inserisci un nuovo fumetto</h1>
    <form action="{{ route('comics.store') }}" method="post" class="row g-3">
    @csrf

    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="mb-3">
        <label for="thumb" class="form-label">Link Immagine</label>
        <input type="text" class="form-control" id="thumb" name="thumb">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="text" class="form-control" id="price" name="price">
    </div>
    <div class="mb-3">
        <label for="series" class="form-label">Serie</label>
        <input type="text" class="form-control" id="series" name="series">
    </div>
    <div class="mb-3">
        <label for="sale_date" class="form-label">Data</label>
        <input type="text" class="form-control" id="sale_date" name="sale_date">
    </div>
    <div class="mb-3">
        <label for="type" class="form-label">Tipologia</label>
        <input type="text" class="form-control" id="type" name="type">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea type="text" class="form-control" id="description" name="description"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Aggiungi</button>
    </form>
</div>
@endsection