<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   $students=Student::paginate(20);
        return view('student.index',[
            'students'=>$students
        ]);
        // return 'student inde working';

        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
            'first_name'=>'required|string|max:255',
            'last_name'=>'required|string|max:255',
            'gender'=>'required|string',
            'email' => 'required|string|max:255|unique:students,email,' . $request->id,
            'phone_number'=>'required|string|max:255',
            'program'=>'required|string',
            'residential_status'=>'required|string',
            
            ]
        );
        Student::create($request->all());
        return redirect('/student')->with('success', 'Record created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('student.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('student.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {   $request->validate(
        [
        'first_name'=>'required|string|max:255',
        'last_name'=>'required|string|max:255',
        'gender'=>'required|string',
        'email' => 'required|string|max:255',
        'phone_number'=>'required|string|max:255',
        'program'=>'required|string',
        'residential_status'=>'required|string',
        
        ]
    ); 
    $student->update([
        'first_name'=>$request->first_name,
        'last_name'=>$request->last_name,
        'gender'=>$request->gender,
        'email'=>$request->email,
        'phone_number'=>$request->phone_number,
        'program'=>$request->program,
        'residential_status'=>$request->residential_status,

    ]);
     return redirect('/student')->with('success', 'Record updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect('/student')->with('success', 'Record deleted successfully');
    }
}
