@extends('layouts.app')

@section('content')

<div class="row row-cols-1 row-cols-md-3 ml-0 mr-0">
    @foreach ($movies as $movie)
    <div class="col mb-4 container">
      <div class="card h-100 pl-3 pt-3 row-cols-2" style="background-image: url('{{URL::asset('photos/')}}/{{$movie->path}}')">
        {{-- <img src="{{URL::asset('photos/')}}/{{$movie->path}}" class="card-img-top" alt="..." class="img-thumbnail col-sm center" style="width: 200px; height:300px;"> --}}
        <div class="card-body col-sm w-75">
            <h3 class="card-title">{{$movie->title}}</h5>
            <p class="card-text">Category: {{$movie->category}}</p>
            <p class="card-text">Year of production: {{$movie->production_year}}</p>
            <p class="card-text">Price: {{$movie->price}}$</p>
            <a href="#" class="btn btn-success">Add to card</a>
        </div>
      </div>
    </div>
    @endforeach
</div>
@endsection
