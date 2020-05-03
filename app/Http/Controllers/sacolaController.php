<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\sacolaModel;
use App\User;

class sacolaController extends Controller
{
    //
    protected function listarSacola()
    {

        $title = "Coffee Bay - Sacola";

        $sacola = sacolamodel::where('user_id','=',Auth::user()->id)->Where('status','=','Aberto')->get();
        $total = $sacola->sum('quantidade');
        $sacolaTotal = $sacola->count('id');

        if($sacolaTotal == 0){

            return redirect()->route('produtos');

        } else{

            return view('sacola', ['title' => $title,
            'sacola'=>$sacola,
            'total'=>$total,
            'sacolaTotal' =>$sacolaTotal
            ]); 
        }          
    }

    protected function listarProduto(Request $request)
    {
        $sacola = sacolamodel::where('user_id','=',Auth::user()->id)->Where('status','=','Aberto')->get();
        $sacolaTotal = $sacola->count('id');

        $produto = sacolaModel::find($request->id);

        $title = "Coffee Bay - $request->nome";

        return view('sacolaProduto', ['title' => $title,
            'produto' => $produto,
            'sacolaTotal' => $sacolaTotal
            ]);
    }

    protected function editarProduto(Request $request)
    {

        $produto = sacolaModel::find($request->id);
        $produto->quantidade = $request->quantidade;
        $produto->save();

        return redirect()->route('sacola');
    }

    protected function adicionarProduto(Request $request)
    {
        
        sacolaModel::create([
            'user_id' => Auth::user()->id,
            'produto_id' => $request->id,
            'quantidade' => $request->quantidade,
            'status' => 'Aberto'
        ]);

        return redirect()->route('produtos');
    }

    protected function removerProduto(Request $request)
    {
        $produto = sacolaModel::find($request->id);
        $produto->delete();

        return redirect()->route('sacola');

    }
}
