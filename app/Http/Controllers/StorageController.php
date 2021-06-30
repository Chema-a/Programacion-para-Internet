<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class StorageController extends Controller
{
    /**
    * muestra el formulario para guardar archivos
    *
    * @return Response
    */
    public function index()
   {
      return view('files.new');
   }
   public function store(Request $request)
   {
             //obtenemos el campo file definido en el formulario
             $file = $request->file('file');

             //obtenemos el nombre del archivo
             $nombre = $file->getClientOriginalName();
      
             //indicamos que queremos guardar un nuevo archivo en el disco local
             Storage::disk('local')->put($nombre,File::get($file));
      
             return "archivo guardado";
   }
}
