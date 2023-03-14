<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\VarDumper\VarDumper;

class TesteController extends Controller
{
    public function testes(int $valor1, int $valor2 = 0)
    {
        $valores = [
            'var1'=>$valor1, 
            'var2'=>$valor2,
            'calculo'=>3
        ];
        return view('site.teste', ['valores'=>$valores]);
    }
}
