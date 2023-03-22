<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImcController extends Controller
{
    public function calculoImc(Request $request) {
        $dados = [
            'nome' => $request -> input('Nome'),
            'peso' => $request -> input('Peso'),
            'altura' => $request -> input('Altura')
        ];

        $imc = $dados['peso'] / ($dados['altura'] * $dados['altura']);

        $resultadoImc = "";

        if($imc < 18.5) {
            $resultadoImc = "Magreza";
        } elseif($imc >= 18.5 && $imc <= 24.9) {
            $resultadoImc = "Normal";
        } elseif($imc >= 25.0 && $imc <= 29.9) {
            $resultadoImc = "Sobrepeso";
        } elseif($imc >= 30.0 && $imc <= 39.9) {
            $resultadoImc = "Obesidade";
        } elseif($imc > 40.0) {
            $resultadoImc = "Obesidade grave";
        }
        echo $resultadoImc;
        return view('calculaImc', $dados);
    }
}
