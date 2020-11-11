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
<link href="{{ asset('css/style2.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato|Poppins&display=swap" rel="stylesheet">

<script src="https://kit.fontawesome.com/0257f21e7b.js" crossorigin="anonymous"></script>

@endsection

@section('image-banner')

<section class="header-section">
  <div class="center-div">
    <button type="button" class="btn btn-outline-light" disabled><h1>PRICES</h1></button>
      <hr class="line w-25 mx-auto" style="height:1px; border:none; color:rgb(253, 252, 252); background-color:rgb(240, 233, 233);"/>
      <p>A low price to pay, for such a great service!<br>
         <b>No obligations required</b><br></p>
      </div>
  </div>
</section>

@endsection

@section('content')

  <section class="price-comparison">
  
    <div class="price-column">

      <div class="price-header">
        <div class="price">
          <div class="dollar-sign">$</div>
          250
          <div class="per-month">/student</div>
        </div>
        <div class="plan-name">Basic</div>
      </div>

      <div class="divider"></div>

      <div class="feature">
        <img src="{{ url('assets/check-circle.svg') }}">
        Info & User Management
      </div>
      <div class="feature">
        <img src="{{ url('assets/check-circle.svg') }}">
        Fees
      </div>
      <div class="feature">
        <img src="{{ url('assets/check-circle.svg') }}">
        Tests & Assignments
      </div>
      <div class="feature">
        <img src="{{ url('assets/check-circle.svg') }}">
        SMS & Email
      </div>
      <div class="feature">
        <img src="{{ url('assets/check-circle.svg') }}">
        Mobile Application
      </div>
      <div class="feature inactive">
        <img src="{{ url('assets/x-square.svg') }}">
        Video Conferencing
      </div>
      <div class="feature inactive">
        <img src="{{ url('assets/x-square.svg') }}">
        Team Chat
      </div>
      <div class="feature inactive">
        <img src="{{ url('assets/x-square.svg') }}">
        Breakout Rooms
      </div>
      <div class="feature inactive">
        <img src="{{ url('assets/x-square.svg') }}">
        Learning Management System
      </div>
      

      <button class="cta">Start Today</button>

    </div>
    


    <div class="price-column popular">

      <div class="most-popular">Most Popular</div>

      <div class="price-header">
        <div class="price">
          <div class="dollar-sign">$</div>
          325
          <div class="per-month">/student</div>
        </div>
        <div class="plan-name">Standard</div>
      </div>

      <div class="divider"></div>

      <div class="feature">
        <img src="{{ url('assets/check-circle.svg') }}">
        Info & User Management
      </div>
      <div class="feature">
        <img src="{{ url('assets/check-circle.svg') }}">
        Fees
      </div>
      <div class="feature">
        <img src="{{ url('assets/check-circle.svg') }}">
        Tests & Assignments
      </div>
      <div class="feature">
        <img src="{{ url('assets/check-circle.svg') }}">
        SMS & Email
      </div>
      <div class="feature">
        <img src="{{ url('assets/check-circle.svg') }}">
        Mobile Application
      </div>
      <div class="feature">
        <img src="{{ url('assets/check-circle.svg') }}">
        Video Conferencing
      </div>
      <div class="feature">
        <img src="{{ url('assets/check-circle.svg') }}">
        Team Chat
      </div>
      <div class="feature">
        <img src="{{ url('assets/check-circle.svg') }}">
        Breakout Rooms
      </div>
      <div class="feature inactive">
        <img src="{{ url('assets/x-square.svg') }}">
        Learning Management System
      </div>

      <button class="cta">Start Today</button>

    </div>
    
    
    
    <div class="price-column">

      <div class="price-header">
        <div class="price">
          <div class="dollar-sign">$</div>
          450
          <div class="per-month">/student</div>
        </div>
        <div class="plan-name">Premium</div>
      </div>

      <div class="divider"></div>

      <div class="feature">
        <img src="{{ url('assets/check-circle.svg') }}">
        Info & User Management
      </div>
      <div class="feature">
        <img src="{{ url('assets/check-circle.svg') }}">
        Fees
      </div>
      <div class="feature">
        <img src="{{ url('assets/check-circle.svg') }}">
        Tests & Assignments
      </div>
      <div class="feature">
        <img src="{{ url('assets/check-circle.svg') }}">
        SMS & Email
      </div>
      <div class="feature">
        <img src="{{ url('assets/check-circle.svg') }}">
        Mobile Application
      </div>
      <div class="feature">
        <img src="{{ url('assets/check-circle.svg') }}">
        Video Conferencing
      </div>
      <div class="feature">
        <img src="{{ url('assets/check-circle.svg') }}">
        Team Chat
      </div>
      <div class="feature">
        <img src="{{ url('assets/check-circle.svg') }}">
        Breakout Rooms
      </div>
      <div class="feature">
        <img src="{{ url('assets/check-circle.svg') }}">
        Learning Management System
      </div>

      <button class="cta">Start Today</button>

    </div>

    <div class="price-column settings">
      <div class="price-header">
        <div class="price">
          <i class="fa-2x fas fa-cogs"></i>
        </div>

      <div class="divider"></div>

      <div class="contact">
        If you wish <br> to do a <br> <b><i>one time app purchase</b></i>, please contact our sales team
      </div>

      <a href="{{ route('contact') }}"><button class="cta">Contact Us</button></a>

    </div>
  </div>
    
  </section>

@endsection

