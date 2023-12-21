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
                            <div class="alert alert-success" id="errorMessage">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="col-md-4">
                            <img src="https://via.placeholder.com/150" alt="Profile Picture" class="img-fluid rounded-circle mb-3">
                        </div>

                        <div class="col-md-8">
                            <form id="editForm" action="{{ route('update') }}" method="post">
                                @csrf
                                <h4>Edit Profile</h4>
                                <input type="hidden" name="id" value="{{ $id->id }}">
                                <div class="mb-3">
                                    <label for="editName" class="form-label">Name</label>
                                    <input type="text" name="FullName" class="form-control" id="editName" value="{{ $id->name }}">
                                </div>
                                <div class="mb-3">
                                    <label for="editEmail" class="form-label">Email</label>
                                    <input type="email" name="Email" class="form-control" id="editEmail" value="{{ $id->email }}">
                                </div>
                                <div class="mb-3">
                                    <label for="editPhone" class="form-label">Phone</label>
                                    <input type="text" name="Phone" class="form-control" id="editPhone" value="{{ $id->phone }}">
                                </div>
                                <div class="mb-3">
                                    <label for="editLocation" class="form-label">Location</label>
                                    <input type="text" name="Location" class="form-control" id="editLocation" value="{{ $id->address }}">
                                </div>
                                <div class="mb-3">
                                    <label for="editAbout" class="form-label">About</label>
                                    <textarea name="About" class="form-control" id="editAbout" rows="3">{{ $id->about }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                <a href="{{route('profile',['id'=>$id->id])}}" type="button"  class="btn btn-secondary">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
