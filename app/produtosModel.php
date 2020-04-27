<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produtosModel extends Model
{
    //
    public $table = "produtos";
    public $primaryKey = "id";
    public $timestamp = true;
    public $guarded = [];

    public function sacola()
    {
        return $this->hasMany("App\sacolaModel");
    }
}