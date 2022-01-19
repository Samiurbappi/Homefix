@extends('welcome')

@section('contain')
<a  class ="btn btn-info m-1" href="{{route('add.car')}}">Add A Car</a> 
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Car Name</th>
      <th scope="col">Brand Name</th>
      <th scope="col">Model Name</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->car}}</td>
      <td>{{$item->brand_name}}</td>
      <td>{{$item->model_name}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection