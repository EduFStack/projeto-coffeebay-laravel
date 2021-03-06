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
    <link rel="icon" href="{{ URL::asset('favicon.ico') }}" type="image/x-icon"/>
</head>

<body>

    @include('modal-login');

    <header class="container-fluid px-0 mx-0 fixed-top">
        <nav class="px-0 mx-0 navbar navbar-expand-lg color-nav-bar navbar-dark row justify-content-around pt-0 m-0">
        <a class="navbar-brand col-auto" href="{{ route('home') }}">
                <img class="header-logo" src="{{asset('img/logo/Coffee-logo-white.png')}}" alt="logo-cafe bay">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
                <span class="color-nav-span navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse row col-lg-8 justify-content-center justify-content-lg-end"
                id="navbarNav">
                <a href="{{ route('logout') }}"><button type="button" class="btn btn-light col-lg-auto col-11">
                        <div class="row align-items-center justify-content-around m-0 p-0 col-lg-auto">
                            <img class="header-icon col-lg-auto pl-0" src="{{asset('img/Icons/user.svg')}}">
                            <h2 class="header-text col-lg-auto col-10 pl-0 mb-0">Olá, {{ Auth::user()->name }}</h2>
                        </div>
                    </button></a>
                <div class="col-lg-auto col-12 py-1"></div>
                <button type="button" class="btn btn-light col-lg-auto col-11">
                    <div class="row align-items-center justify-content-around m-0 p-0 col-lg-auto">
                        <img class="header-icon col-lg-auto col-auto pl-0"
                            src="{{asset('img/Icons/shopping-cart.svg')}}">
                        <h2 class="header-text col-lg-auto col-auto col-10 pl-0 mb-0">CARRINHO</h2>
                    </div>
                </button>
            </div>
        </nav>
    </header>
