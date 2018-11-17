<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProjetoModel as Projeto;
use Exception;

class ProjetoController extends Controller
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
            $projetos = Projeto::orderBy('nome', 'asc')->get();

//            // Retorna todos os Tipos de Projetos que tem o status Ativo.
//            $projeto = Projeto::where('status', 'A')->orderBy('nome', 'asc')->get();

            return view('projeto.index', compact('projetos', $projetos));
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
        return view('projeto.form');
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
            if (!empty($request['id_projeto'])) {
                try {
                    Projeto::find($request['id_projeto'])->update($request->input());
                    return redirect()->route('projeto.index');
                } catch (Exception $e) {
                    throw new exception('Não foi possível alterar o registro do Projeto ' . $request->nome . ' !');
                }
            }
            $projetos = new Projeto();
            $projetos->nome = $request->nome;
            $projetos->status = 'A';
            $projetos->save();

            return redirect()->route('projeto.index');
        } catch (Exception $e) {
            throw new exception('Não foi possível salvar o Projeto' . $request->nome . ' !');
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
            $projetos = Projeto::find($id);
            return view('projeto.edit', compact('perfis', $projetos));

        } catch (Exception $e) {
            throw new exception('Não foi possível recuperar os dados do projeto ' . $projetos->tx_nome . ' !');
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
            $projetos = Projeto::find($id);
            $projetos->status = 'I';
            $projetos->save();
            return redirect()->route('projeto.index');
        } catch (Exception $e) {
            throw new exception('Não foi possível excluir o registro do Projeto ' . $projetos->tx_nome . ' !');
        }
    }
}
