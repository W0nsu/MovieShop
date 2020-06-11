@extends('layouts.app')

@section('content')

<div class="row row-cols-1 row-cols-md-3">
    @foreach ($movies as $movie)
    <div class="col mb-4">
      <div class="card h-100">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h3 class="card-title">{{$movie->title}}</h5>
            <p class="card-text">Category: {{$movie->category}}</p>
            <p class="card-text">Year of production: {{$movie->production_year}}</p>
            <p class="card-text">Price: {{$movie->price}}$</p>
            <a href="{{ route('add',['id'=> $movie->id])}}" class="btn btn-success">Add to card</a>
        </div>
      </div>
    </div>
    @endforeach
</div>
@endsection
