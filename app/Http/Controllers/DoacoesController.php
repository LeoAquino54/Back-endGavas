<?php

namespace App\Http\Controllers;

use App\Models\Doacoes;
use Illuminate\Http\Request;

class DoacoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Doacoes::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Doacoes::create([
            'Nome_Doacoes' =>$request->Nome_Doacoes,
            'Valor_Doacoes' =>$request->Valor_Doacoes,
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
        return Doacoes::find("id",$id);
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
        Doacoes::update([
            'Nome_Doacoes'   =>$request->Nome_Doacoes,
            'Valor_Doacoes' =>$request->Valor_Doacoes,
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
        $Doacoes=Doacoes::find("id",$id);
        $Doacoes->delete();
    }
}
