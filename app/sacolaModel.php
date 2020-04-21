<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sacolaModel extends Model
{
    //
    public $table = "sacola";
    public $primaryKey = "id_produto";
    public $timestamp = true;
    public $guarded = [];
}
