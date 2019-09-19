<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Group;
use App\Course;
use App\Supervisor;
use App\Exam;
use Illuminate\Validation\Rule;
use App\Rules\VaildExamRoom;
use App\Rules\VaildExamGroup;
use App\Rules\VaildExamSuper;
use App\Rules\ValidateCourseGroupe;



class ExamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exams=Exam::all();
        $rooms = Room::all();
        $groups = Group::all();
        $courses = Course::all();
        $supervisors = Supervisor::all();
        return view('exams.index')->with('rooms',$rooms)->with('groups',$groups)->with('courses',$courses)->with('supervisors',$supervisors)->with('exams',$exams);
        //
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
            
            
            
            'exam_date'=> 'required',
            'exam_start_at'=> 'required',
            

            'exmam_group'=> ['required',new VaildExamGroup()],
            'exam_course'=> ['required',new ValidateCourseGroupe()],
            
            'exam_room'=> ['required',new VaildExamRoom()],
            
            'exam_super_name'=> ['required',new VaildExamSuper()],

            
            
        ]);
        
        //create post

        
        $exam =new Exam;
        
        
        $exam ->exam_date=$request->input('exam_date');
        $exam ->exam_start_at=$request->input('exam_start_at');
        

        $exam ->exmam_group=$request->input('exmam_group');

        $exam ->exam_course=$request->input('exam_course');
        $exam ->exam_room=$request->input('exam_room');
        $exam ->exam_super_name=$request->input('exam_super_name');

        
       
            //if ($exam ->exam_room == 47 && $exam ->exam_start_at=='08:00:00' &&  $exam ->day_name=='Sunday'  )
            //if(isset($status->user_id)&&isset($request->product_id)){
                
                $exam->save();

                return redirect('/exams')->with('success','New Exam Added');
        
        
        
        
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
        $exam =Exam::find($id);
        $exam->delete();
        return redirect('/exams')->with('error','Exam Deleted');
    }
}
