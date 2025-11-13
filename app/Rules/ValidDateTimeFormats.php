<?php

namespace App\Rules;

use Carbon\Carbon;
use Illuminate\Contracts\Validation\Rule;

class ValidDateTimeFormats implements Rule
{

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value): bool
    {
        if (Carbon::hasFormat($value, 'Y-m-d')) {
            return true;
        }
        if (Carbon::hasFormat($value, 'Y-m-d H:i:s')) {
            return true;
        }
        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute must be a valid date in Y-m-d or Y-m-d H:i:s format.';
    }
}
