<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo asset('css/dist/app.css'); ?>"
        type="text/css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<!--font awesome cdn -->
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>



    @yield('styles')
    <title>Laravel Rent Car</title>
</head>

<body>

    <div class="container my-3 border border-primary">

        <div class="header h-50 bg-primary  rounded shadow-sm">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="{{route('index')}}">Accueil</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('users.profile', auth()->user()->id)}}">

                            {{ auth()->user()->name }}
                        </a>
                    </li>
                    @if (auth()->user()->isAdmin())
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('admins.index')}}">

                        Admin
                        </a>
                    </li>
                    @endif

                    <li class="nav-item">
                        <form action="{{ route('users.logout')}}" method="post">
                            @csrf
                            <button id="disc" type="submit" class="nav-link text-white">Deconnexion</button>
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('users.register') }}">Inscription</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('users.login') }}">Connexion </a>
                    </li>
                @endauth

            </ul>


        </div>

        <div class="row">
            <div class="col-md-6 mx-auto my-4">
                @include('includes.messages')
            </div>
        </div>


        @yield('content')

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
        integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
        integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous">
    </script>

    @yield('scripts')

</body>

</html>
