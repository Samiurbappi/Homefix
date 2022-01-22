@extends('welcome')
@section('contain')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-3">Service List</h1>
        @if (Auth::check())
        @if (Auth::user()->role=='admin'||Auth::user()->role=='sp')
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="{{ route('car.service.create') }}" role="button">Generate Service</a>
        </p>
        @endif
        @endif
    </div>
</div>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>SP Name</th>
                <th>Time</th>
                <th>Price</th>
                @if (auth()->check())
                @if(Auth::user()->role=='admin'||Auth::user()->role=='sp')
                <th> Status </th>
                @endif
                @if(Auth::user()->role=='admin')
                <th> Action </th>
                @endif
                @endif
                <th>Take Serviec</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($ser as $item)
            <tr>
                <td scope="row">{{ $item->name }}</td>
                <td>{{ $item->user->name }}</td>
                <td>{{ $item->time }}</td>
                <td>{{ $item->price }}</td>
                @if(auth()->check())
                @if(Auth::check()||Auth::user()->role=='admin'||Auth::user()->role=='sp')
                <th> {{ $item->status }} </th>
                @endif
                @if(Auth::user()->role == 'admin')
                @if ($item->status == 'Pending')
                <td><a href="{{ route('car.service.approve',$item->id) }}">Approve</a></td>
                <td><a href="{{ route('car.service.delete',$item->id) }}">Delete</a></td>
                @endif
                @endif
                @endif
                <td><a href="{{ route('add.cart',$item->id) }}" class="btn btn-outline-info">Add To Cart</a></td>
            </tr>
            @endforeach

        </tbody>
    </table>
@endsection
