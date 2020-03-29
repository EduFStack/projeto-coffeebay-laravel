@include('modal-login')

<!doctype html>
<html lang="en">
  <head>
    <title> {{ $title }} </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/palette.css')}}">
  </head>
  <br>
  <br>
  <br>
  <body>      
    <section class="container-fluid m-sm-0 p-sm-0">
        <div class="row p-sm-0 m-sm-0 ">
            <div class="row justify-content-center col-lg-9 col-sm-12">
                <img class="img-fluid p-0 m-0" src="{{asset('img/img/cafe.png')}}" alt="logo-coffeBay">
            </div>
            {{-- <div class="col-lg-1 col-1"></div> --}}
            <div class="row col-lg-3 col-sm-12 border-left">
                <div class="row col-lg-auto col-12 m-0 p-0 justify-content-center">
                    <img class="img-fluid mb-5" src="{{asset('img/logo/Coffee-logo-white.png')}}" alt="logo-coffeeBay">
                </div>
                <div class="col-12"></div>
                <div class="row col-lg-auto m-0 p-0">
                    <form>
                        <button type="button" class="btn btn-outline-light col-lg-12 col-12 mb-3" data-toggle="modal" data-target="#modal-login">
                            <div class="row align-items-center justify-content-around m-0 p-0 col-lg-auto">
                                <img class="header-icon col-lg-auto pl-0" src="{{asset('img/Icons/user.svg')}}">
                                <h2 class="header-text col-lg-auto col-10 pl-0 mb-0">ACESSE O COFFEE BAY</h2>
                            </div>
                        </button>
                        <button type="button" class="btn btn-outline-light col-lg-12 col-12" data-toggle="modal" data-target="#modal-membro">
                            <div class="row align-items-center justify-content-around m-0 p-0 col-lg-auto">
                                <img class="header-icon col-lg-auto col-auto pl-0" src="{{asset('img/Icons/add-user.svg')}}">
                                <h2 class="header-text col-lg-auto col-auto col-10 pl-0 mb-0">AINDA NÃO É MEMBRO?</h2>
                            </div>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>