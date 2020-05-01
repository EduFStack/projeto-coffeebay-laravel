@include('modal-login')

<!doctype html>
<html lang="en">

<head>
    <title> {{ $title }} </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" href="/public/img/Icons/user.svg">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/palette.css')}}">
    <link rel="icon" href="{{ URL::asset('favicon.ico') }}" type="image/x-icon"/>
</head>
@if ($errors->any())
<div class="alert alert-dark fixed-top">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@isset($message)
<div class="alert alert-dark fixed-top">
    <ul>
        <li>{{ $message }}</li>
    </ul>
</div>
@endisset

<body>
    
<br>
<br>
<br>
    <section class="container-fluid m-sm-0 p-sm-0">
        <div class="row justify-content-center p-sm-0 m-sm-0 ">
            <div class="row justify-content-center col-lg-8 col-sm-12">
                <img class="img-fluid p-0 m-0" src="{{asset('img/img/cafe.png')}}" alt="logo-coffeBay">
            </div>
            {{-- <div class="col-lg-1 col-1"></div> --}}
            <div class="col-auto col-0 border-left px-3 m-0"></div>
            <div class="row col-lg-3 col-12">
                <div class="row col-lg-auto col-4 m-0 p-0 justify-content-center">
                    <img class="img-fluid my-4" src="{{asset('img/logo/Coffee-logo-white.png')}}" alt="logo-coffeeBay">
                </div>
                {{-- <div class="col-lg-12 col-0"></div> --}}
                <div class="row col-lg-auto col-auto m-0 p-0">
                    <form>
                        <button type="button" class="btn btn-outline-light col-lg-12 col-12 mb-3" data-toggle="modal"
                            data-target="#modal-login">
                            <div class="row align-items-center justify-content-around m-0 p-0 col-lg-auto">
                                <img class="home-icon col-lg-auto pl-0" src="{{asset('img/Icons/entrar.svg')}}">
                                <h2 class="header-text col-lg-auto col-10 pl-0 mb-0">ACESSE O COFFEE BAY</h2>
                            </div>
                        </button>
                        <button type="button" class="btn btn-outline-light col-lg-12 col-12" data-toggle="modal"
                            data-target="#modal-membro">
                            <div class="row align-items-center justify-content-around m-0 p-0 col-lg-auto">
                                <img class="home-icon col-lg-auto col-auto pl-0"
                                    src="{{asset('img/Icons/user-add.svg')}}">
                                <h2 class="header-text col-lg-auto col-auto col-10 pl-0 mb-0">AINDA NÃO É MEMBRO?</h2>
                            </div>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
