@extends('components.index-master')

@section('styles')

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" 
        integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" 
        crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" 
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" 
        crossorigin="anonymous" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  {{-- <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
  <link href="{{ asset('css/style1.css') }}" rel="stylesheet">
  
  <script src="https://kit.fontawesome.com/0257f21e7b.js" crossorigin="anonymous"></script>

@endsection


@section('image-banner')

<section class="contact">

  <div class="content text-white">

      <button type="button" class="btn btn-outline-secondary" disabled><h2>CONTACT US</h2></button>
      <hr class="line w-25 mx-auto" style="height:1px; border:none; color:rgb(253, 252, 252); background-color:rgb(240, 233, 233);"/>
      <p>Having queries? Do not worry, just go ahead and contact us.<br>
         We will get in touch asap and try to solve your problem.<br></p>

      <hr class="line w-100 mx-auto" style="height:1px; border:none; color:rgb(253, 252, 252); background-color:rgb(240, 233, 233);"/>

    <div class="container">
      <div class="row">
      
        <div class="extra-div col-lg-4 col-md-4 col-12">
          <div class="box">
            <div class="icon"><i class="fa-2x fas fa-map-marked-alt"></i></div>
                <div class="text">
                  <h4> Address </h4>
                  <p> 123 Main Street, New York, NY 10030 </p>
                </div>
          </div>
        </div>
      
        <div class="extra-div col-lg-4 col-md-4 col-12">
          <div class="box">
            <div class="icon"><i class="fa-2x fas fa-phone-square-alt"></i></div>
                <div class="text">
                  <h4> Phone </h4>
                  <p> +X0 XXX-000-XXX0 </p>
                </div>
         </div>
        </div>
      
        <div class="extra-div col-lg-4 col-md-4 col-12">
          <div class="box">
            <div class="icon"><i class="fa-2x far fa-envelope"></i></div>
                <div class="text">
                  <h4>E-Mail</h4>
                  <p>abc0x0@gmail.com</p>
                </div>
          </div>
        </div>
      
      </div>
     </div>

  </div>

</section>

@endsection

@section('content')

@endsection


