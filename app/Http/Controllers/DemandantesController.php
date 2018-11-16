<?php

namespace App\Http\Controllers;

use App\DemandantesModel as Demandantes;
use Illuminate\Http\Request;
use Exception;

class DemandantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws Exception
     */
    public function index()
    {
        try{
            /**
             * todo => Implementar lógica para mostrar Ativos e Inativos casa o perfil seja do adm(roger)
             * todo => Caso o perfil não seja de adm, executar o array comentado abaixo.
             */
            // Retorna todos os Tipos de Projetos que tem o status Ativo.
            $demandantes = Demandantes::orderBy('nome', 'asc')->get();

//            // Retorna todos os Tipos de Projetos que tem o status Ativo.
//            $demandantes = Demandantes::where('status', 'A')->orderBy('nome', 'asc')->get();

            return view('demandantes.index', compact('demandantes', $demandantes));
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
        return view('demandantes.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws Exception
     */
    public function store(Request $request)
    {
        try{

            if(!empty($request['id_demandante'])){
                try{
                    Demandantes::find($request['id_demandante'])->update($request->input());
                    return redirect()->route('demandantes.index');
                } catch(Exception $e){
                    throw new exception('Não foi possível alterar o registro do Demandante '.$request->nome.' !');
                }
            }
            $demandante = new Demandantes();
            $demandante->nome = $request->nome;
            $demandante->status = 'A';
            $demandante->save();

            return redirect()->route('demandantes.index');
        } catch (Exception $e ){
            echo $e;
            throw new exception('Não foi possível salvar o Demandantes'.$request->nome.' !');
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
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws Exception
     */
    public function edit($id)
    {
        try{
            $demandante = Demandantes::find($id);
            return view('demandantes.edit', compact('demandante', $demandante));

        } catch(Exception $e){
            throw new exception('Não foi possível recuperar os dados do demandantes '.$demandante->tx_nome.' !');
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
        // está sendo feito no store.
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws Exception
     */
    public function destroy($id)
    {
        try{
            $demandante = Demandantes::find($id);
            $demandante->status = 'I';
            $demandante->save();
            return redirect()->route('demandantes.index');
        } catch(Exception $e){
            throw new exception('Não foi possível excluir o registro do Demandantes '.$demandante->tx_nome.' !');
        }
    }
}
