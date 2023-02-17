<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Profile</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">

    <!-- Favicons -->
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
<link rel="manifest" href="assets/img/site.webmanifest">


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="{{ asset('assets/css/profilestyle.css') }}">
</head>

<body>


<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
            <div class="mt-5 text-left">
  <button class="bck" type="button" onclick="window.location.href='{{ url('/homepage') }}'">Back</button>
</div>

        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px"  @if (Auth::user() && Auth::user()->profile_picture)
        <img id="profile-picture" src="{{ asset('storage/profile_pictures/' . Auth::user()->profile_picture) }}" alt="Profile Picture">
      @else
      <img id="profile-picture" src="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg" alt="Default Profile Picture">   
         @endif



         <span class="font-weight-bold">@if(Auth::check())
                {{ Auth::user()->tiktok_username }}
         @endif</span><span class="text-black-50">@if(Auth::check())
                {{ Auth::user()->email }}
         @endif</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">First Name</label><input type="text" class="form-control" placeholder="{{ Auth::user()->first_name }}" readonly></div>
                    <div class="col-md-6"><label class="labels">Last Name</label><input type="text" class="form-control" readonly placeholder="{{ Auth::user()->last_name }}"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Username</label><input type="text" class="form-control" placeholder="{{ Auth::user()->tiktok_username }}" readonly></div>
                    <div class="col-md-12"><label class="labels">Email Address</label><input type="text" class="form-control" placeholder="{{ Auth::user()->email }}" ></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value=""></div>
                    <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="" placeholder="state"></div>
                </div>
                <div class="mt-5 text-center">
  <button class="btn btn-primary profile-button" type="button" onclick="window.location.href='{{ url('/homepage') }}'">Save Profile</button>
</div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src=https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js></script>
</body>