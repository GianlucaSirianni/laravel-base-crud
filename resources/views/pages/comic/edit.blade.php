@extends('layouts.app')

@section('title-page')
La miglior Pasta - Edit
@endsection

@section('main-content')

<h1 class="text-center">Form per la Create</h1>

<form method="POST" action="{{route('comics.update', $comic->id)}}">

    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Titolo</label>
        <input name="title" type="text" class="form-control" id="title" value="{{$comic->title}}">
    </div>

    <div class="mb-3">
        <label class="form-label">Descrizione</label>
        <textarea name="description" class="form-control" id="">{{$comic->description}}</textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Immagine</label>
        <input name="thumb" value="{{$comic->thumb}}" type="text" class="form-control" id="title">
    </div>

    <div class="mb-3">
        <label class="form-label">Prezzo</label>
        <input name="price" value="{{$comic->price}}" type="number" class="form-control" id="title">
    </div>

    <div class="mb-3">
        <label class="form-label">Serie</label>
        <input name="series" value="{{$comic->series}}" type="text" class="form-control" id="title">
    </div>

    <div class="mb-3">
        <label class="form-label">Data Di Uscita</label>
        <input name="sale_date" value="{{$comic->sale_date}}" type="text" class="form-control" id="title">
    </div>

    <div class="mb-3">
        <label class="form-label">Tipo</label>
        <input name="type" value="{{$comic->type}}" type="text" class="form-control" id="title">
    </div>

    <button type="submit" class="btn btn-primary">Crea record</button>
</form>
@endsection
