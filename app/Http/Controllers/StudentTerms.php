<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentTerms extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('student.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_student($id)
    {
        return view('student.show_student', ['id' => $id]);
    }
}
