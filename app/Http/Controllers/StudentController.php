<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student=Student::all();

        return view('home',['student'=>$student]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $student=new Student;
        $student->name=$request->name;
        $student->course=$request->course;
        $student->branch=$request->branch;
        $student->batch=$request->batch;
        $student->enroll_no=$request->enroll_no;
        $student->save();
        return redirect(route('index'))->with('msg','your data is successfully inserted!!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student=Student::find($id);

        // echo"<pre>";
        // print_r($student);
        // echo"</pre>";
        // exit;
        return view('updateform',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student=Student::find($id);
        $student->name=$request->name;
        $student->course=$request->course;
        $student->branch=$request->branch;
        $student->batch=$request->batch;
        $student->enroll_no=$request->enroll_no;
        $student->save();
        return redirect(route('index'))->with('status','your data is successfully updated!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd($id);
        die;
        Student::destroy($id);

        return redirect(route('index'))->with('action','your data is successfully deleted!!');
    }
}
