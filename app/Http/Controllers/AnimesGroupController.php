<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class AnimesGroupController extends Controller
{
    // Listar registros
    public function read(){
        $registros = Anime::all();
        return view('animes/read', compact('registros'));
    }
    // Crear registros
    public function create(){
        return view('animes/create');
    }
    // Submit de crear
    public function store(Request $request){
        $request->validate([
            'nombre' => 'required',
            'capitulos' => 'required',
            'file_path' => 'required|image|mimes:jpeg,png,svg|max:1024',
        ]);

        $registro = $request->all();
        
        if($imagen=$request->file('file_path')){
            $rutaGuardarImg = 'imgs/';
            $imgRegistro = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imgRegistro);
            $registro['file_path'] = "$imgRegistro";
        }

        Anime::create($registro);

        return redirect()->route('animes');
    } 
    // Actualizar registros
    public function update(Anime $id){
        return view('animes/update', compact('id'));
    }
    // Mostrar registro
    public function show($id){
        $registro = Anime::find($id);
        return view('animes/show', compact('registro'));
    }

    public function submit(Request $request, Anime $id){

        $request->validate([
            'nombre' => 'required',
            'capitulos' => 'required',
            'file_path' => 'required|image|mimes:jpeg,png,svg|max:1024',
        ]);

        $registro = $request->all();
        
        if($imagen=$request->file('file_path')){
            $rutaGuardarImg = 'imgs/';
            $imgRegistro = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imgRegistro);
            $registro['file_path'] = "$imgRegistro";
        }

        $id->update($registro);

        return redirect()->route('animes');
    }

    public function destroy(Anime $id){
        $id->delete();

        return redirect()->route('animes');
    }
}
