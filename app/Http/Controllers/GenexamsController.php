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
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder as IlluminateBuilder;
use Illuminate\Support\Str;




class GenexamsController extends Controller
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
        return view('gen.index')->with('rooms',$rooms)->with('groups',$groups)->with('courses',$courses)->with('supervisors',$supervisors)->with('exams',$exams);
       
       
        /* $group=Group::get(['group_no'])->toArray();
        
               
       
                
        
        return ($group); */
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
        //
        
         /* $this ->validate($request,[
            
            
            
            

            'exmam_group'=> new VaildExamGroup(),
            'exam_course'=> new ValidateCourseGroupe(),
            
            'exam_room'=> new VaildExamRoom(),
            
            'exam_super_name'=> new VaildExamSuper(),

            
            
            ]); */
           /*  do{
                
            }while(!empty(Exam ::where('exam_start_at',$random_string_StartTime)->with('exam_date',$rand_date)->first())); */
                
            //     $randomString = str_random(2).rand().str_random(2);

            //     /* $array_days = ['sunday', 'monday', 'tuseday', 'wensday', 'Thrasday']; // Random Day NAmes
            //     $random_string_day= Arr::random($array_days);
            //     $rand_day =  $random_string_day; */

            //     $array_Start_Time = ['08:00', '10:30', '01:00'];
            //     $random_string_StartTime = Arr::random($array_Start_Time);
            //     $rand_time =  $random_string_StartTime;

            //     //exmam_group
            //    // $groups =                
            //    $group=Group::get(['group_no'])->toArray();
            //    //$array_groups =$group->toArray(); 
            //    $random_string_group = Arr::random($group);
            //    $rand_group =  $random_string_group;
            //     //Course name
            //     /* $course = Course::all(['course_name'])->toArray();                
            //     $array_course = $course[0];
            //     $random_string_course = Arr::random($array_course);
            //     $rand_course =  $random_string_course; */
            //     //$course =               
            //     $array_course = Course::get(['course_name'])->toArray();  
            //     $random_string_course = Arr::random($array_course);
            //     $rand_course =  $random_string_course;
            //     //Room No
            //     //$room =       
            //     $array_room = Room::get(['room_no'])->toArray();          
            //     $random_string_room = Arr::random($array_room);
            //     $rand_room =  $random_string_room;
            //     //Super Name
            //    // $super =                 
            //     $array_super = Supervisor::get(['name'])->toArray();
            //     $random_string_super = Arr::random($array_super);
            //     $rand_super =  $random_string_super;

            //     $rand_date =  "2019-03-07".$randomString;
            
            



            //Insert Query
            $exam = new Exam;
            


            /* $exam ->day_name = $request->day_name;
            $exam ->day_name = $rand_day; */

            $exam ->exam_start_at = $request->exam_start_at;
            $exam ->exam_start_at = $rand_time;

            $exam ->exmam_group = $request->exmam_group;
            $exam ->exmam_group = $rand_group;

            $exam ->exam_course = $request->exam_course;
            $exam ->exam_course = $rand_course;
            

            $exam ->exam_room = $request->exam_room;
            $exam ->exam_room = $rand_room;

            $exam ->exam_super_name = $request->exam_super_name;
            $exam ->exam_super_name = $rand_super;
            

            $exam ->exam_date=$request->exam_date;
            $exam ->exam_date=$rand_date;
            $exam ->save();
                
                //$exam->save();

                return redirect('/gen')->with('success','New Exam Added');
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
        //
        $exam =Exam::find($id);
        $exam->delete();
        return redirect('/exams')->with('error','Exam Deleted');
    }
}
