<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerCalculo extends Controller
{
    public function Calcular(Request $request) 
    {
        // Recebendo os valores do formulário
        $capital = $request->input('capital');
        $taxa = $request->input('taxa');
        $periodo = $request->input('periodo');
    
        // Convertendo a taxa para um valor decimal
        $juros = $taxa / 100;
    
        // Inicializando o array de dados
        $dados = array();
    
        // Calculando o valor para cada mês
        for ($i = 1; $i <= $periodo; $i++) {
            // Definindo o mês, o capital inicial e o capital atualizado
            $dados[$i]['mes'] = $i;
            $dados[$i]['capitalInicial'] = number_format($capital, 2, ',', '.');
            $capitalAtualizado = $capital * (1 + $juros); // Calculando o capital atualizado
            $dados[$i]['capitalAtualizado'] = number_format($capitalAtualizado, 2, ',', '.');
    
            // Atualizando o capital para o próximo mês
            $capital = $capitalAtualizado;
        }
    
        // Retornando a view com os dados
        return view('resposta', compact('dados'));
    }
     //
}
