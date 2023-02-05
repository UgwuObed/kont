<?php 

<form method="post" action="{{ route('profile.update-picture') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="profile_picture">Upload Profile Picture:</label>
        <input type="file" class="form-control" name="profile_picture" id="profile_ picture" required>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
<img src="{{ asset('storage/profile_pictures/' . $user->profile_ picture) }}" alt="Profile Picture">
?>