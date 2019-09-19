<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Dep;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $courses = Course::all();
        //$deps = Dep::all();
        return view ('course.index')->with('courses',$courses);//->with('deps',$deps);
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
        $this ->validate($request,[
            'course_name' => 'required',
            'course_level'=> 'required',
            'course_code'=> 'required',
            //'course_dep'=> 'required'
            
        ]);
        //create post
        $course =new Course;
        $course ->course_name=$request->input('course_name');
        $course ->course_level=$request->input('course_level');
        $course ->course_code=$request->input('course_code');

        $course ->dep_name=$request->input('dep_name');

        
        $course->save();

        return redirect('/course')->with('success',$course ->course_name=$request->input('course_name'),'added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course =Course::find($id);
        $course->delete();
        return redirect('/course')->with('error','Course Deleted');
    }
}
