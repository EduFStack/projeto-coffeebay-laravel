@include('header');

<br>
<br>
<br>
<br>
<br>
<br>
<section class="container-fluid row justify-content-center p-0 m-0 ">
    <div class="row col-12 col-lg-11 justify-content-around align-items-center">
        <div class="col-lg-4 col-12 card border-0 produto-card m-0 p-0">
            <img class="card-img-top" src="/{{ $produto->imagem }}" alt="Imagem de capa do card">
        </div>
        <div class="row col-lg-4 col-12 text-center m-0 p-0 mb-4">
            <div class="col-12 produto-card m-0 p-0">
                <h1 class="card-text produto-titulo-produto">{{ $produto->nome }}</h1>
                <p class="card-text produto-descricao-produto">{{ $produto->descricao }}</p>
            </div>
        </div>
        {{-- <div class="row col-lg-auto col-0 border-right border-secondary m-0 p-0 "></div> --}}
        {{-- <div class="row col-3 align-items-center boder border-dark"> --}}
            {{-- <div class="row col-12 m-0 p-0 produto-card justify-content-center align-content-around">
                <div class="col-12 sacola-texto text-center">
                    <h2 class="sacola-titulo p-0 m-0">Adicionar na Sacola</h2>
                </div>
            </div> --}}
            <form class="row col-lg-3 col-12 justify-content-center" action="{{ route('sacola.add',['id'=>$produto->id]) }}" method="POST">
                @csrf
                <div class="form-group row align-items-center col-lg-10 col-12 p-0 m-0 mb-3">
                    <input type="number" class="form-control col-5" name="quantidade" placeholder="" min="5"
                        value="5">
                    <label class="text-white col-6 p-0 m-0 ml-2" for="quantidade">Quantidade</label>
                    
                </div>
                <button type="submit" class="btn btn-warning col-lg-10 col-12">
                    <div class="row align-items-center m-0 p-0 justify-content-center">
                        <h2 class="header-text col-auto p-0 m-0 mr-2">ADICIONAR NA</h2>
                        <img class="p-0 m-0" style="width: 2.2rem" src="{{asset('img/Icons/mercado.svg')}}">
                    </div>
                </button>
            </form>
        {{-- </div> --}}

    </div>
    
    
    
</section>

@include('footer');
