<?php

namespace App\Http\Controllers;

use App\Aluno;
use App\AlunoProjeto;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function getAlunos(){
        $alunos = Aluno::all();
        return view('aluno/list', compact('alunos'));
    }
    /**Função para salvar o aluno */
    public function salvarAluno(Request $request){
        if($request->id_aluno){
            Aluno::find($request->id_aluno)->update($request->input());
        }else{
            Aluno::create($request->input());
        }
        return redirect()->route('aluno.list');
    }

    public function  relacionarProjeto($aluno, $projeto) {

        AlunoProjeto::create([
            'fk_aluno' => $aluno,
            'fk_projeto' => $projeto,
            'nu_nota' => rand(0, 9)
        ]);

    }
    /**Função para deletar o aluno */
    public function deletarAluno($id_aluno){
    
        Aluno::find($id_aluno)->delete();
        return redirect()->route('aluno.list');
        
    }

    public function form($id_aluno = null){
        $aluno = new Aluno();
            if ($id_aluno)
                $aluno = Aluno::find($id_aluno);
            return view('aluno/form', compact('aluno'));
    }
}
