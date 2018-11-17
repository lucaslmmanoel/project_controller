<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CargoModel as Cargo;
use Exception;

class CargoController extends Controller
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
            $cargos = Cargo::orderBy('nome', 'asc')->get();

//            // Retorna todos os Tipos de Projetos que tem o status Ativo.
//            $cargos = Cargo::where('status', 'A')->orderBy('nome', 'asc')->get();

            return view('cargo.index', compact('cargos', $cargos));
        } catch(\Exception $e){
            throw new Exception('Não foi possível trazer os dados dos Cargos !');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cargo.form');
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
            if(!empty($request['id_cargo'])){
                try{
                    Cargo::find($request['id_cargo'])->update($request->input());
                    return redirect()->route('cargo.index');
                } catch(Exception $e){
                    throw new exception('Não foi possível alterar o registro do Cargo '.$request->nome.' !');
                }
            }
            $cargo = new Cargo();
            $cargo->nome = $request->nome;
            $cargo->desc = $request->desc;
            $cargo->status = 'A';
            $cargo->save();

            return redirect()->route('cargo.index');
        } catch (Exception $e ){
            echo $e;
            throw new exception('Não foi possível salvar o Cargo '.$request->nome.' !');
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
            $cargo = Cargo::find($id);
            return view('cargo.edit', compact('cargo', $cargo));

        } catch(Exception $e){
            throw new exception('Não foi possível recuperar os dados do cargo '.$cargo->tx_nome.' !');
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
            $cargo = Cargo::find($id);
            $cargo->status = 'I';
            $cargo->save();
            return redirect()->route('cargo.index');
        } catch(Exception $e){
            throw new exception('Não foi possível excluir o registro do Cargo'.$cargo->tx_nome.' !');
        }
    }
}
