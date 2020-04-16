<!doctype html>
<html lang="pt-br">

<head>
    <title> {{ $title }} </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/palette.css')}}">
    <link rel="icon" href="{{ URL::asset('favicon.ico') }}" type="image/x-icon" />
</head>

<body>

    @include('modal-login');

    <header class="container-fluid px-0 mx-0 fixed-top border-bottom border-dark">
        <nav class="px-0 py-2 navbar navbar-expand-lg color-nav-bar navbar-dark row justify-content-around pt-0 m-0">
            <a class="navbar-brand col-auto" href="{{ route('home') }}">
                <img class="header-logo" src="{{asset('img/logo/Coffee-logo-white.png')}}" alt="logo-cafe bay">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
                <span class="color-nav-span navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse row col-lg-6 justify-content-center justify-content-lg-end"
                id="navbarNav">
                <div class="btn-group row col-lg-auto col-5 p-0 m-2 m-lg-4">
                    <button type="button" class="rounded border border-secondary btn btn-light col-lg-auto col-12"
                        data-toggle="dropdown">
                        <div class="row align-items-center justify-content-center col-auto p-0 m-0">
                            <img class="header-icon col-auto p-0 m-0" src="{{asset('img/Icons/mercado.svg')}}">
                        </div>
                    </button>
                    <div class="rounded border border-secondary dropdown-menu dropdown-menu-right col-12 mt-2">
                        <div class="row justify-content-center col-12 p-0 m-0">
                            <h2 class="header-text-drop col-10 p-0 m-1 text-center">A sacola está vazia!</h2>
                            <a class="border border-success header-text-drop col-10 p-2 mb-2 btn btn-outline-success" href="{{ route('sacola') }}">Ver sacola</a>
                        </div>
                    </div>

                </div>
                <div class="btn-group row col-lg-auto col-5 p-0 m-0">
                    <button type="button" class="rounded border border-secondary btn btn-light col-lg-auto col-12"
                        data-toggle="dropdown">
                        <div class="row align-items-center justify-content-center col-auto p-0 m-0">
                            <img class="header-icon col-auto p-0 m-0" src="{{asset('img/Icons/user.svg')}}">
                        </div>
                    </button>
                    <div class="header-drop rounded border border-secondary dropdown-menu dropdown-menu-left col-12 mt-2">
                        <div class="row justify-content-center col-12 p-0 m-0">

                            <h2 class="header-text-drop col-11 p-2 m-1 text-center">Olá, {{ Auth::user()->name }}!</h2>
                            <a class="border border-dark header-text-drop col-10 p-2 mb-2 btn btn-outline-dark" href="#">Meus Dados</a>
                            <a class="border border-info header-text-drop col-10 p-2 mb-3 btn btn-outline-info" href="#">Meus Pedidos</a>
                            <a class="border border-danger header-text-drop col-6 p-0 mb-1 btn btn-danger" href="{{ route('logout') }}">Sair </a>

                        </div>
                    </div>
                </div>
        </nav>
    </header>
