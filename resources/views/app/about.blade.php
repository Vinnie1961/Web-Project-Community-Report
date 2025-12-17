@extends('layouts.front')
@section('title', 'About us')

@section('content')
<div class="container px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8">
            <img src="{{ asset('images/Ena.png')}}" alt="Ena" width="400" height="400" class="img-fluid-rounded">
        </div>

        <div> 
            <h1 class="display-5 fw-bold">ENA</h1>
            <p class="lead"> 
                Such is the macinations of Joel G.
            </p>
            <p class="lead"> 
                (also images or layout may be inaccurate due to different resolutions to the actual example)
            </p>
            <p> 
                NOTE: -lg -md -sm are conditions for each of the classes. if screen is big = -lg, if medium= mg, if small(mobile usually)= sm
            </p>
            <p> 
                also : px-5 = - 5 pixels(?) on the x axis
            </p>
        </div>
    </div>
</div>

<div class="container px-5 py-5"> 
    <h2 class="pb-2 border-bottom text-center">Wanna know more?</h2>

    <div class="row"> 
        <div class="col-lg-4 col-md-4 col-sm-12">
            <img src="{{ asset('images/Koish.jpeg')}}" alt="Koish" class="card-img-top">
            <div class="card-body text-center"> 
                <h2 class="card-title"> Koishi Komeji </h2>
                <p class="card-text"> This is meant to be a team member list, but i gotta improvise lol</p>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12">
            <img src="{{ asset('images/Koish.jpeg')}}" alt="Koish" class="card-img-top">
            <div class="card-body text-center"> 
                <h2 class="card-title"> Koishi Komeji </h2>
                <p class="card-text"> This is meant to be a team member list, but i gotta improvise lol</p>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12">
            <img src="{{ asset('images/Koish.jpeg')}}" alt="Koish" class="card-img-top">
            <div class="card-body text-center"> 
                <h2 class="card-title"> Koishi Komeji </h2>
                <p class="card-text"> This is meant to be a team member list, but i gotta improvise lol</p>
            </div>
        </div>

    </div>

</div>


@endsection