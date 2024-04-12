<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class PlenoController extends Controller
{

    public function aumentarSalario(Request $request, string $nome, int $salario, int $numeroDeInscricao) {
        $horastrabalhadas = $request->query('horastrabalhadas');
    
        $pleno = new Pleno($nome, $salario, $numeroDeInscricao);
        return view('aumentaSalario')
            ->with('funcionario', $pleno->mostrar($horastrabalhadas))
            ->with('aumentarSalario',$pleno->aumentarSalario($horastrabalhadas)); 
    }
    
    public function mostrarInformacoes(Request $request,string $nome,int $salario,int $numeroDeInscricao) {
        $horastrabalhadas = $request->query('horastrabalhadas');
      
        $pleno = new Pleno($nome, $salario, $numeroDeInscricao);
        return view('funcionario')
            ->with('funcionario', $pleno->mostrar($horastrabalhadas));
    }

    public function calcularImposto(Request $request, string $nome, int $salario, int $numeroDeInscricao) {
        $horastrabalhadas = $request->query('horastrabalhadas');
    
        $pleno = new Pleno($nome, $salario, $numeroDeInscricao);
    
        return view('calcularImposto')
            ->with('funcionario', $pleno->mostrar($horastrabalhadas))
            ->with('impostos', $pleno->calcularImposto($horastrabalhadas));
    }
    
    
}
