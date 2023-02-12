<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Student::query()->with('user', 'year_level', 'section')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'user_id' => 'required|integer',
            'gender' => 'required|string',
            'phone' => 'required|integer|min:11,max:11',
            'address' => 'required|string',
            'year_level_id' => 'required|integer',
            'section_id' => 'required|integer'
        ]);

        $student = Student::create($data);

        return response()->json(['message' => 'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {

        $data = $request->validate([

            'user_id' => 'required|integer',
            'gender' => 'required|string',
            'phone' => 'required|integer|min:11,max:11',
            'address' => 'required|string',
            'year_level_id' => 'required|integer',
            'section_id' => 'required|integer'
        ]);

        $student->fill($data);
        $student->save();

        return response()->json(['message' => 'Updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return response()->json(['message' => 'deleted']);
    }

    public function assignSubjects(Request $request, Student $student)
    {
        $request->validate([
            'subjects' => 'array'
        ]);

        $student->subjects()->sync($request->subjects);

        return response()->json([
            'message' => 'success'
        ]);
    }
}
