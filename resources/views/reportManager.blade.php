@extends('layouts.front')

@section('title', 'Reports')

@section('content')
<body style="background-image: url('images/road.jpg'); background-repeat: no-repeat;  background-size: 100% 100%">

<div class="row">
    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <th>Location</th>
            <th>Date</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        @foreach ($reports as $repo)
        <tr>
            <td>{{$repo->title}}</td>
            <td>{{$repo->location}}</td>
            <td>{{$repo->date_time}}</td>
            <td>{{$repo->status}}</td>
            <td>
                <a href="#" class="btn btn-success">Address</a>
                <a href="#" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
    {{-- {!! $portofolios->links() !!} --}}
</div>

</body>


@endsection