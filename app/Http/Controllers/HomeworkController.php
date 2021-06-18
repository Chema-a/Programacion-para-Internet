<?php

namespace App\Http\Controllers;

use App\Models\Homework;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Subject $subject)
    {
        $homeworks = $subject->homework();
        dd($homeworks);

    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create(Subject $subject)
    { 
        return view('homework.formHomework', compact('subject'));
    }

    /**
     * Store a newly created resource in storage.
     * @param int $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request= Homework::create($request->all());
        return redirect()->route('subject.show', $request->subject);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Homework  $homework
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject, Homework $homework)
    {
        return view('homework.showHomework', compact('homework'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Homework  $homework
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject, Homework $homework)
    {
        
        return view('homework.formHomework', compact('homework'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Homework  $homework
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  Homework $homework)
    {

        Homework::where('id', $homework->id)->update($request->except('_token', '_method'));
        return redirect()->route('subject.show', $homework->subject);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Homework  $homework
     * @return \Illuminate\Http\Response
     */
    public function destroy(Homework $homework)
    {
        $homework -> delete();
        return redirect()->route('subject.show', $homework->subject);
    }
    

}
