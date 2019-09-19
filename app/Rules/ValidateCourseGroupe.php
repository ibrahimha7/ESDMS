<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

use App\Exam;
use Illuminate\Support\Facades\Input;

class ValidateCourseGroupe implements Rule
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
        if(Exam::where([['exam_course', '=', Input::get('exam_course')],
                        
                        ['exmam_group', '=', Input::get('exmam_group')]])->exists()){

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
        return 'Course And Group are Repeated ';
    }
}
