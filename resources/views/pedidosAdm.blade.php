@include('header');

<br>
<br>
<br>
<br>
<br>
<section class="container row col-12 p-0 pt-2 m-0 justify-content-center">
    <div class="row col-11 p-0 m-0 sacola-texto justify-content-center justify-content-lg-start">
        <h2 class="sacola-titulo p-0 m-0 mb-2">Gerenciar Pedidos</h2>
    </div>
    <div class="index-hover row col-lg-8 col-auto m-0 p-0 mt-2 justify-content-center justify-content-lg-start">
        @forelse ($pedidos as $pedido)
        @php
        if ($pedido->statusPedido == 1){
        $status = 'Análise';
        $border = 'pedido-border1';
        $badge = 'badge-secondary badge p-2 text-uppercase bg-transparent border border-secondary';

        }elseif($pedido->statusPedido == 2){
        $status = 'Pagamento';
        $border = 'pedido-border2';
        $badge = 'text-white badge p-2 text-uppercase bg-transparent border border-warning';

        }elseif($pedido->statusPedido == 3){
        $status = 'Entrega';
        $border = 'pedido-border3';
        $badge = 'badge-success badge p-2 text-uppercase bg-transparent border border-success';

        }elseif($pedido->statusPedido == 4){
        $status = 'Finalizado';
        $border = 'pedido-border4';
        $badge = 'badge-primary badge p-2 text-uppercase bg-primary';

        }elseif($pedido->statusPedido == 5){
        $status = 'Cancelado';
        $border = 'pedido-border5';
        $badge = 'badge-danger badge p-2 text-uppercase bg-danger';
        }
        @endphp
        <div class="index-nhover card index-card m-2 justify-content-center align-content-center">
            <a class="row produtos-link m-0 py-2 p-0 card-body justify-content-center {{ $border }}"
                href="/PedidoAdm/{{ $pedido->id }}">
                <div class="col-10 row m-0 mb-1 justify-content-around">
                    <h5 class="card-title p-0 m-0 index-titulo-pedido">Pedido:</h5>
                    <h5 class="card-title p-0 m-0 index-titulo-pedido text-white">00{{ $pedido->id }}</h5>
                </div>
                <div class="row col-11 p-0 m-2 justify-content-center align-self-center">
                    @foreach ($produtos as $produto)
                    @if ($produto->pedido_id == $pedido->id)
                    <img class="col-4 img-fluid p-0 m-0" src="{{ $produto->produto->imagem }}"
                        alt="Imagem de capa do card">
                    @endif
                    @endforeach
                </div>
                <div class="col-12 row m-0 mb-2 justify-content-around">
                    <h5 class="card-title p-0 m-0 index-titulo-pedido">User:</h5>
                    <h5 class="card-title p-0 m-0 index-titulo-pedido text-white">{{ $pedido->user->name }}</h5>
                </div>
                <div class="col-12 row m-0 my-2 justify-content-center">
                    <span class="col-12 {{ $badge }}">{{ $status }}</span>
                </div>
            </a>
        </div>
        @empty
        <h1 class="text-left">Não Existem Pedidos!</h1>
        @endforelse
    </div>
</section>

@include('footer');
