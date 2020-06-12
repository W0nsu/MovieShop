@extends('layouts.app')

@section('title')
    Shopping Cart
@endsection


@section('content')
<div class="d-flex justify-content-center">
    <p class="font-weight-light">Shopping Cart</p>
@if(Session::has('cart'))
<div class="container">
	<div class="row">
		<div class="col-xs-8">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title">
						<div class="row">
							<div class="col-xs-6">
								<h5><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</h5>
							</div>
							<div class="col-xs-6">
								<a class="btn btn-primary btn-sm btn-block" href="{{ url('/') }}">
									<span class="glyphicon glyphicon-share-alt">Continue shopping</span> 
                                </a>
							</div>
						</div>
					</div>
				</div>
                    @foreach($movies as $movie)
					<hr>
					<div class="row">
						<div class="col-xs-4">
							<h4 class="product-name"><strong>{{ $movie['item']['title'] }}</strong></h4><h4><small>Product description</small></h4>
						</div>
						<div class="col-xs-6">
							<div class="col-xs-6 text-right">
								<h6><strong>{{ $movie['price'] }} <span class="text-muted">$</span></strong></h6>
							</div>
							<div class="col-xs-4">
								<h6><strong>{{ $movie['qty'] }}x</strong></h6> 
							</div>
							<div class="col-xs-2">
								<button type="button" class="btn btn-link btn-xs">
									<span class="glyphicon glyphicon-trash"> </span>
								</button>
							</div>
						</div>
                    </div>
                    @endforeach
					<hr>
					<div class="row">
						
					</div>
				</div>
				<div class="panel-footer">
					<div class="row text-center">
						<div class="col-xs-9">
							<h4 class="text-right">Total <strong>{{ $totalPrice }}</strong></h4>
						</div>
						<div class="col-xs-3">
							<button type="button" class="btn btn-success btn-block">
								Checkout
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@else
<div class="row">
<div class="col-sn-6 col-md-6 col-md-offset-3 col-sm-offset-3">
  <h2>No items in Cart</h2>
</div>
</div>
</div>
@endif
@endsection