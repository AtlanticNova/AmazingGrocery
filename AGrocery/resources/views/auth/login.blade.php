<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</head>
<body style="height: 100vh;display:flex; flex-direction: column; justify-content: center; align-items: center; background-color:#f5f5f5">
    <div class="container shadow-lg bg-body rounded" style="max-width:500px; padding:50px;border-radius: 10px; background-color:white" >
        <main class="form-signin w-100 m-auto">
            <form method="POST" action="/login" enctype="multipart/form-data">
                @csrf
                @if ($session = session('session'))
                    <div class="row mb-3">
                        <div class="col-sm-8">
                            <div class="alert alert-{{ $session['color'] }}" role="alert">
                                {{ $session['message'] }}
                            </div>
                        </div>
                    </div>
                @endif
                <h1 class="h3 mb-3 fw-normal">Sign In</h1>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                    @error('email')
                        <small id="usernameHelp" class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                    @error('password')
                        <small id="usernameHelp" class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-check mt-3">
                    <input class="form-check-input" type="checkbox" value="1" id="remember" name="remember">
                    <label class="form-check-label" for="remember">
                      Remember me
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit" fdprocessedid="95bo">Sign in</button>
            </form>
            <div class="text-center">
                <small>Don't have an account? <a href="/register"><b style="color:#0d6efd">Register</></b></a></small>
            </div>
        </main>
    </div>
</body>
</html>
