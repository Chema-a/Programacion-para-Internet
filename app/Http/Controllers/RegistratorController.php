<?php

namespace App\Http\Controllers;
use App\Models\Registrator;
use Illuminate\Support\Facades\Mail;
use App\Mail\CodeGenerator;
use Illuminate\Http\Request;

class RegistratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registrators = Registrator::get();

        return view('registrator.indexRegistrator', compact('registrators'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registrator.formRegistrator');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $new = new Registrator($data);
        Mail::to($request->email)->send(new CodeGenerator($new));
        $request =  Registrator::create($request->all());
        return redirect()->route('registrator.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registrator  $registrator
     * @return \Illuminate\Http\Response
     */
    public function show(Registrator $registrator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registrator  $registrator
     * @return \Illuminate\Http\Response
     */
    public function edit(Registrator $registrator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registrator  $registrator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registrator $registrator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registrator  $registrator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registrator $registrator)
    {
        //
    }
}
