<!DOCTYPE html>
<html lang="en">
<head>
  <title>eduSpace</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  @yield('styles')
  
</head>
<body>

  <!--Header-->
  
  <header>

    <div class="header" id="tophead">
      
      <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container p-2">
          <a class="navbar-brand font-weight-bold text-dark" href="{{ route('index') }}">eduSpace</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
      
          <div class="collapse navbar-collapse" id="navbarSupportedContent navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Why eduSpace? <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Product
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Resources
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Blog</a>
                  <a class="dropdown-item" href="#">Newscenter</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Support</a>
                </div>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="{{ route('prices') }}">Prices</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
              </li>
            </ul>
          </div>
        </div> 
      </nav>

      <!--Section1-->

     @yield('image-banner')

    </div>

  </header>  
    <!--Section2-->
    
  <main>

   @yield('content')
  
  </main>
  

<!--footer-->

  
  <footer class="footersection" id="footerdiv">
    <div class="container">
      <div class="row">
        
        <div class="col-lg-4 col-md-6 col-12 footer-div">
          <div class="assistdiv">
            <h6 class="text-uppercase font-weight-bold">For any assistance</h6>
              
              <ul class="list-group-flush">
                <li class="list-group-item p-3 mb-2 bg-secondary text-white"><i class="fa-x fas fa-phone-square-alt"></i>  +91 7338817677</li>
                <li class="list-group-item p-3 mb-2 bg-secondary text-white"><i class="fa-x far fa-envelope"></i>  info@getfyt.com</li>
                <li class="list-group-item p-3 mb-2 bg-secondary text-white"><i class="fa-x far fa-calendar-check"></i>  Monday - Saturday: 10a.m. - 7p.m.</li>
              </ul>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 col-12 footer-div">
          <div class="assistdiv">
            <h6 class="text-uppercase font-weight-bold">Signup for exclusive deals and discounts</h6>
            
            <div class="container newsletter-main">
              <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">
                  <div class="input-group mb-3">
                    <input type="email" class="form-control news-input" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter email">  
                    <div class="input-group-append">
                      <span class="input-group-text">Send</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
          </div>
        </div>

        <div class="col-lg-4 col-md-12 col-12 footer-div">
          <div class="assistdiv">
            <h6 class="text-uppercase font-weight-bold">Connect on Social Media</h6>
              
              {{-- <ul class="list-group list-group-flush">
                <li class="list-group-item"><i class="fa-x fa fa-mobile" aria-hidden="true"></i>  +91 7338817677</li>
                <li class="list-group-item"><i class="fa-x fa fa-envelope" aria-hidden="true"></i>  info@getfyt.com</li>
                <li class="list-group-item"><i class="fa-x fa fa-clock-o" aria-hidden="true"></i>  Monday - Saturday: 10a.m. - 7p.m.</li>
              </ul> --}}
              <i class="fa-2x fab fa-facebook"></i>
              <i class="fa-2x fab fa-twitter-square"></i>
              <i class="fa-2x fab fa-google-plus"></i>
              <i class="fa-2x fab fa-instagram-square"></i>
              <i class="fa-2x fab fa-linkedin"></i>
              <i class="fa-2x fab fa-youtube"></i>
              <i class="fa-2x fab fa-whatsapp-square"></i>


            </div>
        </div>

      </div>

      <hr class="line w-100 mx-auto" style="height:2px; border:none; color:rgb(245, 241, 241); background-color:rgb(243, 238, 238);"/>

      <div class="mt-5 text-center">
        <p class="text-white">Copyright ©2020 All rights reserved | Made with love by eduSpace</p>
      </div>
    </div>
      {{-- <div class="bg-blue text-dark"><h4 class="font-weight-bold text-center">Footer</h4></div></div>   --}}
  </footer>


  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>



  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}
    {{-- <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script> --}}
</body>
</html>