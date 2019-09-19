<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Exam;
use Illuminate\Validation\Rules\Exists;
use Illuminate\Support\Facades\Input;

class VaildExamGroup implements Rule
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
        if(Exam::where([['exam_date', '=', Input::get('exam_date')],
                        ['exam_start_at', '=', Input::get('exam_start_at')],
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
        return 'Group is Busy';
    }
}
