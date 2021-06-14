<?php

namespace App\Http\Controllers;

use App\Models\Citas;
use Illuminate\Http\Request;

class CitasController extends Controller
{
    public function index(){
        return view('citas.index');
    }
    
    public function create(){
        return view('citas.create');
    }

    public function store(Request $request){
        
        $Citas = new Citas();
        $Citas->cliente = $request->cliente;
        $Citas->telefono = $request->telefono;
        $Citas->email = $request->email;
        $Citas->fecha = $request->fecha;
        $Citas->descripcion = $request->descripcion;
        $Citas->save();

        return view('citas.index');
    }   
    
    public function show(){

    }
}
