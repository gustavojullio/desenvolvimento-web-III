<?php

namespace App\Http\Controllers;

use App\Models\Jogador;
use App\Models\Time;
use Illuminate\Http\Request;

class JogadorController extends Controller
{
    public function index(){
        $jogadores = Jogador::orderBy('nome', 'ASC')->with('time')->get();
        $dados = ['jogadores' => $jogadores];
        return view('jogador.index', $dados);
    }

    public function new(){
        $times = Time::orderBy('nome')->get();

        return view('jogador.new', ['times'=>$times]);
    }

    public function store(Request $request){
        $jogador = new Jogador();
        $jogador->nome = $request->nome;
        $jogador->posicao = $request->posicao;
        $jogador->idade = $request->idade;
        $jogador->times_id = $request->time;
        $jogador->save();

        return redirect('/jogador')->with('msg', 'Jogador cadastrado com sucesso!!');
    }

    public function destroy($id){
        Jogador::findOrFail($id)->delete();
        return redirect('/jogador')->with('msg', 'Jogador excluído com sucesso.');
     }
    
     public function edit($id){
        $jogador = Jogador::findOrFail($id);
        $times = Time::orderBy('nome')->get();

        return view('jogador.edit', ['jogador'=> $jogador,'times'=> $times]);
     }

     public function update(Request $request){
        $jogador = Jogador::findOrFail($request->id);

        $jogador->nome = $request->nome;
        $jogador->posicao = $request->posicao;
        $jogador->idade = $request->idade;
        $jogador->times_id = $request->time;
        $jogador->save();


        return redirect('/jogador')->with('msg', 'Jogador editado com sucesso.');
    }
}
