<?php

namespace App\Http\Controllers;

use App\Models\Archivo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;
use App\Models\Homework;

class ArchivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $archivos = Archivo::all();
        return view('archivos.archivoIndex', compact('archivos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('archivos.archivoForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = Auth::user()->student;

        if($request->hasFile('archivo') && $request->file('archivo')->isValid()){
            $path = $request->archivo->store('documentos');
            $archivo = new Archivo;
            $archivo->path = $path;
            $archivo->homework_id = $request->homework_id;
            $archivo->student_id = $student->id;
            $archivo->name = $request->archivo->getClientOriginalName();
            $archivo->mime = $request->archivo->getMimeType();
            $archivo->save();
            $student->archivos()->save(Archivo::findorfail($archivo->id));
            $homework = Homework::findorfail($request->homework_id);
            $homework->archivos()->save(Archivo::findorfail($archivo->id));
         }
        return redirect()->route('homework.show', [$homework->subject, $homework]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Archivo  $archivo
     * @return \Illuminate\Http\Response
     */
    public function show(Archivo $archivo)
    {
        return Storage::download($archivo->path ,$archivo->name, ['Content-Type' => $archivo->mime]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Archivo  $archivo
     * @return \Illuminate\Http\Response
     */
    public function edit(Archivo $archivo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Archivo  $archivo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Archivo $archivo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Archivo  $archivo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Archivo $archivo)
    {
        //
    }
}
