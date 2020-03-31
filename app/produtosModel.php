<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produtosModel extends Model
{
    //
    public $table = "produtos";
    public $primaryKey = "id_produto";
    public $timestamp = false;
    public $guarded = [];
}