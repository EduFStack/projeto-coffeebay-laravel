@include('header');

<br>
<br>
<br>
<br>
<br>
<section class="container row col-12 m-0 p-0 pt-2 justify-content-center justify-content-lg-around">
    <div class="row col-lg-7 col-12 justify-content-center p-0 m-0">
        <div class="row col-lg-11 col-12 p-0 m-0 sacola-texto justify-content-center justify-content-lg-start">
            <h2 class="sacola-titulo p-0 m-0 mb-3">Status: </h2>
        </div>
        <div class="row col-12 justify-content-lg-center align-self-baseline p-0 m-0">
            <div class=" row col-lg-10 justify-content-center  m-0 p-0 mb-4 border-bottom-0">
                @foreach ($produtos as $produto)
                <div class=" card index-card m-1" style="width: 11rem">
                    <img class="card-img-top" src="/{{ $produto->produto->imagem }}" alt="Imagem de capa do card">
                    <div class="card-body py-0 px-3 m-0">
                        <h5 class="card-title m-0 pb-1 index-titulo-produto">{{ $produto->produto->nome }}</h5>
                        <p class="card-text mb-0">{{ $produto->produto->resumo }}</p>
                        <br>
                        <h5 class="card-title m-0 p-0 index-intensidade-produto">Quantidade</h5>
                        <div class="row justify-content-center align-items-center">
                            <div class="border border-secondary rounded m-3 p-1" style="width: 4.5rem;">
                                <h3 class="sacola-qtd-produto m-0 p-0 bg-transparent">{{ $produto->quantidade }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="row col-lg-auto col-0 border-right border-secondary m-0 p-0 "></div>
    <div class=" col-lg-4 col-12 p-0 px-2 px-lg-4 m-0 align-items-center justify-content-center">
        <div class="row justify-content-center col-12 p-0 pb-3 m-0 sacola-texto">
            <h2 class="sacola-titulo p-0 m-0">Pedido Número: 00{{ $pedido }} </h2>
        </div>
        <div class="row col-12 py-2 m-0 rounded sacola-resumo justify-content-center border border-secondary">
            <div
                class="row col-12 align-items-center justify-content-between p-0 pb-1 m-0 border-bottom border-secondary">
                <h5 class="col-8 card-title m-1 px-0 sacola-item text-left sacola-resumo-texto">PRODUTO</h5>
                <h5 class="col-2 card-title m-1 px-0 sacola-item text-center sacola-resumo-texto">Qtd</h5>
            </div>
            <div class="row col-12 align-items-center justify-content-between pt-2 p-0 m-0">
                @foreach ($produtos as $produto)
                <h5 class="col-8 card-title m-0 mt-1 mx-1 px-0 sacola-item text-left sacola-resumo-texto">
                    {{ $produto->produto->nome }}</h5>
                <h5 class="col-2 card-title m-0 mt-1 mx-1 px-0 sacola-item text-center sacola-resumo-texto">
                    {{ $produto->quantidade }}</h5>
                @endforeach
            </div>
            <div
                class="row col-12 align-items-center justify-content-between p-0 m-0 pt-2 mt-3 border-top border-secondary">
                <h5 class="col-8 card-title m-1 px-0 sacola-item text-left sacola-resumo-texto">TOTAL (sachês)</h5>
                <h5 class="col-2 card-title m-1 px-0 sacola-item text-center sacola-resumo-texto">{{ $total }}</h5>
            </div>
        </div>
        <div class="row col-12 pt-2 pb-2 m-0 mt-2 rounded sacola-resumo justify-content-center border border-secondary">
            <div
                class="row col-12 align-items-center justify-content-between p-0 pb-1 m-0 border-bottom border-secondary">
                <h5 class="col-12 card-title m-1 px-0 sacola-item text-left sacola-resumo-texto">FORMA DE PAGAMENTO
                </h5>
            </div>
            <div class="row col-12 p-0 m-0 pt-3 pb-1">
                <span class="col-4 badge badge-secondary text-uppercase p-2">{{ $produto->pedido->formPagto }}</span>
            </div>
        </div>
        <div class="row col-12 pt-2 pb-2 m-0 mt-2 rounded sacola-resumo justify-content-center border border-secondary">
            <div
                class="row col-12 align-items-center justify-content-between p-0 pb-1 m-0 border-bottom border-secondary">
                <h5 class="col-12 card-title m-1 px-0 sacola-item text-left sacola-resumo-texto">PROGRESSO
                </h5>
            </div>
            <div class="row col-12 justify-content-center p-0 m-0 py-3 justify-content-center align-content-center">
                <a href="">
                    <span class="badge badge-pill badge-primary align-self-center p-2 text-uppercase">Análise</span>
                </a>
                <div class="m-0 p-0">--</div>
                <a href="">
                    <span class="badge badge-pill badge-warning bg-transparent text-secondary border-secondary border align-self-center p-2 text-uppercase">Pagamento</span>
                </a>
                <div class="m-0 p-0">--</div>
                <a href="">
                    <span class="badge badge-pill badge-secondary bg-transparent text-secondary border-secondary border align-self-center p-2 text-uppercase">Transporte</span>
                </a>
                <div class="m-0 p-0">--</div>
                <a href="">
                    <span class="badge badge-pill badge-secondary bg-transparent text-secondary border-secondary border align-self-center p-2 text-uppercase">Entregue</span>
                </a>
            </div>
        </div>
    </div>
</section>

@include('footer');
