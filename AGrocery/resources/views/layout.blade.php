<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('headline')</title>
    <link rel="icon" href="image/x-icon" href="public/cart.ico" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/styles.css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="/">Amazing E-Grocery</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4"></ul>
                @guest
                    <a href="/login">
                        <button class="btn btn-outline-dark me-2" type="button">
                            Login
                        </button>
                    </a>
                    <a href="/register">
                        <button class="btn btn-outline-dark" type="button">
                            Register
                        </button>
                    </a>
                @else
                    <div class="dropdown">
                        <button class="btn btn-outline-dark dropdown-toggle me-2" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Profile
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/profile">My Profile</a></li>
                            <li>
                                <a class="dropdown-item" href="/logout"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="/logout" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                    <a class="d-flex me-2" role="button" href="/cart">
                        {{-- <a href="/cart">Cart</a> --}}
                        <button class="btn btn-outline-dark" href="/cart">
                            <i class="bi bi-cart"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </a>
                    <div>
                        <select class="form-control changeLang">
                            <i class="bi bi-translate"></i>
                            <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>EN</option>
                            <option value="id" {{ session()->get('locale') == 'id' ? 'selected' : '' }}>ID</option>
                        </select>
                    </div>
                @endguest
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">&copy; Amazing E-Grocery 2023</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

<script type="text/javascript">
    var url = "{{ route('changeLang') }}";

    $(".changeLang").change(function() {
        window.location.href = url + "?lang=" + $(this).val();
    });
</script>   

</html>
