<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function testes(int $var1, int $var2 = 0)
    {
        echo "Valor da soma de $var1 + $var2 é: " . $var1 + $var2;
    }
}
