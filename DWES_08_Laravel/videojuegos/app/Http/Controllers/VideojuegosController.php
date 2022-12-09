<?php

namespace App\Http\Controllers;

use App\Models\Compania;
use Illuminate\Http\Request;
use Psy\Readline\Userland;
use App\Models\Videojuego;
use DB;


class VideojuegosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mensaje = "mostrando videojuegos";
        //Videojuego es el modal
        $videojuegos = Videojuego::all();
        return view('videojuegos/index', [
            "mensaje" => $mensaje,
            "videojuegos" => $videojuegos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //llamada a videojuegos
        $companias = Compania::all();
        return view(
            "videojuegos/create",
            [
                "companias" => $companias
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //el método STORE es como el INSERT
    public function store(Request $request)
    {
        //este método va a recibir la información de la bd y la va a insertar en la bd
        //el campo ->titulo debe coincidir con el de dataabase migration, y el del input con el name del formulario
        $videojuego = new Videojuego;
        $videojuego->titulo = $request->input("titulo");
        $videojuego->precio = $request->input("precio");
        $videojuego->pegi = $request->input("pegi");
        $videojuego->descripcion = $request->input("descripcion");
        $videojuego->compania_id = $request->input("compania_id");
        $videojuego->save(); //el save es como el insert en la bd

        return redirect("videojuegos");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //EL Métdoo SHOW es como el select
    public function show($id)
    {
        //recive el ide del videojuego y se lo enviamos como parámetro a videojuegos/show.blade.php
        $videojuego = Videojuego::find($id);
        return view("videojuegos/show", [
            "videojuego" => $videojuego
        ]);
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
        $videojuego = Videojuego::find($id);
        return view("videojuegos/edit", [
            "videojuego" => $videojuego
        ]);
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
        $videojuego = Videojuego::find($id);
        $videojuego->titulo = $request->input("titulo");
        $videojuego->precio = $request->input("precio");
        $videojuego->pegi = $request->input("pegi");
        $videojuego->descripcion = $request->input("descripcion");
        $videojuego->save();
        return redirect("videojuegos");
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
        DB::table("videojuegos")->where("id", "=", $id)->delete();
        return redirect("videojuegos");
    }
    /**
     * Busca los videojuegos que contengan la palabra introducida en el buscador
     * @param string $titulo
     * @return \Illuminate\Http\Response
     */
    //una request es una respuesta del formulario
    public function search(Request $request)
    {
        $titulo = $request->input("videojuegos");
        $videojuegos = DB::table('videojuegos')->where("titulo", "like", "%" . $titulo . "%")->get();
        return view("videojuegos/search", [
            "videojuegos" => $videojuegos
        ]);
    }
}
