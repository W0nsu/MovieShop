@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($movies as $movie)
    <div class="container">
        <div>Tytuł: {{$movie->title}}</div>
        <div>Kategoria: {{$movie->category}}</div>
        <div>Rok produkcji: {{$movie->production_year}}</div>
        <div>Cena: {{$movie->price}}</div>
    </div>
    @endforeach
</div>
@endsection
