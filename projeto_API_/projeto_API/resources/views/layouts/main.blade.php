<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonte do google -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- system CSS -->
    <link rel="stylesheet" href="/css/main-layout-style.css">
    <link rel="stylesheet" href="/css/content-style.css">

    <!-- fontawesome -->
    <link rel="stylesheet" href="/fontawesome/css/all.min.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto">

                        <li class="nav-item">
                            <a class="nav-link" href="/">
                                <i class="fa-solid fa-house"></i>
                                Início
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/dashboard">
                                <i class="fa-solid fa-list"></i>
                                Meus imóveis
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/cadastrar">
                                <i class="fa-solid fa-plus"></i>
                                Cadastrar imóvel
                            </a>
                        </li>

                    </ul>

                    <form class="d-flex">
                        <div class="search-box">

                            <input class="search-text" type="search" placeholder="Busque um produto..." aria-label="Search" id="search" name="search">

                            <button type="submit" class="search-btn">
                                <i class="fa-solid fa-magnifying-glass" id="loupe-search"></i>
                            </button>

                        </div>
                    </form>

                    <ul class="navbar-nav" id="button-dropdown">
                        @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-circle-user"></i>
                                <span id="username">
                                    User
                                </span>
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">
                                        <i class="fa-solid fa-user"></i>
                                        Meu perfil
                                    </a>
                                </li>
                                <li><a class="dropdown-item" href="#">
                                        <i class="fa-solid fa-lock"></i>
                                        Alterar senha
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">
                                        <i class="fa-solid fa-right-from-bracket"></i>
                                        Sair
                                    </a>
                                </li>
                            </ul>

                        </li>
                        @endauth

                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa-solid fa-arrow-right-to-bracket"></i>
                                Login
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa-solid fa-user-plus"></i>
                                Cadastro
                            </a>
                        </li>
                        @endguest
                    </ul>

                </div>

            </div>
        </nav>
    </header>

    <main>
        <div class="container-fluid">
            @if(session('msg'))
            <p class="msg">{{ session('msg') }}</p>
            @endif

            @yield('content')
        </div>
    </main>

    <footer>
        <p>&copy;Douglas</p>
    </footer>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <!-- system script-->
    <script src="/js/scripts.js"></script>

    <!-- Icones -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>