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
    {
        return view('student.index');
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
            'email'=>'required|string|max:255|unique:student,email'.$request->id,
            'phone_number'=>'required|string|max:255',
            'program'=>'required|string',
            'residential_status'=>'required|string',
            
            ]
        );
        Student::create($request->all());
        return redirect('/student')->with('rcord created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('student.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('student.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        return view('student.update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        return view('student.destroy');
    }
}
