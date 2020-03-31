@include('header');

<br>
<br>
<br>
<br>
<br>
<br>
<section class="container-fluid row justify-content-center px-0 mx-0">
    <div class="index-hover row col-12 col-lg-11 justify-content-lg-end justify-content-center m-0 p-0">

        @forelse ($produtos as $produto)
        <div class="index-nhover card index-card mr-1 mt-1" style="width: 12.3rem">
        <a class="produtos-link" href="/produto/{{ $produto->nome }}/{{ $produto->id_produto }}">
                <img class="card-img-top" src="{{ $produto->imagem }}" alt="Imagem de capa do card">
                <div class="card-body pt-1 px-3">
                    <h5 class="card-title m-0 pb-1 index-titulo-produto">{{ $produto->nome }}</h5>
                    <p class="card-text mb-0">{{ $produto->resumo }}</p>
                    <br>
                    <h5 class="card-title m-0 pb-2 index-intensidade-produto">Intensidade</h5>
                    <div class="row justify-content-center align align-items-center">
                        <div class="border border-secondary m-0 p-1 " style="width: 1.4rem;">
                            <h3 class="index-intensidade2-produto m-0 p-0">{{ $produto->intensidade }}</h3>
                        </div>
                        @for ($i = 0; $i < $produto->intensidade; $i++)
                            <div class="bg-light border border-secondary ml-1 p-0"
                                style="width: 0.5rem; height: 0.5rem;">
                            </div>
                        @endfor
                        @for ($i = 0; $i < (12-$produto->intensidade); $i++)
                            <div class="border border-secondary ml-1 p-0" style="width: 0.5rem; height: 0.5rem;">
                            </div>
                        @endfor
                    </div>
                </div>
            </a>
        </div>
        @empty
        <h1>Não existe!</h1>
        @endforelse

    </div>
</section>

@include('footer');
