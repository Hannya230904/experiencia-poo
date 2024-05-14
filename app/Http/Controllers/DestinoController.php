<?php

namespace App\Http\Controllers;

use App\Models\Destino;
use Illuminate\Http\Request;

class DestinoController extends Controller
{
    public function index(){
        $destinos = Destino::all();
        return view('destinos.index', ['destinos' => $destinos]);
    }
    
    public function crear(){
        return view('destinos.crear');
    }
    
    public function store(Request $request){
        $data = $request->validate([
        'nombre' => 'required',
        'descripcion' => 'required',
            
        ]);
        
        $nuevoDestino = Destino::crear($data);
        
        return redirect(route('destino.index'));
    }
    
    public function editar(Destino $destino){
        return view('destinos.editar', ['destino' => $destino]);
    }
    
    public function actualizar(Destino $destino, Request $request){
        $data = $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            
        ]);
        
        $destino->actualizar($data);
        
        return redirect(route('destino.index'))->with('success', 'Informacion de destino actualizada correctamente');
    }
    
    public function eliminar(Destino $destino){
        
        $destino->delete();
        return redirect(route('destino.index'))->with('success', 'Destino eliminado exitosamente');
    }
}
