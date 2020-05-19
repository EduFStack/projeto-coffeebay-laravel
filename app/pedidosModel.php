<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pedidosModel extends Model
{
    //
    public $table = "pedidos";
    public $primaryKey = "id";
    public $timestamp = true;
    public $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function sacola()
    {
        return $this->hasMany('App\sacolaModel');
    }

    public function produtoPedido()
    {
        return $this->hasMany('App\produtosModel');
    }

}
