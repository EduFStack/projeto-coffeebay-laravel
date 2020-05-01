@include('header');

<br>
<br>
<br>
<br>
<br>
<section class="container-fluid row justify-content-center p-2 m-0 ">
    <div class="row col-12 col-lg-11 justify-content-around align-items-center p-0 m-0">
        <div class="col-lg-5 col-12 card border-0 produto-card m-0 p-0">
            <img class="card-img-top m-0 p-0" src="/{{ $produto->imagem }}" alt="Imagem de capa do card">
        </div>
        <div class="row col-lg-5 col-12 m-0 p-0 justify-content-center justify-content-lg-start">
            <div class="col-12 col-lg-11 produto-card m-0 p-0">
                <h1 class="col-lg-8 col-12 card-text produto-titulo-produto text-lg-left text-center p-0 m-0 pb-2">{{ $produto->nome }}</h1>
                <p class="card-text produto-descricao-produto text-lg-left">{{ $produto->descricao }}</p>
            </div>
            <div class="row col-lg-11 col-12 p-0 m-0 pt-3 pb-1 justify-content-lg-end">
                <h5 class="card-title m-0 p-0 index-intensidade-produto">Intensidade</h5>
            </div>
            <div class="row col-lg-11 col-12 align-items-center p-0 m-0 justify-content-lg-end">
                <div class="border border-secondary m-0 p-1" style="width: 1.4rem;">
                    <h3 class="bg-transparent index-intensidade2-produto m-0 p-0">{{ $produto->intensidade }}</h3>
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
            
            <div class="col-12 m-0 p-0 pt-3">
                <form class="mt-4"
                    action="{{ route('sacola.add',['id'=>$produto->id]) }}" method="POST">
                    @csrf
                    <div class="form-group row align-items-center col-lg-6 col-12 p-0 m-0 mb-2">
                        <input type="number" class="text-white border border-dark form-control col-4 bg-transparent m-0 p-1 sacola-qtd-produto" 
                            name="quantidade" placeholder="Qtd" min="5" required>
                        {{-- <label class="text-secondary col-5 p-0 m-0 ml-2" for="quantidade"></label> --}}
                    </div>
                    <button type="submit" class="btn btn-primary col-lg-6 col-12 mb-1 p-3 border border-info">
                        <div class="row align-items-center m-0 p-0 justify-content-center">
                            <h2 class="header-text col-auto p-0 m-0 text-center">COLOCAR NA SACOLA</h2>
                            {{-- <img class="p-1 m-0" style="width: 2.2rem" src="{{asset('img/Icons/mercado.svg')}}"> --}}
                        </div>
                    </button>
                    {{-- <button type="submit" class="btn btn-outline-light col-lg-6 col-12 p-0">
                        <div class="row align-items-center m-0 p-1 justify-content-center">
                            <h2 class="header-text col-auto p-0 m-0 m-0">Adicionar na Sacola</h2>
                            <img class="col-auto p-1 mx-2" style="width: 1.8rem" src="{{asset('img/Icons/mercado.svg')}}">
                        </div>
                    </button> --}}
                </form>
            </div>
        </div>
        {{-- <div class="row col-lg-auto col-0 border-right border-secondary m-0 p-0 "></div> --}}
        {{-- <div class="row col-3 align-items-center boder border-dark"> --}}
        {{-- <div class="row col-12 m-0 p-0 produto-card justify-content-center align-content-around">
                <div class="col-12 sacola-texto text-center">
                    <h2 class="sacola-titulo p-0 m-0">Adicionar na Sacola</h2>
                </div>
            </div> --}}

        {{-- </div> --}}

    </div>



</section>

@include('footer');
