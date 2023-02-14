<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Picture</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">

    <!-- Favicons -->
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
<link rel="manifest" href="assets/img/site.webmanifest">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="{{ asset('assets/css/profilestyle.css') }}">
</head>

<body>
<div class="row">
   <div class="small-12 columns">
     <div class="circle">
       <img class="profile-picture" src="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg">
     </div>
     <div class="p-image">
       <label for="file-upload" class="custom-file-upload">
         <i class="fa fa-camera"></i> Upload Photo
       </label>
       <input id="file-upload" class="file-upload" type="file" accept="image/*" style="display:none"/>
     </div>
  </div>
</div>

<script>
  const inputElement = document.querySelector('.file-upload');
  inputElement.addEventListener('change', uploadProfilePicture);

  function uploadProfilePicture() {
    const file = inputElement.files[0];
    const formData = new FormData();
    formData.append('profile_picture', file);

    fetch('/api/profile/picture', {
      method: 'POST',
      body: formData,
      headers: {
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
      }
    })
    .then(response => {
      if (!response.ok) {
        throw new Error('Network response was not ok');
      }
      return response.json();
    })
    .then(data => {
      // update the profile picture element with the new image URL
      const profilePicture = document.querySelector('.profile-picture');
      profilePicture.src = data.path;

      // show a success message
      alert('Profile picture uploaded successfully');
    })
    .catch(error => {
      console.error('There was an error uploading the profile picture:', error);
      alert('An error occurred while uploading the profile picture');
    });
  }
</script>
</html>
</body>