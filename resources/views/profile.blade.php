<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css"> <!-- Add your custom CSS file -->
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header text-center">
                    <h2>Your Profile</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="https://via.placeholder.com/150" alt="Profile Picture" class="img-fluid rounded-circle mb-3">
                        </div>
                        <div class="col-md-8" id="userInfo">
                            <h4 id="userName">{{$id->name}}</h4>
                            <p>Email: {{$id->email}}</p>
                            <p>Phone: {{$id->phone}}</p>
                            <p>Location: {{$id->address}}</p>
                            <p>About: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et urna at nibh consectetur facilisis vel eget mauris.</p>
                            <button onclick="editProfile()" class="btn btn-primary">Edit Profile</button>
                        </div>
                        <div class="col-md-8 d-none" id="editInfo">
                            <form id="editForm">
                                <h4>Edit Profile</h4>
                                <div class="mb-3">
                                    <label for="editName" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="editName" value="{{$id->name}}">
                                </div>
                                <div class="mb-3">
                                    <label for="editEmail" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="editEmail" value="{{$id->email}}">
                                </div>
                                <div class="mb-3">
                                    <label for="editPhone" class="form-label">Phone</label>
                                    <input type="text" class="form-control" id="editPhone" value="{{$id->phone}}">
                                </div>
                                <div class="mb-3">
                                    <label for="editLocation" class="form-label">Location</label>
                                    <input type="text" class="form-control" id="editLocation" value="{{$id->address}}">
                                </div>
                                <div class="mb-3">
                                    <label for="editAbout" class="form-label">About</label>
                                    <textarea class="form-control" id="editAbout" rows="3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et urna at nibh consectetur facilisis vel eget mauris.</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                <button type="button" onclick="cancelEdit()" class="btn btn-secondary">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function editProfile() {
        document.getElementById('userInfo').classList.add('d-none');
        document.getElementById('editInfo').classList.remove('d-none');
    }

    function cancelEdit() {
        document.getElementById('userInfo').classList.remove('d-none');
        document.getElementById('editInfo').classList.add('d-none');
    }

    // Example for form submission (you may use AJAX or other methods for saving data)
    document.getElementById('editForm').addEventListener('submit', function (event) {
        event.preventDefault();

        // Get input values
        const newName = document.getElementById('editName').value;
        const newEmail = document.getElementById('editEmail').value;
        const newPhone = document.getElementById('editPhone').value;
        const newLocation = document.getElementById('editLocation').value;
        const newAbout = document.getElementById('editAbout').value;

        // Update user information
        document.getElementById('userName').textContent = newName;
        // Update other elements accordingly

        // Show original profile view and hide the edit form
        cancelEdit();
    });

</script>
</body>
</html>
