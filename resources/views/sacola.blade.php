@include('header');

<br>
<br>
<br>
<br>
<br>
<br>
{{-- <section class="container-fluid row justify-content-center">

    <div class="row col-12 justify-content-lg-around">
        <div class="row col-lg-3 col-12 justify-content-center sacola-listagem p-0 m-0">
            <div class="row col-12 justify-content-center sacola-texto">
                <h2>Itens da Campra</h2>
            </div>
            <div class="sacola-item row rounded border border-dark col-6 justify-content-around align-items-center m-2 p-2">
                <div class="row sacola-item col-12 p-0 m-0 justify-content-center">
                    <img class=" img-fluid " width="100px" src="/img/Cards/Guatemala.webp" alt="">
                </div>
                <div class="col-12 m-0 p-0">
                    <ul class="list-group">
                        <li class="sacola-item sacola-texto rounded-0 border-0 list-group-item text-center m-0 p-0">
                            Ristretto Intenso</li>
                        <li class="sacola-item sacola-texto2 rounded-0 border-0 list-group-item text-center m-0 p-0">
                            Intenso e Licoroso</li>
                    </ul>
                </div>
                <div class="row col-12 justify-content-center m-0 p-0">
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
    <a class="btn btn-danger" href=""><img class="sacola-icon" src="{{asset('img/Icons/lixo.svg')}}" alt=""></a>
</div>
</div>
</div>
</div>
</div>



</section> --}}



<section class="container-fluid row justify-content-center">
    <div class="row col-12 justify-content-center sacola-texto">
        <h2>Itens da Campra</h2>
    </div>
    <div class=" row col-12 justify-content-center m-0 p-0">

        <a class="produtos-link" href="">
            <div class="card index-card" style="width: 10rem">

                <img class="card-img-top m-0 p-0" src="/img/Cards/Guatemala.webp" alt="Imagem de capa do card">
                <div class="mt-0 mx-0 mb-2 p-0">
                    <h5 class="card-title sacola-titulo p-0 m-0">Ristreto</h5>
                    <p class="card-text sacola-subtitulo p-0 m-0">Intenso</p>
                    <h5 class="sacola-qtd p-0 m-0">50</h5>
                    {{-- <div class="row col-12 m-0 p-0 justify-content-center"> --}}
                        <p class="sacola-texto2 text-center p-0 m-0">Saches</p>
                    {{-- </div> --}}
                    {{-- <div class="row col-auto justify-content-center p-0 m-0"> --}}
                        {{-- <div class="sacola-item col-auto p-1 m-0">
                            <a class="btn btn-secondary" href=""><img class="sacola-icon"
                                    src="{{asset('img/Icons/lapis.svg')}}" alt=""></a>
                        </div> --}}
                        <div class="sacola-item row col-12 justify-content-center p-0 m-0">
                            <a class="btn btn-danger col-6" href=""><img class="sacola-icon"
                                    src="{{asset('img/Icons/lixo.svg')}}" alt=""></a>
                        </div>
                    {{-- </div> --}}
                </div>

            </div>
        </a>


    </div>
</section>


@include('footer');
