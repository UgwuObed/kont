<form method="post" action="{{ route('profile.update-picture') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="picture">Upload Profile Picture:</label>
        <input type="file" class="form-control" name="picture" id="picture" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
<img src="{{ asset('storage/profile_pictures/' . $user->profile_picture) }}" alt="Profile Picture">