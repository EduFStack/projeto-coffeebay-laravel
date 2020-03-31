<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Sempre colocar o model no controller
use App\produtosModel;

class produtosController extends Controller
{   
    //
    public function listarProdutos()
    {
        $produtos = produtosModel::all();
               
        $title = "Coffee Bay - Produtos";

        return view('produtos', [
            'title' => $title, 'produtos' => $produtos
        ]);
    }

    public function listarProduto($nome,$id_produto)
    {
        $produto = produtosModel::find($id_produto);
        $title = "Coffee Bay - $nome";

        return view('produto',[
            'title' => $title, 'produto' => $produto
        ]);

    }
}
