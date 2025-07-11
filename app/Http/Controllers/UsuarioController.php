<?php

namespace App\Http\Controllers;

use App\Models\Orden;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $usuario = Usuario::findOrFail($id);
        return response()->json($usuario);
    }

    public function showAndOrdenes()
    {
        //
        // $usuarios = Usuario::all();
        // return response()->json($usuarios);
        // $usuarios = Usuario::with([
        //     'Orden' => function($query) {
        //         $query->select('total');
        //     }
        // ]);

        // Usuarios y sus ordenes respectivas


        // $usuarios = Usuario::with('ordenes')->get();
        // return response()->json($usuarios);


        $usuarios = Orden::all();
        return response()->json($usuarios);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

    public function showAll() {
        // sacar a todos los ususarios
        /* $usuario = DB::table('usuarios')->get(); */

        // buscar a los usuarios cuyo atributo name sea igual a usuario
        /* $usuario = DB::table('usuarios')->where('name', 'usuario')->get(); */

        // buscar a los usuarios cuyo atributo name sea igual a usuario, pero que solo devuelva al primero
        /* $usuario = DB::table('usuarios')->where('name', 'usuario')->first(); */

        // buscar a los usuarios cuyo atributo name sea igual a usuario, que termine en algo, pero que solo devuelva al atributo name
        /* $usuario = DB::table('usuarios')->where('name', 'ilike', 'usuario%')->value('name'); */

        // buscar al usuario con id especifico
        // $usuario = DB::table('usuarios')->find(2);
        
        // devuelve la columna especifica
        // $usuario = DB::table('usuarios')->pluck('name');
        
        // devuelve la columna especifica
        // $usuario = DB::table('usuarios')->pluck('name');

        // se puede poner uns egundo nombre para acceder a estas tablas como llaves, n sirve
        // $usuario = DB::table('usuarios')->pluck('nombre', 'name');
        
        // se puede contar el numero de usuarios
        // $usuario = DB::table('usuarios')->count();

        // se puede contar el numero de maximo de una columna
        $usuario = DB::table('usuarios')->max('balance');


        return response()->json($usuario);
    }
}
