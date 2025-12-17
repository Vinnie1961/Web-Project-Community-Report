@extends('layouts.front')

@section('title', 'Reports')

@section('content')
<body style="background-image: url('images/road.jpg'); background-repeat: no-repeat;  background-size: 100% 100%">

<div class="container px-4 py-5">
    <h1 style="text-decoration-line: underline">Current Reports</h1>
    <div class="row m-4" style="background-color: rgb(114, 174, 114); border: 5px solid rgb(0, 81, 31) ">

        @foreach ($reports as $repo)
            <div class="col-lg-4 col-md-6 m-4"> 
                <div class="card border-4 shadow-sm h-100">
                    {{-- <img src="{{asset($repo->image)}}" alt="" class="card-img-top"> --}}
                    <div class="card-body">
                        <h5 class="card-title">{{$repo->title}}</h5>
                        <p class="card-text" style="font-size: smaller">{{$repo->description}}</p>
                        <p class="card-text">Location: {{$repo->location}}</p>
                        <p class="card-text">Date: {{$repo->date_time}}</p>
                        <p class="card-text">Status: {{$repo->status}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

</body>


@endsection