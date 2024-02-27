<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Contacts</title>
    @include('css-flie')
</head>

<body>
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style="margin-bottom: 30px;">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}" >
            CONTACTS
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>

        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-lg">
    <div class="d-flex align-items-center  nav-top navbar-collapse mt-3 position-fixed" id="navbarSupportedContent ">
        <button class="navbar-toggler sideMenuToggler" type="button">
            <i class="fas fa-bars"></i>
        </button>
        @include('dashboard.includes.navbar_top')

                    @if(auth()->check())
                <a class="" href="#"  onclick="event.preventDefault();document.getElementById('logout-form').submit();"  style="margin-left: 500px;">>
                    <i class="fas fa-sign-out text-dark"></i>
                    Sair
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                    @else
                        <a href="{{ route('login') }}" style="margin-left: 500px;">Entrar</a>
                    @endif

        </div>
    </div>

</nav>
<div class="wrapper d-flex " >
    <div class="container">
        @yield('content')
    </div>
</div>

<script src="https://kit.fontawesome.com/3864bbfe83.js" crossorigin="anonymous"></script>
<script src="{{ asset('dashboard/js/jquery.min.js') }}"></script>
<script src="{{ asset('dashboard/js/popper.min.js') }}"></script>
<script src="{{ asset('dashboard/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('dashboard/js/script.js') }}"></script>
<script src="{{ asset('dashboard/js/bootstrap.min.js') }}"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>
</html>
