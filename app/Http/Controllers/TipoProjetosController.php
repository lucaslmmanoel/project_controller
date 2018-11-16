<?php

namespace App\Http\Controllers;

use App\TipoProjetoModel;
use Illuminate\Http\Request;
use App\TipoProjetoModel as TpProjeto;
use Exception;

class TipoProjetosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return view('tipo_projeto.index');
        try{
            // Retorna todos os Supervisores que tem o status Ativo.
            $tp_projetos = TpProjeto::where('status', 'A')->orderBy('nome', 'asc')->get();

            return view('tipo_projeto.index', compact('tp_projetos', $tp_projetos));
        } catch(\Exception $e){
            throw new Exception('Não foi possível trazer os dados dos Tipos de projetos !');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipo_projeto.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{

            if(!empty($request['id_tipo_projeto'])){
                try{
                    TpProjeto::find($request['id_tipo_projeto'])->update($request->input());
                    return redirect()->route('tipo_projeto.index');
                } catch(Exception $e){
                    throw new exception('Não foi possível alterar o registro do Tipo de Projoto '.$request->nome.' !');
                }
            }
            $tp_projeto = new TpProjeto;
            $tp_projeto->nome = $request->nome;
            $tp_projeto->desc = $request->desc;
            $tp_projeto->status = 'A';
            $tp_projeto->save();

            return redirect()->route('tipo_projeto.index');
        } catch (Exception $e ){
            echo $e;
            throw new exception('Não foi possível salvar o Tipo de Projeto'.$request->nome.' !');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try{
            $tp_projeto = TipoProjetoModel::find($id);
            return view('tipo_projeto.form', compact('tipo_projeto', $tp_projeto));

        } catch(Exception $e){
            throw new exception('Não foi possível recuperar os dados do tipo de projeto '.$tp_projeto->tx_nome.' !');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
