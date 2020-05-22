<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class status_pedidosModel extends Model
{
    //
    public $table = "status_pedidos";
    public $primaryKey = "id";
    public $timestamp = true;
    public $guarded = [];

    public function pedidos()
    {
        return $this->belongsTo('App\pedidosModel');
    }
}
