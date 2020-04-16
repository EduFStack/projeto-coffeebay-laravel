@include('header');

<br>
<br>
<br>
<br>
<br>
<br>
<section class="container-fluid row justify-content-center">

    <div class="row col-12 justify-content-lg-around">
        <div class="row col-6 justify-content-center sacola-listagem">
            <div class="row col-6 justify-content-center sacola-texto">
                <h2>Itens da Campra</h2>
            </div>
            <div
                class="sacola-item row rounded border border-dark col-11 justify-content-around align-items-center m-2 p-0">
                <div class="sacola-item col-2 p-0 m-0">
                    <img class=" img-fluid " width="80px" src="/img/Cards/Guatemala.webp" alt="">
                </div>
                <div class="col-auto m-0 p-0">
                    <ul class="list-group">
                        <li class="sacola-item sacola-texto rounded-0 border-0 list-group-item text-center m-0 p-0">
                            Ristretto Intenso</li>
                        <li class="sacola-item sacola-texto2 rounded-0 border-0 list-group-item text-center m-0 p-0">
                            Ristretto Intenso</li>
                    </ul>
                </div>
                <div class="row col-auto m-0 p-0">
                    <ul class="list-group">
                        <li class="sacola-item sacola-texto rounded-0 border-0 list-group-item text-center px-0">50</li>
                    </ul>
                    <div class="row col-auto m-0 p-0 align-content-end">
                        <p class="sacola-texto2 text-center mx-1">Saches</p>
                    </div>
                </div>
                <div class="row col-auto justify-content-center p-0 m-0">
                    <div class="sacola-item col-auto p-1 m-0">
                        <a class="btn btn-secondary" href=""><img class="sacola-icon"
                                src="{{asset('img/Icons/lapis.svg')}}" alt=""></a>
                    </div>
                    <div class="sacola-item col-auto p-1 m-0">
                        <a class="btn btn-danger" href=""><img class="sacola-icon" src="{{asset('img/Icons/lixo.svg')}}"
                                alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>



</section>


@include('footer');
