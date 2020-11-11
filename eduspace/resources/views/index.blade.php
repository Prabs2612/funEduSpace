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
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  
  <script src="https://kit.fontawesome.com/0257f21e7b.js" crossorigin="anonymous"></script>

@endsection

@section('image-banner')

<section class="header-section">
    <div class="center-div">
      <h1 class="font-weight-bold">An investment in knowledge<br> pays the best interest</h1>
      <p>One stop solutions to education related problems,<br><i><b>'eduSpace'!</i></b></p>
        <div class="header-buttons">
          <a class="btn btn-primary" href="">TRY FOR FREE</a>
        </div>
    </div>
  </section>

@endsection


@section('content')

<div class="section0">
    <section class="main_heading my-5">
      <div class="text-center">
        <h1 class="font-weight-bold">Welcome to eduSpace</h1>
        <p class="text-center"><b>eduSpace</b> is an online <b>ERP</b> solution for all the challenges in Educational Institutions.<br>
          It connects parents, students, teachers, institutional management and administration.<br>
          It is a <b><i><u>multi-user system</b></i></u>, being a hub of knowledge, data, communication, statistics and funds for students and institutuions.<br>
        </p>
      </div>
      
    </section>
    
  </div>

  {{-- <hr class="line w-100 mx-auto" style="height:1px; border:none; color:rgb(57, 57, 57); background-color:rgb(52, 51, 51);"/> --}}

  <div class="section1">

    <section class="main_heading my-5">
      <div class="text-center">
        <h1 class="font-weight-bold">Features</h1>
        <hr class="line w-25 mx-auto" style="height:1px; border:none; color:rgb(57, 57, 57); background-color:rgb(52, 51, 51);"/>
      </div>
    </section>

    <section class="header-extradiv">
      <div class="container">
        <div class="row">
        
          <div class="extra-div col-lg-4 col-md-4 col-12">
            <a href=""><i class="fa-3x fa fa-hdd-o" aria-hidden="true"></i></a>
            <h2> CENTRALIZED <br>DATA STORAGE </h2>
            <p>Institution Management simplifies data management and functions as an automated system having commonly accessible data that can be easily operated and modified</p>
          </div>
        
          <div class="extra-div col-lg-4 col-md-4 col-12">
            <a href=""><i class="fa-3x fa fa-shield" aria-hidden="true"></i><i class="fa-3x fa fa-refresh" aria-hidden="true"></i></a>
            <h2> SECURITY <br> AND <br> UPDATES </h2>
            <p>The centralized network is secure and updated real-time each time a new activity occurs.</p>
          </div>
        
          <div class="extra-div col-lg-4 col-md-4 col-12">
            <a href=""><i class="fa-3x fa fa-bell-o" aria-hidden="true"></i></a>
            <h2> ALERTS <br>  </h2>
            <p>Transparency is our forte. Students, teachers, parents and other administrators receive relevant notifications depending on their nature and role.</p>
          </div>
        
        </div>
      </div>
    </section>
  </div>

  {{-- <hr class="line w-100 mx-auto" style="height:1px; border:none; color:rgb(57, 57, 57); background-color:rgb(52, 51, 51);"/> --}}

  
  <div class="section2">

    <section class="main_heading my-5">
      <div class="text-center">
        <h1 class="font-weight-bold">Benefits</h1>
        <hr class="line w-25 mx-auto" style="height:1px; border:none; color:rgb(57, 57, 57); background-color:rgb(52, 51, 51);"/>
      </div>
    </section>

    <section class="next_heading">
      <div class="container">
        <div class="row">
          
          <div class="col-lg-6 col-md-6 col-sm-6 col-10 offset-1 offset-lg-0">
            <figure>
              <img src="{{ url('assets/benefits.jpeg') }}" class="img-fluid" alt="Benefits">
            </figure>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="list-group-flush">
              <ul class="list-group-flush">
                <li class="list-group-item">
                  <div class="md-v-line"></div><i class="fa-x fa fa-check" aria-hidden="true"></i> Student Information
                </li>
                <li class="list-group-item">
                  <div class="md-v-line"></div><i class="fa-x fa fa-check" aria-hidden="true"></i> Parental Supervision
                </li>
                <li class="list-group-item">
                  <div class="md-v-line"></div><i class="fa-x fa fa-check" aria-hidden="true"></i> Performance of Teachers
                </li>
                <li class="list-group-item">
                  <div class="md-v-line"></div><i class="fa-x fa fa-check" aria-hidden="true"></i> Advance Institutional Software Technology upgraded
                </li>
                <li class="list-group-item">
                  <div class="md-v-line"></div><i class="fa-x fa fa-check" aria-hidden="true"></i> Interpersonal Communication
                </li>
              </ul>
            </div>
          </div>
    </section>

  </div>

  {{-- <hr class="line w-100 mx-auto" style="height:1px; border:none; color:rgb(57, 57, 57); background-color:rgb(52, 51, 51);"/> --}}


  <div class="section3">

    <section class="main_heading my-5">
      <div class="text-center">
        <h1 class="font-weight-bold">Some statistics</h1>
        <hr class="line w-25 mx-auto" style="height:1px; border:none; color:rgb(57, 57, 57); background-color:rgb(52, 51, 51);"/>
      </div>
    </section>

    <section class="subheading">
      <div class="container">
        <button type="button" class="btn btn-primary btn-lg btn-block" disabled>India has 500 million Youth Population. 
        </button>
        <button type="button" class="btn btn-secondary btn-lg btn-block" disabled>Indian education sector estimated USD101.billion in FY19. </button>
        <button type="button" class="btn btn-success btn-lg btn-block" disabled>33,931 Colleges and 993 Universities in India</button>
        <button type="button" class="btn btn-danger btn-lg btn-block" disabled>37.4 million Indian students</button>
        <button type="button" class="btn btn-warning btn-lg btn-block" disabled>26.3% Gross Enrollment ratio in higher education(2019) </button>
        <button type="button" class="btn btn-info btn-lg btn-block" disabled>Foreign Direct Investment inflow into Indian education sector USD6 billion(2020)<br> according to DPIIT.</button>
      </div>
    </section>

  </div>

  <div class="section4">
    <section class="buttonjoin">
      <div class="section-buttons text-center">
        <a class="btn btn-info" href="">JOIN US</a>
      </div>
    </section>
  </div>

@endsection