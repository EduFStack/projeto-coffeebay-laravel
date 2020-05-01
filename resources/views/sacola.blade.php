@include('header');

<br>
<br>
<br>
<br>
<br>
<section class="container row col-12 m-0 p-0 pt-2 justify-content-center justify-content-lg-around">
    <div class="row col-lg-8 col-12 justify-content-center p-0 m-0">
        <div class="row col-lg-11 col-12 p-0 m-0 sacola-texto justify-content-center justify-content-lg-start">
            <h2 class="sacola-titulo p-0 m-0 mb-3">Minha Sacola</h2>
        </div>
        <div class="row col-12 justify-content-lg-center align-self-baseline p-0 m-0">
            <div class="index-hover row col-lg-10 justify-content-center justify-content-lg-start m-0 p-0 mb-4 border-bottom-0">
                @foreach ($sacola as $produto)

                <div class="index-nhover card index-card m-1 p-0" style="width: 11rem">
                    <a class="produtos-link" href="">
                        <img class="card-img-top" src="{{ $produto->produto->imagem }}" alt="Imagem de capa do card">
                        <div class="card-body pt-1 px-3">
                            <h5 class="card-title m-0 pb-1 index-titulo-produto">{{ $produto->produto->nome }}</h5>
                            <p class="card-text mb-0">{{ $produto->produto->resumo }}</p>
                            <br>
                            <h5 class="card-title m-0 pb-2 index-intensidade-produto">Quantidade</h5>
                            <div class="row justify-content-center align-items-center">
                                <div class="border border-secondary rounded m-0 p-1" style="width: 4.5rem;">
                                    <h3 class="sacola-qtd-produto m-0 p-0 bg-transparent">{{ $produto->quantidade }}
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="m-0 p-0" href="{{ route('sacola.delete',['id'=>$produto->id]) }}">
                        <div class="row sacola-nhover justify-content-center m-0 mb-2 p-0">
                            <button class="sacola-nhover btn btn-outline-danger col-5 border-danger p-1">
                                <img class="sacola-icon bg-transparent" src="{{asset('img/Icons/lixo.svg')}}" alt="">
                            </button>
                        </div>
                    </a>
                </div>

                @endforeach
                <div class="index-hover row justify-content-center m-1 p-0">
                    <div class="sacola-card-vazio card index-card m-0 p-0" style="width: 11rem">
                        <a class="row col-12 produtos-link p-0 m-0 justify-content-center align-content-center"
                            href="{{ route('produtos') }}">
                            <h5 class="col-12 card-title m-0 p-1 sacola-item">Adicione novos itens</h5>
                            <img class="col-6 sacola-icon-add p-3 m-4" src="{{asset('img/Icons/adicionar.svg')}}"
                                alt="">
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="row col-lg-auto col-0 border-right border-secondary m-0 p-0 "></div>
    <div class=" col-lg-3 col-12 p-0 px-2 px-lg-3 m-0 align-items-center justify-content-center">
        <div class="row justify-content-center col-12 p-0 pb-3 m-0 sacola-texto">
            <h2 class="sacola-titulo p-0 m-0">Resumo do Pedido</h2>
        </div>
        <div class="row col-12 py-2 m-0 rounded sacola-resumo justify-content-center border border-secondary">
            <div
                class="row col-12 align-items-center justify-content-between p-0 pb-1 m-0 border-bottom border-secondary">
                <h5 class="col-8 card-title m-1 px-0 sacola-item text-left sacola-resumo-texto">PRODUTO</h5>
                <h5 class="col-2 card-title m-1 px-0 sacola-item text-center sacola-resumo-texto">Qtd</h5>
            </div>
            <div class="row col-12 align-items-center justify-content-between pt-2 p-0 m-0">
                @foreach ($sacola as $produto)
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
            <div class="row col-12 btn-group btn-group-toggle justify-content-around p-0 m-0 pt-3"
                data-toggle="buttons">
                <button class="shadow btn btn-outline-dark col-5 m-0 mb-2 p-1 rounded active">
                    <input type="radio" name="options" id="option2" autocomplete="off">Transferência
                </button>
                <button class="shadow btn btn-outline-success col-5 m-0 mb-2 p-1 rounded">
                    <input type="radio" name="options" id="option3" autocomplete="off">Dinheiro
                </button>
            </div>
        </div>
        <div class="row col-12 p-0 py-2 m-0 mt-2 sacola-resumo justify-content-center bg-transparent">
            <a class="col-12 p-0 m-0" href="">
                <button type="button" class="btn btn-outline-warning col-12 p-3 m-0">FINALIZAR PEDIDO</button>
            </a>
            <a class="col-12 p-0 m-0" href="{{ route('produtos') }}">
                <button type="button" class="btn btn-outline-secondary col-12 p-1 m-0 mt-3">Continuar Comprando</button>
            </a>
        </div>
    </div>
</section>

@include('footer');
