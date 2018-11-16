<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\PerfilModel as Perfil;
use Exception;

class PerfilController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws Exception
     */
    public function index()
    {
        try {
            /**
             * todo => Implementar lógica para mostrar Ativos e Inativos casa o perfil seja do adm(roger)
             * todo => Caso o perfil não seja de adm, executar o array comentado abaixo.
             */
            // Retorna todos os Tipos de Projetos que tem o status Ativo.
            $perfis = Perfil::orderBy('nome', 'asc')->get();

//            // Retorna todos os Tipos de Projetos que tem o status Ativo.
//            $perfil = Perfil::where('status', 'A')->orderBy('nome', 'asc')->get();

            return view('perfil.index', compact('perfis', $perfis));
        } catch (\Exception $e) {
            throw new Exception('Não foi possível trazer os dados dos Tipos de projetos !');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminfate\Http\Response
     */
    public function create()
    {
        return view('perfil.form');
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
        try {
//        dd($request);
            if (!empty($request['id_perfil'])) {
                try {
                    Perfil::find($request['id_perfil'])->update($request->input());
                    return redirect()->route('perfil.index');
                } catch (Exception $e) {
                    throw new exception('Não foi possível alterar o registro do Demandante ' . $request->nome . ' !');
                }
            }
            $perfis = new Perfil();
            $perfis->nome = $request->nome;
            $perfis->status = 'A';
            $perfis->save();

            return redirect()->route('perfil.index');
        } catch (Exception $e) {
            echo $e;die;
            throw new exception('Não foi possível salvar o Perfil' . $request->nome . ' !');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
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
        try {
            $perfis = Perfil::find($id);
            return view('perfil.edit', compact('perfis', $perfis));

        } catch (Exception $e) {
            throw new exception('Não foi possível recuperar os dados do perfil ' . $perfis->tx_nome . ' !');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
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
        try {
            $perfis = Perfil::find($id);
            $perfis->status = 'I';
            $perfis->save();
            return redirect()->route('perfil.index');
        } catch (Exception $e) {
            throw new exception('Não foi possível excluir o registro do Perfil ' . $perfis->tx_nome . ' !');
        }
    }
}
