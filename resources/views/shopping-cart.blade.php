@extends('layouts.app')

@section('title')
    Shopping Cart
@endsection


@section('content')
@if(Session::has('cart'))
<div class="container">
    <div class="card shopping-cart">
            <!-- Header of shipping cart-->
             <div class="card-header bg-dark text-light">
                 <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                 Shipping cart
                 <a href="{{ url('/') }}" class="btn btn-outline-info btn-sm pull-right">Continue shopping</a>
                 <div class="clearfix"></div>
             </div>
             <!-- end of header -->

             <!-- PRODUCT -->
             <div class="card-body">
                @foreach($movies as $movie)
                     <div class="row">
                         <div class="col-12 col-sm-12 col-md-2 text-center">
                                 <img class="img-responsive" src="{{URL::asset('photos/')}}/{{$movie['item']['path']}}" alt="preview" width="120" height="80">
                         </div>
                         <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                             <h4 class="product-name"><strong>{{ $movie['item']['title'] }}</strong></h4>                         
                         </div>
                         <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                             <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                                 <h6><strong>{{ $movie['price'] }} <span class="text">$</span></strong></h6>
                             </div>
                             <div class="col-4 col-sm-4 col-md-4">
                                 <div class="quantity">
                                     x{{ $movie['qty']}}
                                 </div>
                             </div>
                             <div class="col-2 col-sm-2 col-md-2 text-right">
                                <a href="{{ route('substract',['id'=> $movie['item']['id']])}}">
                                    <button type="button" class="btn btn-outline-danger btn-xs">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                </a>
                             </div>
                         </div>
                     </div>
                     <hr>
                    @endforeach 
             </div>
             <!-- END PRODUCT -->

             <!-- Footer of shipping cart -->
             <div class="card-footer">
                 <div class="coupon col-md-5 col-sm-5 no-padding-left pull-left">
                     
                 </div>
                 <div class="pull-right" style="margin: 10px">
                     <a href="" class="btn btn-success pull-right">Checkout</a>
                     <div class="pull-right" style="margin: 5px">
                         Total price: <b>{{ $totalPrice }}</b>
                     </div>
                 </div>
             </div>
             <!-- End of footer -->
       </div>
 </div>

 <!-- Empty shipping cart -->
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
<!-- End empty shipping cart -->
@endif
@endsection


