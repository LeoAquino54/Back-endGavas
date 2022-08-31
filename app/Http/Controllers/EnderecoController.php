<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use Illuminate\Http\Request;

class EnderecoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Endereco::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Endereco::create([
            'Rua_Endereco' =>$request->Nome_Endereco,
            'Bairro_Endereco' =>$request->Bairro_Endereco,
            'Numero_Endereco' =>$request->Numero_Endereco,
            'Cod_UF_FK' =>$request->Cod_UF_FK,
            'Cod_Cidade_FK' =>$request->Cod_Cidade_FK,
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
        return Endereco::find("id",$id);
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
        Endereco::update([
            'Rua_Endereco' =>$request->Nome_Endereco,
            'Bairro_Endereco' =>$request->Bairro_Endereco,
            'Numero_Endereco' =>$request->Numero_Endereco,
            'Cod_UF_FK' =>$request->Cod_UF_FK,
            'Cod_Cidade_FK' =>$request->Cod_Cidade_FK,
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
        $Endereco=Endereco::find("id",$id);
        $Endereco->delete();
    }
}
