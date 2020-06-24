@extends('layouts.app')

@section('title')
    Edit movie
@endsection

@section('content')

<div class="d-flex justify-content-center" style="margin-top: 7%;">

<div class="row">
  <!-- display editing movie with filled inputs !-->
  <div class="col-md-15">
    <h1 style="font-size:17px; color: white;">You can edit a movie here. Please fill all of below fields.</h1>
    <br>
    <form method="post" action = "/edit/<?php echo $movies[0]->id; ?>">
    {{csrf_field()}}
      <div class="form-group">
        <input type="text" name="path" class="form-control" value = '<?php echo$movies[0]->path; ?>'/>
      </div>

      <div class="form-group">
        <input type="text" name="title" class="form-control" value = '<?php echo$movies[0]->title; ?>' />
      </div>
      
      <div class="form-group">
        <input type="text" name="category" class="form-control" value = '<?php echo$movies[0]->category; ?>' />
      </div>

      <div class="form-group">
        <input type="text" name="production_year" class="form-control" value = '<?php echo$movies[0]->production_year; ?>' />
      </div>
      
      <div class="form-group">
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" ><?php echo$movies[0]->description; ?></textarea>
      </div>

      <div class="form-group">
          <input type="text" name="price" class="form-control" value = '<?php echo$movies[0]->price; ?>' />
      </div>

        <!-- Submit edit movie !-->
      <div class="form-group d-flex justify-content-center">
        <input type = 'submit' class="btn btn-warning" value="Edit"/>
      </div>

    </form>
  </div>
</div>
</div>
@endsection