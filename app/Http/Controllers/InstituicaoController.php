<?php

namespace App\Http\Controllers;

use App\Models\Instituicao;
use Illuminate\Http\Request;

class InstituicaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Instituicao::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Instituicao::create([
            'Nome_Instituicao' =>$request->Nome_Instituicao,
            'Cod_Endereco_FK' =>$request->Cod_Endereco_FK,
            'Cod_Contato_FK' =>$request->Cod_Contato_FK,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Instituicao::find("id",$id);
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
        Instituicao::update([
            'Nome_Instituicao' =>$request->Nome_Instituicao,
            'Cod_Endereco_FK' =>$request->Cod_Endereco_FK,
            'Cod_Contato_FK' =>$request->Cod_Contato_FK,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Instituicao=Instituicao::find("id",$id);
        $Instituicao->delete();
    }
}
