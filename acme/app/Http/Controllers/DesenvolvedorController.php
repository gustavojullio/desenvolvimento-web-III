<?php

namespace App\Http\Controllers;

use App\Models\Desenvolvedor;
use App\Models\Equipe;
use Illuminate\Http\Request;

class DesenvolvedorController extends Controller
{
    public function index(){
        $desenvolvedores = Desenvolvedor::orderBy('nome', 'ASC')->get();
        $dados = ['desenvolvedores' => $desenvolvedores];
        return view('desenvolvedor.index', $dados);
    }

    public function add($id){
        $equipe = Equipe::findOrFail($id);

        return view('desenvolvedor.new', ['equipe' => $equipe]);
    }
    
    public function store(Request $request){
        $desenvolvedor = new Desenvolvedor();
        $desenvolvedor->nome = $request->nome;
        $desenvolvedor->linguagem = $request->linguagem;
        $desenvolvedor->equipes_id = $request->equipe;
        $desenvolvedor->save();

        $equipe = Equipe::findOrFail($request->equipe);
        $equipe->qt_membros = $equipe->qt_membros + 1;
        $equipe->save();



        return redirect('/');
    }
}
