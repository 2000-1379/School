<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexStudent(Request $request)
    {
        $student=Students::all();
        return response()->json($student);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeStudent(Request $request)
    {
        $fullname=$request->get('fullname');
        $mobile=$request->get('mobile');
        $age=$request->get('age');
        $enter_year=$request->get('enter_year');
        $end_year=$request->get('end_year');

        $student=Students::create([
            'fullname'=>$fullname,
            'mobile'=>$mobile,
            'age'=>$age,
            'enter_year'=>$enter_year,
            'end_year'=>$end_year
        ]);
        return response()->json($student);
    }

    /**
     * Display the specified resource.
     */
    public function show(Students $students)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Students $students)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Students $students)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyStudent(Students $students ,$id)
    {
        $students=Students::find($id);
        $students->delete();
        return response()->json($students);
    }
}
