<?php

namespace App\Http\Controllers;

use App\Models\Imagens;
use Illuminate\Http\Request;

class ImagensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Imagens::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Imagens::create([
            'Imagens_Animais' =>$request->Imagens_Animais,
            'Imagens_Eventos' =>$request->Imagens_Eventos,
            'Imagens_Doacoes' =>$request->Imagens_Doacoes,

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
        return Imagens::find("id",$id);
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
        Imagens::update([
            'Imagens_Animais' =>$request->Imagens_Animais,
            'Imagens_Eventos' =>$request->Imagens_Eventos,
            'Imagens_Doacoes' =>$request->Imagens_Doacoes,

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
        $Imagens=Imagens::find("id",$id);
        $Imagens->delete();
    }
}
