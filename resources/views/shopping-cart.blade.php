@extends('layouts.app')

@section('title')
    Shopping Cart
@endsection

@section('content')
@if(Session::has('cart'))
<div class="row">
    <div class="col-sn-6 col-md-6 col-md-offset-3 col-sm-offset-3">
        <ul class="list-group">
            @foreach($movies as $movie)
            <li class="list-group-item">
                <span class="badge">{{ $movie['qty'] }}</span>
                <strong> {{ $movie['item']['title'] }} </strong>
                <span class="label labe-success">{{ $movie['price'] }}</span>
                <div class="btn-group">
                    <button class="btn btn-primary btn-xs dropdown-toogle" data-toggle="dropdown">
                        Action <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Reduce by 1
                            </a>
                        <li><a href="#">Reduce by 2
                        </a>
                        </li>
                    </ul>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-sn-6 col-md-6 col-md-offset-3 col-sm-offset-3">
       <strong>Total: {{ $totalPrice }}</strong>
    </div>
</div>
<div class="row">
    <div class="col-sn-6 col-md-6 col-md-offset-3 col-sm-offset-3">
       <button type="button" class="btn btn-success">Checkout</button>
    </div>
</div>
@else
<div class="row">
<div class="col-sn-6 col-md-6 col-md-offset-3 col-sm-offset-3">
  <h2>No items in Cart</h2>
</div>
</div>
@endif
@endsection
