<?php

namespace App\Http\Controllers;

use App\Models\Time;
use Illuminate\Http\Request;

class TimeController extends Controller
{
    public function index(){
        $times = Time::orderBy('nome', 'ASC')->with('jogadores')->get();
        $dados = ['times' => $times];
        return view('time.index', $dados);
    }

    public function new(){
        return view('time.new');
    }

    public function store(Request $request){
        $time = new Time();
        $time->nome = $request->nome;
        $time->ano_fundacao = $request->ano_fundacao;
        $time->tecnico = $request->tecnico;
        $time->save();
        return redirect('/time')->with('msg', 'Time cadastrado com sucesso.');
    }

    public function destroy($id){
       Time::findOrFail($id)->delete();
       return redirect('/time')->with('msg', 'Time excluído com sucesso.');
    }

    public function edit($id){
        $time = Time::findOrFail($id);
        return view('time.edit', ['time'=> $time]);
     }

     public function update(Request $request){
        $time = Time::findOrFail($request->id);

        $time->nome = $request->nome;
        $time->ano_fundacao = $request->ano_fundacao;
        $time->tecnico = $request->tecnico;
        $time->save();


        return redirect('/time')->with('msg', 'Time editado com sucesso.');
    }
 


}
