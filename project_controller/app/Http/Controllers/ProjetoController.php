<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjetoController extends Controller
{
    //
    public function getProjetos(){
        $projetos = Projeto::all();
        return view('projeto/list', compact('projetos'));
    }
    /**Função para salvar o projeto */
    public function salvarProjeto(Request $request){
        if($request->id_projeto){
            Projeto::find($request->id_projeto)->update($request->input());
        }else{
            Projeto::create($request->input());
        }
        return redirect()->route('projeto.list');
    }
    /**Função para deletar o projeto */
    public function deletarProjeto($id_projeto){
    
        Projeto::find($id_projeto)->delete();
        return redirect()->route('projeto.list');
        
    }

    public function form($id_projeto = null){
        $projeto = new Projeto();
            if ($id_projeto)
                $projeto = Projeto::find($id_projeto);
            return view('projeto/form', compact('projeto'));
    }
}
