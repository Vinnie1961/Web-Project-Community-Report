@extends('layouts.front')
@section('title', 'Welcome')

@section('content')
<!-- <h1> Welcome to Our website</h1> -->
<body style="background-image: url('images/city.jpg'); background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%">
<div class="p-5 mb-4 rounded-3 text-center" style="background-color: rgb(129, 129, 129); opacity: 0.9">
  <div class ="container-fluid">
      <h1 class ="display-5 fw-bold"> Community, Report! </h1>
      <p class="lead col-lg-8 mx-auto"> 
        This is a website to report enviromental waste and damage to public facilities within Jakarta. These will help bring attention to keeping this city clean and sustainable for everyone!
      </p> 
      {{-- <p>
        <a href="#" class="btn btn-primary"> Primary Button </a>
        <a href="#" class="btn btn-secondary"> Secondary Button </a>
      </p> --}}
  </div>
</div>

<div class="container py-5" style="background-color: rgb(114, 174, 114); border: 5px solid rgb(0, 81, 31) ">
  <div class="row">
    <div class="col text-center">
      <h2> Our goals: </h2>
      {{-- <p>(The neat dividing line is from 'hr' )</p> --}}
      <hr>
    </div>
  </div>

  
  <div class="row">

    <div class="col-md-4">
      <h2>Support Sustainability</h2>
      <p>Increased awareness to our waste will help us to decrease it over the long term! Making our cities more sustainable and pollutant-free</p>
    </div>
    <div class="col-md-4">
      <h2>Increase Quality of Life</h2>
      <p>Making sure the availability of public facilities and the general sanitation of the city are kept high, helping the lives of those who need them just that bit more</p>
    </div>
    <div class="col-md-4">
      <h2>Enforce our Rights</h2>
      <p>Everyone deserves a clean, properly maintained city to live in. And we're here to help ensure it stays that way.</p>
    </div>

  </div>


  {{-- <div class="row">

    <div class="col-md-4">
      <h2>Row 1.1</h2>
      <p>Each "entry" in a row will place to the right, while new rows go below</p>
    </div>

  </div> --}}

</div>

</body>

  

{{-- <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div> --}}


@endsection