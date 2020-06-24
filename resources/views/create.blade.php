@extends('layouts.app')

@section('title')
    Add new movie
@endsection

@section('content')

<div class="d-flex justify-content-center" style="margin-top: 7%;">

<div class="row">
  <!--display form with inputs for new movie !-->
 <div class="col-md-15">
  <h1 style="font-size:17px; color: white;">You can add a new movie here. Please fill all of below fields.</h1>
  <br>
  <form method="post" action="/create">
    {{csrf_field()}}
    <div class="form-group">
      <input type="text" name="path" class="form-control" placeholder="Enter path to the image.." />
    </div>

    <div class="form-group">
      <input type="text" name="title" class="form-control" placeholder="Enter title.." />
    </div>
    
    <div class="form-group">
      <input type="text" name="category" class="form-control" placeholder="Enter category.." />
    </div>

    <div class="form-group">
      <input type="text" name="production_year" class="form-control" placeholder="Enter year of production.." />
    </div>

    <div class="form-group">
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" placeholder="Enter description.."></textarea>
    </div>

    <div class="form-group">
      <input type="text" name="price" class="form-control" placeholder="Enter price.." />
    </div>
    <!-- Add new movie button !-->
    <div class="form-group d-flex justify-content-center">
      <button type="text" class="btn btn-primary">Add</button>
    </div>
  </form>
 </div>
</div>
</div>
@endsection