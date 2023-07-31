<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        
        $nome = "Diogo";
        $idade = 24;
    
        $arr = [1,2,3,4,5];
    
        $nomes = ["Diogo", "Maria", "João", "Saulo"];
    
        return view('welcome', 
            [
                'nome' => $nome,
                'idade' => $idade, 
                'profissao' => 'programador',
                'arr' => $arr,
                'nomes' => $nomes
            ]);
    }

    public function create() {
        return view('events.create');
    }

    public function entrar() {
        return view('events.entrar');
    }

    public function cadastrar() {
        return view('events.cadastrar');
    }
}
