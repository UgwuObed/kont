<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


  <!-- =======================================================
  * Template Name: SoftLand - v4.9.1
  * Template URL: https://bootstrapmade.com/softland-bootstrap-app-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

   <!-- ======= Header ======= -->
   <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <img src="assets/img/favicon.png" alt="image">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{ url('/home') }}">Home</a></li>
          <li><a href="{{ url('/register') }}">Join Now</a></li>
         
                  
                </ul>
              </li>
            
          </li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Blog Section ======= -->
    <section class="hero-section inner-page">
      <div class="wave">

        <svg width="1920px" height="265px" viewBox="0 0 1920 265" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
              <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,667 L1017.15166,667 L0,667 L0,439.134243 Z" id="Path"></path>
            </g>
          </g>
        </svg>

      </div>

      <div class="container">
        <div class="row align-items-center">
          <div class="col-12">
            <div class="row justify-content-center">
              <div class="col-md-7 text-center hero-text">
                <h1 data-aos="fade-up" data-aos-delay="">Login </h1>
                <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Login Into Your Account</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
    <body>
      <section class="section">
        <div class="container">
          <div class="row mb-5 align-items-end">
            <div class="col-md-6" data-aos="fade-up">
  
            </div>
  
          </div>
  
          <div class="row">
  
            <div class="col-md-6 mb-5 mb-md-0" data-aos="fade-up">
              <form method="POST" action="/authenticate">
              @csrf
                <div class="row">
                  <div class="col-md-6 form-group">
                  <div class="col-md-12 form-group mt-3">
                    <label for="name">Email</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}">
                    @if($errors->has('email'))
                      <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <label for="name">Password</label>
                    <input type="password" class="form-control" name="password" id="password" value="{{ old('password') }}">
                    @if($errors->has('password'))
                      <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif

                  <br><hr>
                  <div class="col-md-6 form-group">
                    <button type="submit" class="btn btn-primary">Login</button>

                  </div>

                </div>
  
              </form>
             <!-- <script>
   document.getElementById('form').addEventListener('submit', (event) => {
  event.preventDefault();

  const formData = new FormData(event.target);
  const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

  fetch('http://localhost:8000/register', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      'Origin': 'http://localhost:8000',
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    body: JSON.stringify({
      first_name: document.getElementById('first_name').value,
      last_name: document.getElementById('last_name').value,
      tiktok_username: document.getElementById('tiktok_username').value,
      email: document.getElementById('email').value,
      password: document.getElementById('password').value,
      password_confirmation: document.getElementById('password_confirmation').value,
    }),
  })
    .then((response) => response.json())
    .then((data) => {
      console.log(data);
    })
    .catch((error) => {
      })
  });

</script> -->

            </div>
  
          </div>
        </div>
      </section>
   

  <!-- ======= Footer ======= -->
  <footer class="footer" role="contentinfo">
    <div class="container">
      <div class="row">
        <div class="col-md-7 ms-auto">
          <div class="row site-section pt-0">
            <div class="col-md-4 mb-4 mb-md-0">
              <h3>Navigation</h3>
              <ul class="list-unstyled">
                <li><a href="#">Pricing</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
              <h3>Services</h3>
              <ul class="list-unstyled">
                <li><a href="#">Team</a></li>
                <li><a href="#">Collaboration</a></li>
                <li><a href="#">Todos</a></li>
                <li><a href="#">Events</a></li>
              </ul>
            </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row justify-content-center text-center">
        <div class="col-md-7">
          <p class="copyright">&copy; Copyright Konthub. All Rights Reserved</p>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=SoftLand
          -->
          </div>
        </div>
      </div>

    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>