@extends('welcome')
@section('contain')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-3">Service List</h1>

        <p class="lead">
            <a class="btn btn-primary btn-lg" href="{{ route('car.service.create') }}" role="button">Generate Service</a>
        </p>
    </div>
</div>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Time</th>
                <th>Price</th>
                <th> Action </th>
            </tr>
        </thead>
        <tbody>

            @foreach ($ser as $item)
            <tr>
                <td scope="row">{{ $item->name }}</td>
                <td>{{ $item->time }}</td>
                <td>{{ $item->price }}</td>
                <td><a href="{{ route('car.service.approve',$item->id) }}">Approve</a></td>
                <td><a href="{{ route('car.service.delete',$item->id) }}">Delete</a></td>
            </tr>
            @endforeach

        </tbody>
    </table>
@endsection
