<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use Illuminate\Http\Request;

class EquipeController extends Controller
{
    public function index(){
        $equipes = Equipe::orderBy('nome', 'ASC')->with('desenvolvedores')->get();
        $dados = ['equipes' => $equipes];
        return view('equipe.index', $dados);
    }
}
