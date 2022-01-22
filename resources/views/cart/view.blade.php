@extends('welcome')
@section('contain')
    <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse">
            <tr>
                <th>Service Name</th>
                <th>Service Cost</th>
                <th>Status</th>
                <th>Arrival Time</th>
                @if (Auth::user()->role!='user')
                <th>Actions</th>
                @endif

            </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td scope="row">{{ $item->service->name }}</td>
                    <td>{{ $item->service->price }}</td>
                    <td>{{ $item->status }}</td>
                    <td>{{ $item->time }}</td>
                    @if (Auth::user()->role!='user')
                    <td>
                        <button type="button" class="btn btn-outline-primary">Take The Request</button>
                    </td>
                    @endif
                </tr>
                @endforeach
            </tbody>
    </table>
@endsection
