@include('header');

<br>
<br>
<br>
<br>
<br>
<section class="container row col-12 m-0 p-0 pt-2 justify-content-center justify-content-lg-around">
    <div class="row col-lg-7 col-12 justify-content-center p-0 m-0">
        <div class="row col-lg-11 col-12 p-0 m-0 sacola-texto justify-content-center justify-content-lg-start">
            @php
            foreach ($statusPedidos as $statusPedido){
            $status = $statusPedido->status;
            }
            if($status == 1){
            $status = "Aguarda Análise";
            }elseif($status == 2){
            $status = "Aguarda Pagamento";
            }elseif($status == 3){
            $status = "Aguarda Entrega";
            }elseif($status == 4){
            $status = "Finalizado";
            }elseif($status == 5){
            $status = "Pedido Cancelado";
            }
            @endphp
            <h2 class="sacola-titulo p-0 m-0 mb-3">Produtos Pedidos</h2>
        </div>
        <div class="row col-12 justify-content-lg-center align-self-baseline p-0 m-0">
            <div class=" row col-lg-10 justify-content-center m-0 p-0 mb-4 border-bottom-0">
                @foreach ($produtos as $produto)
                <div class=" card index-card m-1" style="width: 11rem">
                    <img class="card-img-top" src="/{{ $produto->produto->imagem }}" alt="Imagem de capa do card">
                    <div class="card-body py-0 px-3 m-0">
                        <h5 class="m-0 pb-1 index-titulo-produto">{{ $produto->produto->nome }}</h5>
                        <p class="card-text mb-0">{{ $produto->produto->resumo }}</p>
                        <br>
                        <h5 class="m-0 p-0 index-intensidade-produto">Quantidade</h5>
                        <div class="row justify-content-center align-items-center">
                            <div class="border border-secondary rounded m-2 p-1" style="width: 4.5rem;">
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
    <div class=" col-lg-4 col-12 p-0 px-2 px-lg-5 m-0 align-items-center justify-content-center">
        <div class="row justify-content-center col-12 p-0 pb-3 m-0 sacola-texto">
            <h2 class="sacola-titulo p-0 m-0">Detalhes do Pedido </h2>
        </div>
        <div class="row col-12 py-2 m-0 rounded sacola-resumo justify-content-center border border-secondary">
            <div class="row col-12 align-items-center justify-content-between p-0 m-0">
                <h5 class="col-5 m-1 px-0 text-left sacola-resumo-texto font-weight-bold">Pedido: 00{{ $pedido }}
                </h5>
                <span class="shadow-sm col-6 badge badge-danger text-uppercase p-3">{{ $status }}</span>
            </div>
        </div>
        <div class="row col-12 py-2 m-0 mt-1 rounded sacola-resumo justify-content-center border border-secondary">
            <div
                class="row col-12 align-items-center justify-content-between p-0 pb-1 m-0 border-bottom border-secondary">
                <h5 class="col-8 m-1 px-0 text-left sacola-resumo-texto">PRODUTO</h5>
                <h5 class="col-2 m-1 px-0 text-center sacola-resumo-texto">Qtd</h5>
            </div>
            <div class="row col-12 align-items-center justify-content-between pt-2 p-0 m-0">
                @foreach ($produtos as $produto)
                <h5 class="col-8 m-0 mt-1 mx-1 px-0 text-left sacola-resumo-texto">
                    {{ $produto->produto->nome }}</h5>
                <h5 class="col-2 m-0 mt-1 mx-1 px-0 text-center sacola-resumo-texto">
                    {{ $produto->quantidade }}</h5>
                @endforeach
            </div>
            <div
                class="row col-12 align-items-center justify-content-between p-0 m-0 pt-2 mt-3 border-top border-secondary">
                <h5 class="col-8 m-1 px-0 text-left sacola-resumo-texto">TOTAL (sachês)</h5>
                <h5 class="col-2 m-1 px-0 text-center sacola-resumo-texto">{{ $total }}</h5>
            </div>
        </div>
        <div class="row col-12 py-2 m-0 mt-1 rounded sacola-resumo justify-content-center border border-secondary">
            <div
                class="row col-12 align-items-center justify-content-between p-0 pb-1 m-0 border-bottom border-secondary">
                <h5 class="col-8 m-1 px-0 text-left sacola-resumo-texto">FORMA DE PAGAMENTO</h5>
                <h5 class="col-2 text-center m-1 px-0 sacola-resumo-texto">Valor</h5>
            </div>
            <div class="row col-12 align-items-center justify-content-between pt-2 pb-1 p-0 m-0">
                <span class="col-4 badge badge-success text-uppercase p-2">{{ $produto->pedido->formPagto }}</span>
                <h5 class="m-1 px-0 text-right sacola-resumo-texto font-weight-bold">R$ 35,00</h5>
            </div>
        </div>
        @php
        foreach ($statusPedidos as $statusPedido){
        $status = $statusPedido->status;
        }
        if ($status == 1) {
        $check1 = $check2 = $check3 = $check4 = '';
        $disabledAnalise = '';
        $disabledPagamento = $disabledTransporte = $disabledFinalizado = 'disabled';
        $linkAnalise ='avancarStatusAdm';
        $linkPagamento = 'avancarStatusAdm';
        $linkTransporte = 'avancarStatusAdm';
        $linkEntregue = 'avancarStatusAdm';
        $analise = 'btn btn-secondary badge rounded-pill align-self-center m-0 mt-2 p-2 shadow-sm';
        $pagamento = 'badge badge-pill bg-transparent text-secondary border-secondary border align-self-center m-0 mt-2
        p-2';
        $transporte = 'badge badge-pill bg-transparent text-secondary border-secondary border align-self-center m-0 mt-2
        p-2';
        $entregue = 'badge badge-pill bg-transparent text-secondary border-secondary border align-self-center m-0 mt-2
        p-2';
        }elseif ($status == 2) {
        $check1 = 'img/Icons/check.svg';
        $check2 = $check3 = $check4 = '';
        $disabledTransporte = $disabledFinalizado = 'disabled'; 
        $disabledPagamento = $disabledAnalise = '';
        $linkAnalise = 'voltarStatusAdm';
        $linkPagamento = 'avancarStatusAdm';
        $linkTransporte = 'avancarStatusAdm';
        $linkEntregue = 'avancarStatusAdm';
        $analise = 'btn btn-primary badge rounded-pill align-self-center m-0 mt-2 p-2 shadow-sm';
        $pagamento = 'btn btn-secondary badge rounded-pill align-self-center m-0 mt-2 p-2 shadow-sm';
        $transporte = 'badge badge-pill bg-transparent text-secondary border-secondary border align-self-center m-0 mt-2
        p-2';
        $entregue = 'badge badge-pill bg-transparent text-secondary border-secondary border align-self-center m-0 mt-2
        p-2';
        }elseif ($status == 3) {
        $check1 = $check2 = 'img/Icons/check.svg';
        $check3 = $check4 = '';
        $disabledAnalise = $disabledFinalizado = 'disabled'; 
        $disabledPagamento = $disabledTransporte = '';
        $linkAnalise = 'avancarStatusAdm';
        $linkPagamento = 'voltarStatusAdm';
        $linkTransporte = 'avancarStatusAdm';
        $linkEntregue = 'avancarStatusAdm';
        $analise = 'badge badge-pill badge-primary align-self-center m-0 mt-2 p-2 shadow-sm border border-primary';
        $pagamento = 'btn btn-primary badge rounded-pill align-self-center m-0 mt-2 p-2 shadow-sm';
        $transporte = 'btn btn-secondary badge rounded-pill align-self-center m-0 mt-2 p-2 shadow-sm';
        $entregue = 'badge badge-pill bg-transparent text-secondary border-secondary border align-self-center m-0 mt-2
        p-2 shadow-sm';
        }elseif ($status == 4) {
        $check1 = $check2 = $check3 = $check4 ='img/Icons/check.svg';
        $disabledAnalise = $disabledPagamento = $disabledTransporte = 'disabled'; 
        $disabledFinalizado = '';
        $linkAnalise = 'avancarStatusAdm';
        $linkPagamento = 'avancarStatusAdm';
        $linkTransporte = 'avancarStatusAdm';
        $linkEntregue = 'voltarStatusAdm';
        $analise = 'badge badge-pill badge-primary align-self-center m-0 mt-2 p-2 shadow-sm border border-primary';
        $pagamento = 'badge badge-pill badge-primary align-self-center m-0 mt-2 p-2 shadow-sm border border-primary';
        $transporte = 'badge badge-pill badge-primary align-self-center m-0 mt-2 p-2 shadow-sm border border-primary';
        $entregue = 'btn btn-primary badge rounded-pill align-self-center m-0 mt-2 p-2 shadow-sm';
        }elseif ($status == 5) {
        $check1 = $check2 = $check3 = $check4 ='';
        $disabledAnalise = $disabledPagamento = $disabledTransporte = $disabledFinalizado = 'disabled';
        $linkAnalise = $linkPagamento = $linkTransporte = $linkEntregue = 'home';
        $analise = 'badge badge-pill bg-transparent text-secondary border-secondary border align-self-center m-0 mt-2
        p-2';
        $pagamento = 'badge badge-pill bg-transparent text-secondary border-secondary border align-self-center m-0 mt-2
        p-2';
        $transporte = 'badge badge-pill bg-transparent text-secondary border-secondary border align-self-center m-0 mt-2
        p-2';
        $entregue = 'badge badge-pill bg-transparent text-secondary border-secondary border align-self-center m-0 mt-2
        p-2';
        }
        @endphp
        <div class="row col-12 pt-2 pb-2 m-0 mt-1 rounded sacola-resumo justify-content-center border border-secondary">
            <div
                class="row col-12 align-items-center justify-content-between p-0 pb-1 m-0 border-bottom border-secondary">
                <h5 class="col-12 m-1 px-0 text-left sacola-resumo-texto">PROGRESSO
                </h5>
            </div>
            <div class="row col-12 justify-content-center p-0 m-0 py-2 justify-content-center align-content-center">
                <form action="{{ route($linkAnalise) }}" method="post">
                    @csrf
                    <div class="row p-0 m-0 justify-content-end">
                        <button class="{{ $analise }}" type='submit' {{ $disabledAnalise }}>Analise
                            <input type="hidden" name="pedido" value='{{ $pedido }}'>
                            <input type="hidden" name="status" value='{{ $status }}'>
                            <input type="hidden" name="idStatus" value='{{ $statusPedido->id }}'>
                        </button>
                        <img class="position-absolute align-self-start pedido-check p-0 m-0 ml-1 border rounded-circle border-white"
                            src="{{ asset($check1) }}" alt="">
                    </div>
                </form>
                <div class="col-auto align-self-center m-0 p-0 mt-2">--</div>
                <form action="{{ route($linkPagamento) }}" method="POST">
                    @csrf
                    <div class="row p-0 m-0 justify-content-end">
                        <button class="{{ $pagamento }}" type='submit' {{ $disabledPagamento }} >Pagamento
                            <input type="hidden" name="pedido" value='{{ $pedido }}'>
                            <input type="hidden" name="status" value='{{ $status }}'>
                            <input type="hidden" name="idStatus" value='{{ $statusPedido->id }}'>
                        </button>
                        <img class="position-absolute align-self-start pedido-check p-0 m-0 ml-1 border rounded-circle border-white"
                            src="{{ asset($check2) }}" alt="">
                    </div>
                </form>
                <div class="col-auto align-self-center m-0 p-0 mt-2">--</div>
                <form action="{{ route($linkTransporte) }}" method="post">
                    @csrf
                    <div class="row p-0 m-0 justify-content-end">
                        <button class="{{ $transporte }}" type='submit' {{ $disabledTransporte }} >Entrega
                            <input type="hidden" name="pedido" value='{{ $pedido }}'>
                            <input type="hidden" name="status" value='{{ $status }}'>
                            <input type="hidden" name="idStatus" value='{{ $statusPedido->id }}'>
                        </button>
                        <img class="position-absolute align-self-start pedido-check p-0 m-0 ml-1 border rounded-circle border-white"
                            src="{{ asset($check3) }}" alt="">
                    </div>
                </form>
                <div class="col-auto align-self-center m-0 p-0 mt-2">--</div>
                <form action="{{ route($linkEntregue) }}" method="post">
                    @csrf
                    <div class="row p-0 m-0 justify-content-end">
                        <button class="{{ $entregue }}" type='submit' {{ $disabledFinalizado }} >Finalizado
                            <input type="hidden" name="pedido" value='{{ $pedido }}'>
                            <input type="hidden" name="status" value='{{ $status }}'>
                            <input type="hidden" name="idStatus" value='{{ $statusPedido->id }}'>
                        </button>
                        <img class="position-absolute align-self-start pedido-check p-0 m-0 ml-1 border rounded-circle border-white"
                            src="{{ asset($check4) }}" alt="">
                    </div>
                </form>
            </div>       

            @if ($statusPedido->status <= 3 )
            <div class="row col-12 p-0 pt-3 pb-2 m-0 mt-3 justify-content-center align-items-center border-top border-secondary">
                <form action="{{ route('cancelarPedidoAdm') }}" method="Post">
                    @csrf
                    <button class="btn btn-outline-danger shadow-sm p-2 m-0" type='submit'>
                        <div class="row col-12 align-items-center m-0 p-0" >
                            <img class="col-auto sacola-icon bg-transparent m-0 mx-1 p-0" src="{{asset('img/Icons/lixo.svg')}}" alt="">
                            <h2 class="header-text col-auto pl-0 mb-0 text-capitalize">Cancelar Pedido</h2>
                            <input type="hidden" name="pedido" value='{{ $pedido }}'>
                            <input type="hidden" name="status" value='{{ $status }}'>
                            <input type="hidden" name="idStatus" value='{{ $statusPedido->id }}'>
                        </div>
                    </button>
                </form>
            </div>  
            @else
                
            @endif         
        </div>
    </div>
</section>

@include('footer');
