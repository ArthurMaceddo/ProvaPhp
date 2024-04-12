<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class SeniorController extends Controller
{  
    public function aumentarSalario(Request $request, string $nome, int $salario, int $numeroDeInscricao) {
        $horastrabalhadas = $request->query('horastrabalhadas');
    
        $senior = new Senior($nome, $salario, $numeroDeInscricao);
        return view('aumentarSalario')
            ->with('funcionario', $senior->mostrar($horastrabalhadas))
            ->with('salarioAumento',$senior->aumentarSalario($horastrabalhadas)); 
    }

public function mostrarInformacoes(Request $request,string $nome,int $salario,int $numeroDeInscricao) {
    $horastrabalhadas = $request->query('horastra$horastrabalhadas');

    $senior = new Senior($nome, $salario, $numeroDeInscricao);
    return view('telaInicialSenior')
        ->with('funcionario', $senior->mostrar($horastrabalhadas));
}

public function calcularImposto(Request $request,string $nome,int $salario,int $numeroDeInscricao) {
    $horastrabalhadas = $request->query('horastra$horastrabalhadas');

    $senior = new Senior($nome,$salario,$numeroDeInscricao);
    return view('seniorImposto')
   ->with('funcionario', $senior->mostrar($horastrabalhadas))
   ->with('impostos', $senior->calcularImposto($horastrabalhadas));
}
}