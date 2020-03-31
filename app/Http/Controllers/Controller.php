<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function login()
    {
        $title = "Coffee Bay - Home";

        return view('home', [
            'title' => $title
        ]);
    }

    public function produto()
    {
        $title = "Coffee Bay - Produto - Alterar";
        return view('produto',[
            'title' => $title
        ]);
    }
}