@extends('welcome')
@section('contain')


@if(session()->has('success'))
<p class="alert alert-success">
{{session()->get('success')}}
</p>
@endif
<form action="{{route('store.car')}}" method="POST">
    @csrf
  <div class="form-group">
    <label for="exampleInput car name">Car</label>
    <input type="text" name="car_name" class="form-control" id="Input car name" aria-describedby="car name" placeholder="Enter car name">
 </div>

 <div class="form-group">
    <label for="exampleInput brand name">Brand name</label>
    <input type="text" name="brand_name" class="form-control" id="Input brand name" placeholder="brand name">
  </div>

  <div class="form-group">
    <label for="exampleInput model name">Model name</label>
    <input type="text" name="model_name" class="form-control" id="exampleInput model name" placeholder="model name">
  </div>

  <div class="form-group">
    <label for="exampleInput model name">rent</label>
    <input type="text" name="rent" class="form-control" id="exampleInput model name" placeholder="model name">
  </div>

  <button type="submit" class="btn btn-primary m-1">Submit</button>
</form>

@endsection
