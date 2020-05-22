<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\pedidosModel;
use App\sacolaModel;
use App\status_pedidosModel;

class pedidosController extends Controller
{
    //
    protected function listarPedidos()
    {
        $title = "Coffee Bay - Meus Pedidos";

        $sacola = sacolaModel::where('user_id','=',Auth::user()->id)->Where('status','=','Aberto')->get();
        $sacolaTotal = $sacola->count('id');

        $produtos = sacolaModel::where('user_id','=',Auth::user()->id)->Where('status','=','fechado')->get();
        $pedidos = pedidosModel::where('user_id','=',Auth::user()->id)->orderBy('id','desc')->get();
        $status = '';
        $border = '';
    
        return view('pedidos', ['title' => $title,
            'sacola'=>$sacola,
            'pedidos'=>$pedidos,
            'produtos'=>$produtos,
            'status'=>$status,
            'border'=>$border,
            'sacolaTotal' =>$sacolaTotal
        ]); 
    }

    protected function adicionarPedido(Request $request)
    {
        pedidosModel::create([
            'user_id' => Auth::user()->id,
            'formPagto' => $request->option,
            'statusPedido' => 1
        ]);

        $id_pedido = pedidosModel::where('user_id','=',Auth::user()->id)->max('id');

        status_pedidosModel::create([
            'pedido_id' => $id_pedido,
            'status' => 1
        ]);

        sacolamodel::where('user_id','=',Auth::user()->id)->Where('status','=','Aberto')->update(
            ['pedido_id' =>$id_pedido,
            'status' => 'Fechado']
        );

        return redirect()->route('home');
    }

    protected function listarPedido($id)
    {
        $title = "Coffee Bay - Meus Pedidos";

        $sacola = sacolaModel::where('user_id','=',Auth::user()->id)->Where('status','=','Aberto')->get();
        $sacolaTotal = $sacola->count('id');

        $produtos = sacolaModel::where('user_id','=',Auth::user()->id)->Where('pedido_id','=',$id)->get();
        $total = $produtos->sum('quantidade');
        $statusPedidos = status_pedidosModel::Where('pedido_id','=',$id)->orderBy('status','asc')->get();

        // dd($statusPedidos);
        
        return view('pedido', ['title' => $title,
            'pedido' => $id,
            'sacola'=>$sacola,
            'total'=>$total,
            'produtos'=>$produtos,
            'sacolaTotal' =>$sacolaTotal,
            'statusPedidos' =>$statusPedidos
        ]);
    }


}
