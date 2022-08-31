<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Usuario::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Usuario::create([
            'Nome_Usuario' => $request->Nome_Usuario,
            'Cod_Contato_FK' => $request->Cod_Contato_FK,
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
        return Usuario::find("id", $id);
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
        Usuario::update([
            'Nome_Usuario' => $request->Nome_Usuario,
            'Cod_Contato_FK' => $request->Cod_Contato_FK,
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
        $Usuario = Usuario::find("id", $id);
        $Usuario->delete();
    }

    public function authenticate(Request $request)
    {
        $this->validate(
            $request,
            [
                'email' => 'required',
                'password' => 'required'
            ],
            [
                'email.required' => 'Email é obrigatorio',
                'password.required' => 'Senha é obrigatorio'
            ]
        );
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return ('Logado');
        } else {
            return ('E-mail ou senha invalida');
        }
    }
};
