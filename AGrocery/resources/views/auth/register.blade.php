<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</head>
<body style="height: 100vh;display:flex; flex-direction: column; justify-content: center; align-items: center; background-color:#f5f5f5">
    <div class="container shadow-lg bg-body rounded" style="padding:50px;border-radius: 10px; background-color:white" >
        <main class="form-signin w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal">Register</h1>
            <form class="row g-3" method="POST" action="/register" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstName" name="firstName">
                    @error('firstName')
                        <small id="usernameHelp" class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lastName" name="lastName">
                    @error('lastName')
                        <small id="usernameHelp" class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                    @error('email')
                        <small id="usernameHelp" class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="role" class="form-label">Role</label>
                    <select class="form-select" aria-label="Select Role" name="role">
                        <option value="1" selected>User</option>
                        <option value="2">Admin</option>
                    </select>
                    @error('role')
                        <small id="usernameHelp" class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="gender" class="form-label">Gender</label>
                    <select class="form-select" aria-label="Select Gender" name="gender">
                        <option value="1" selected>Female</option>
                        <option value="2">Male</option>
                    </select>
                    @error('gender')
                        <small id="usernameHelp" class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="displayPicture" class="form-label">Display Picture</label>
                        <input class="form-control" type="file" id="displayPicture" name="displayPicture">
                    </div>
                    @error('displayPicture')
                        <small id="usernameHelp" class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                    @error('password')
                        <small id="usernameHelp" class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="confirmPassword" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="confirmPassword" name="password_confirmation">
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit" fdprocessedid="95bo">Register</button>
            </form>
            <div class="text-center">
                <small>Already have an account? <a href="/login"><b style="color:#0d6efd">Login</></b></a></small>
            </div>
        </main>
    </div>
</body>
</html>
