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

        if(sacolaModel::find($id) == null){
            return redirect()->route('produtos');

        }else{
            $produtos = sacolaModel::where('user_id','=',Auth::user()->id)->Where('pedido_id','=',$id)->get();
            $total = $produtos->sum('quantidade');
            $statusPedidos = status_pedidosModel::Where('pedido_id','=',$id)->orderBy('status','asc')->get();
        }
        

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

    protected function listarPedidosAdm()
    {
        $title = "Coffee Bay - Todos Pedidos";

        $sacola = sacolaModel::where('user_id','=',Auth::user()->id)->Where('status','=','Aberto')->get();
        $sacolaTotal = $sacola->count('id');

        $produtos = sacolaModel::Where('status','=','fechado')->get();
        $pedidos = pedidosModel::orderBy('id','desc')->get();
        // dd($pedidos);
        $status = '';
        $border = '';
    
        return view('pedidosAdm', ['title' => $title,
            'sacola'=>$sacola,
            'pedidos'=>$pedidos,
            'produtos'=>$produtos,
            'status'=>$status,
            'border'=>$border,
            'sacolaTotal' =>$sacolaTotal
        ]); 
    }

    protected function listarPedidoAdm($id)
    {
        $title = "Coffee Bay - Pedido Adm";

        $sacola = sacolaModel::where('user_id','=',Auth::user()->id)->Where('status','=','Aberto')->get();
        $sacolaTotal = $sacola->count('id');

        if(pedidosModel::find($id) == null){
            return redirect()->route('pedidosAdm');

        }else{

            $produtos = sacolaModel::Where('pedido_id','=',$id)->get();
            $total = $produtos->sum('quantidade');
            $statusPedidos = status_pedidosModel::Where('pedido_id','=',$id)->orderBy('status','asc')->get();
        
        }
        
        return view('pedidoAdm', ['title' => $title,
            'pedido' => $id,
            'sacola'=>$sacola,
            'total'=>$total,
            'produtos'=>$produtos,
            'sacolaTotal' =>$sacolaTotal,
            'statusPedidos' =>$statusPedidos
        ]);
    }

    protected function avancarStatusAdm(Request $request)
    {

        if(pedidosModel::find($request->pedido) == null){
            return redirect()->route('pedidosAdm');

        }else{

            status_pedidosModel::create([
                'pedido_id' => $request->pedido,
                'status' => $request->status + 1,
            ]);
            
            $newStatus = status_pedidosModel::Where('pedido_id','=',$request->pedido)->max('status');

            $status = pedidosModel::find($request->pedido);
            $status->statusPedido = $newStatus;
            $status->save();

        }
        
        return redirect()->route('pedidoAdm',$request->pedido);
    }

    protected function voltarStatusAdm(Request $request)
    {
        if(pedidosModel::find($request->pedido) == null){
            return redirect()->route('pedidosAdm');

        }else{

            $status = status_pedidosModel::find($request->idStatus);
            $status->delete();

            $newStatus = status_pedidosModel::Where('pedido_id','=',$request->pedido)->max('status');

            $status = pedidosModel::find($request->pedido);
            $status->statusPedido = $newStatus;
            $status->save();

        }
        
        return redirect()->route('pedidoAdm',$request->pedido);
    }

    protected function cancelarPedidoAdm(Request $request)
    {
        if(pedidosModel::find($request->pedido) == null){
            return redirect()->route('pedidosAdm');

        }else{

            status_pedidosModel::create([
                'pedido_id' => $request->pedido,
                'status' => 5,
            ]);
            
            $newStatus = status_pedidosModel::Where('pedido_id','=',$request->pedido)->max('status');

            $status = pedidosModel::find($request->pedido);
            $status->statusPedido = $newStatus;
            $status->save();

        }
        
        return redirect()->route('pedidoAdm',$request->pedido);
    }
}
