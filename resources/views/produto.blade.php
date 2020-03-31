@include('header');

<br>
<br>
<br>
<br>
<br>
<br>
<section class="container">
    <div class="row justify-content-around produto-card">
        <div class="card border-0 produto-card" style="width: 25rem;">
        <img class="card-img-top" src="/{{ $produto->imagem }}" alt="Imagem de capa do card">
        </div>
        <div class="card border-0 text-center" style="width: 25rem;">
            <div class="card-body produto-card">
            <h1 class="card-text produto-titulo-produto">{{ $produto->nome }}</h1>
            <p class="card-text produto-descricao-produto">{{ $produto->descricao }}</p>
                <div class="form-group">
                    <label for="quantidade"></label>
                    <input type="number" class="form-control" id="quantidade" placeholder="Quantidade">
                </div>
                <button type="button" class="btn btn-warning col-12">
                    <div class="row align-items-center justify-content-around m-0 p-0 col-lg-auto">
                      <img class="header-icon col-lg-auto col-auto pl-0" src="{{asset('img/Icons/shopping-cart.svg')}}">
                      <h2 class="header-text col-lg-auto col-auto pl-0 mb-0">ADICIONAR NO CARRINHO</h2>
                    </div>
                </button>
            </div>
        </div>
    </div>
</section>

@include('footer');
