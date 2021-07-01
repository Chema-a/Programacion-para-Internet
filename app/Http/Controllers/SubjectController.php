<?php

namespace App\Http\Controllers;

use App\Models\Homework;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->type == "1")
        {
            $student = Student::findorfail(auth()->user()->student['id']);
            $subjects = Subject::whereHas('students', function($query) use ($student) {
                $query->where('id','like', [$student->id]
            );
              })->get();
        }
        elseif(auth()->user()->type == "2")
        {
            $teacher = Teacher::findorfail(auth()->user()->teacher['id']);
            $subjects = Subject::whereHas('teachers', function($query) use ($teacher) {
                $query->where('id','like', [$teacher->id]);
              })->get();
            
        }
        else{
        $subjects = Subject::get();
    }
        return view('subject.indexSubject', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Subject $subject)
    {
        return view('subject.formSubject');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required','string', 'max:255'],
            'available_places' => ['required','integer', 'min:1']
        ]);

        $subject =  Subject::create($request->all());
        return redirect()->route('subject.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        $teachers = Teacher::get();
        $homeworks = $subject->homework()->get(); 
        return view('subject.showSubject', compact('subject','teachers','homeworks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject)
    {
        return view('subject.formSubject', compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subject $subject)
    {
        $request->validate([
            'name' => ['required','string', 'max:255'],
            'available_places' => ['required','integer', 'min:1']
        ]);
        Subject::where('id', $subject->id)->update($request->except('_token', '_method'));
        return redirect()->route('subject.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $subject)
    {
        $subject -> delete();
        return redirect()->route('subject.index');
    }
        /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function addTeacher(Request $request, Subject $subject) 
    {   
        $subject->teachers() ->sync($request->teacher_id);
        return redirect()->route('subject.show', $subject);
    }

    public function addHomework(Subject $subject)
    {
        #dd($subject);
        return view('homework.formHomework', compact('subject'));
    }
    public function viewHomework(Request $request, Subject $subject, Homework $homework)
    {
        #dd($subject);
        return view('homework.show', compact('homework'));
    }
    public function updateHomework(Request $request,Homework $homework)
    {

        return view('homework.formHomework', compact('homework'));
    }
    public function addStudent(Request $request)
    { 

        $user = Auth::user();
        $subject = Subject::findorfail($request->subject);
        Subject::where('id', $request->subject)->update(['available_places' => $subject->available_places- 1]);

        $student = $user->student;
        $student->subjects()->attach($request->subject);
        return redirect()->route('subject.index');
    }


}
