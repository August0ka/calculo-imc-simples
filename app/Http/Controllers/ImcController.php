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

        $imcResult = "";

        if($dados['peso'] > 0) {

            $imc = $dados['peso'] / ($dados['altura'] * $dados['altura']);

            if($imc < 18.5) {
            $imcResult = "Magreza";
            } elseif($imc >= 18.5 && $imc <= 24.9) {
                $imcResult = "Normal";
            } elseif($imc >= 25.0 && $imc <= 29.9) {
                $imcResult = "Sobrepeso";
            } elseif($imc >= 30.0 && $imc <= 39.9) {
                $imcResult = "Obesidade";
            } elseif($imc > 40.0) {
                $imcResult = "Obesidade grave";
            }
        }

        return view('calculaImc',['dados' => $dados], ['imcResult' => $imcResult]);
    }
}
