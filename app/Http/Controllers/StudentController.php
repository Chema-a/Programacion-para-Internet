<?php

namespace App\Http\Controllers;
use App\Models\Subject;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {

        $students = Student::get();
        return view('student.indexStudent', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('student.formStudent');
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
            'birthday' => ['required','date'],
            'condition' => ['required','string', 'max:255']
        ]);

        $user = Auth::user();
        $student =  Student::create([
            'birthday' => $request->birthday,
            'condition'=> $request->condition,
            'user_id' => $user->id
        ]);
        $user->student() ->save(Student::findorfail($student->id));
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response    
     */
    public function show(Student $student)
    {
        return view('student.showStudent', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('student.formStudent', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student, Subject $subject)
    {
        $request->validate([
            'birthday' => ['required','date'],
            'condition' => ['required','string', 'max:255']
        ]);
        Student::where('id', $student->id)->update($request->except('_token', '_method'));
        return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student -> delete();
        return redirect()->route('student.index');
    }

    public function viewSubject()
    {
        $user = Auth::user();
        $student = $user->student;

        $subjects = Subject::where('available_places','>','0')
        ->whereDoesntHave('students', function($query) use ($student) {
            $query->where('id','like', [$student->id]);
          })->get();
        
        return view('subject.indexSubject', compact('subjects','student'));
    }


}
