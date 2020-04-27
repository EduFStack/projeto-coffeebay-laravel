<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sacolaModel extends Model
{
    //
    public $table = "sacola";
    public $primaryKey = "id";
    public $timestamp = true;
    public $guarded = [];

    public function user()
    {
        return $this->belongsTo("App\User");
    }

    public function produto()
    {
        return $this->belongsTo("App\produtosModel");
    }
}
