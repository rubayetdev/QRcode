<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/qrcode@1.4.4/build/qrcode.min.js"></script>
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
                        @if(session('success'))
                            <div class="alert alert-success" id="successmessage">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="col-md-4">
                            <img src="https://via.placeholder.com/150" alt="Profile Picture" class="img-fluid rounded-circle mb-3">
                        </div>
                        <div class="col-md-8" id="userInfo">
                            <h4 id="userName">{{$id->name}}</h4>
                            <p>Email: {{$id->email}}</p>
                            <p>Phone: {{$id->phone}}</p>
                            <p>Location: {{$id->address}}</p>
                            <p id="qrcodeImage">{{$qrCode}}</p>
                            <p>About: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et urna at nibh consectetur facilisis vel eget mauris.</p>
                            <a href="{{route('editprofile',['id'=>$id->id])}}" class="btn btn-primary" style="background-color: #005477">Edit Profile</a>
                            <button onclick="downloadQRCode()" class="btn btn-primary" style="background-color: #005477">Download QR Code</button>
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

    function downloadQRCode() {

        const qrCodeContent = document.getElementById('qrcodeImage').textContent;

        const downloadLink = document.createElement('a');
        downloadLink.href = 'download.php?qr=' + encodeURIComponent(qrCodeContent);
        downloadLink.download = 'qrcode.png';
        downloadLink.click();
    }
    setTimeout(function() {
        document.getElementById('errorMessage').style.display = 'none';
    }, 10000);

    setTimeout(function() {
        document.getElementById('successmessage').style.display = 'none';
    }, 10000);


</script>
</body>
</html>
