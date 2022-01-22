@extends('welcome')
@section('contain')
<form action="{{ route('car.store.service') }}" method="POST">
    @csrf
    <legend>Generate New Services</legend>
    <div class="mb-3">
      <label for="text" class="form-label">Name</label>
      <input type="text" name="name" class="form-control" id="exampleInputtext1" aria-describedby="textHelp">
    </div>
    <div class="mb-3">
        <label for="text" class="form-label">Arrival Time</label>
        <input type="text" name="time" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Enter Time in Min">
    </div>
    <div class="mb-3">
        <label for="number" class="form-label">Price</label>
        <input type="number" name="price" class="form-control" id="exampleInputnumber1" aria-describedby="numberHelp">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
