@extends('layouts.app')

@section('title')
    Shopping Cart
@endsection


@section('content')
@if(Session::has('cart'))
<div class="container">
    <div class="card shopping-cart">
             <div class="card-header bg-dark text-light">
                 <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                 Shipping cart
                 <a href="{{ url('/') }}" class="btn btn-outline-info btn-sm pull-right">Continue shopping</a>
                 <div class="clearfix"></div>
             </div>
             <div class="card-body">
                @foreach($movies as $movie)
                     <!-- PRODUCT -->
                     <div class="row">
                         
                         <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                             <h4 class="product-name"><strong>{{ $movie['item']['title'] }}</strong></h4>
                             
                         </div>
                         <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                             <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                                 <h6><strong>{{ $movie['price'] }} <span class="text-muted">$</span></strong></h6>
                             </div>
                             <div class="col-4 col-sm-4 col-md-4">
                                 <div class="quantity">
                                     x{{ $movie['qty']}}
                                 </div>
                             </div>
                             <div class="col-2 col-sm-2 col-md-2 text-right">
                                 <button type="button" class="btn btn-outline-danger btn-xs">
                                     <i class="fa fa-trash" aria-hidden="true"></i>
                                 </button>
                             </div>
                         </div>
                     </div>
                     <hr>
                     <!-- END PRODUCT -->
                    @endforeach
                 <div class="pull-right">
                     
                 </div>
             </div>
             <div class="card-footer">
                 <div class="coupon col-md-5 col-sm-5 no-padding-left pull-left">
                     <div class="row">
                         <div class="col-6">
                             <input type="text" class="form-control" placeholder="cupone code">
                         </div>
                         <div class="col-6">
                             <input type="submit" class="btn btn-default" value="Use cupone">
                         </div>
                     </div>
                 </div>
                 <div class="pull-right" style="margin: 10px">
                     <a href="" class="btn btn-success pull-right">Checkout</a>
                     <div class="pull-right" style="margin: 5px">
                         Total price: <b>{{ $totalPrice }}</b>
                     </div>
                 </div>
             </div>
         </div>
 </div>
@else
<div class="container">
    <div class="card shopping-cart">
             <div class="card-header bg-dark text-light">
                 <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                 Shipping cart
                 <a href="{{ url('/') }}" class="btn btn-outline-info btn-sm pull-right">Continue shopping</a>
                 <div class="clearfix"></div>
             </div>
             <div class="card-body">
                     No items in cart!
             </div>
    </div>
</div>

@endif
@endsection


