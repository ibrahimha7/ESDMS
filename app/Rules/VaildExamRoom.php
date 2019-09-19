<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Exam;
use Illuminate\Support\Facades\Input;


class VaildExamRoom implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
        
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        //if (Exam::where('exam_room', '=', Input::get('exam_room'))->exists()) {
        if(Exam::where([['exam_date', '=', Input::get('exam_date')],
                        ['exam_start_at', '=', Input::get('exam_start_at')],
                        ['exam_room', '=', Input::get('exam_room')]])->exists()){

           return false;
            

        }
        
        
         return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        /*
        $exams=Exam::where('exam_room','=',47)->get();
        
        //return view('exams.show')->with('exams',$exams);
        return ($exams);
        */
        return 'Room is Busy';
    }
}
