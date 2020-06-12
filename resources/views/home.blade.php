@extends('layouts.app')

@section('content')
<div class="row row-cols-1 row-cols-md-3 ml-0 mr-0">
    @foreach ($movies as $movie)
    <div class="col mb-4 container">
      <div class="card h-100 pl-3 pt-3 row-cols-2">
        <img src="{{URL::asset('photos/')}}/{{$movie->path}}" class="card-img-top" alt="..." class="img-thumbnail col-sm center" style="width: 200px; height:300px;">
        <div class="card-body col-sm w-75">
            <h3 class="card-title">{{$movie->title}}</h5>
            <p class="card-text">Category: {{$movie->category}}</p>
            <p class="card-text">Year of production: {{$movie->production_year}}</p>
            <p class="card-text">Price: {{$movie->price}}$</p>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#movieID{{$movie->id}}">
              Description
            </button>
            <!-- Modal -->
            <div class="modal fade" id="movieID{{$movie->id}}" tabindex="-1" role="dialog" aria-labelledby="movieID{{$movie->id}}Title" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="movieID{{$movie->id}}Title">{{$movie->title}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    {{$movie->description}}
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
            <a href="{{ route('add',['id'=> $movie->id])}}" class="btn btn-success">Add to card</a>
        </div>
      </div>
    </div>
    @endforeach
</div>
@endsection