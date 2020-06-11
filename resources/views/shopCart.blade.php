@extends('layouts.app')

@section('content')

    @if(Session::has('cart'))
        <div class="row row-cols-1 row-cols-md-3">
            <div class="col mb-4">
            <div class="card h-100">

                @foreach($movies as $movie)
                <div class="card-body">
                    <h3 class="label label-success">Title: {{ $movie['item']['title'] }}</h5>
                    <p class="label label-success">Copies: {{ $movie['qty'] }}</p>
                    <p class="label label-success">Price: {{ $movie['price'] }}$</p>
                </div>
                @endforeach
            </div>
            </div>
        </div>
        <strong>Total price: {{ $totalPrice }}</strong>
    @else
        <div class="card-text">
            <h3>No items in cart!</h3>
        </div>

@endsection
