<?php

namespace App\Rules;

use App\Advertisement;
use Illuminate\Contracts\Validation\Rule;

class RequestRangeCheck implements Rule
{
     var $max = 0;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($ad_id)
    {
        $ad = Advertisement::where('id',$ad_id)->first();
        $this->min = $ad->min;
        $this->max = $ad->max;

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
        if($this->max >= $value && $this->min <= $value){
            return true;
        }else{
            return false;
        }


    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'مقدار مورد درخواست خارج از بازه فروش میباشد.';
    }
}
