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
        
        return view('sacola', ['title' => $title,'sacola'=>$sacola,'total'=>$total]);            
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
