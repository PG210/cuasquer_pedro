<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Editoriales;

class Editorial extends Controller
{
    public function lista_edit(){
        $edit=DB::table('editorial')
        ->get();
        return view('editoral.editoriales', ['edit'=>$edit]);
    } 
    public function formulario()
    { 
        $editor=DB::table('editorial')
        ->get();
       return view('editoral.editForm', ['editor'=>$editor]);
    } 
    public function regis(Request $request)
    {
        // Registro de un producto en la base de datos a traves del Modelo
        $category = new Editoriales();
        $category->nombre = $request->input('nombre');
        $category->direccion = $request->input('dir');
        $category->ciudad = $request->input('ciu');
        $category->telefono = $request->input('tel');
        $category->save();
        return redirect()->route('listaEdit');
    } 
}
