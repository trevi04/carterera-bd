<?php

namespace App\Http\Controllers;
use App\Models\Cine;
use App\Models\Pelicula;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $datos=Pelicula::all();
        //pagina inicio
        return view('index',compact('datos'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //formulario donde crean los datos
        return "Aqui puedes agregar";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Obtener los datos del formulario
        $idform = $request->input('idform');
        $entradas2 = $request->input('entradas2');
    
        // Imprimir los datos para verificar
        echo "ID Formulario: " . $idform . "<br>";
        echo "Entradas: " . $entradas2 . "<br>";
        
        // Llamar al procedimiento almacenado utilizando consultas SQL
         DB::statement('CALL Cine_ventas(?, ?)', array($idform, $entradas2));
        
        // Redirigir a la página de inicio u otra vista
        return redirect()->route("Cine.index")->with("Success", "El proceso de guardado se ha iniciado correctamente.");
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Cine $cine)
    {
        //serviira para obtener registros de la tabla 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cine $cine)
    {
        //sirve para traer datos que se van a editar y los coloca en un formulario
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cine $cine)
    {
        //este metodo actualiza los datos en la base de datos
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cine $cine)
    {
        //elimina un registro
    }
}