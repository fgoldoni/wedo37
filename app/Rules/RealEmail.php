<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class RealEmail implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     */
    public function passes($attribute, $value): bool
    {
        return !preg_match('/^([a-z0-9\\+_\\-]+)(\\.[a-z0-9\\+_\\-]+)*@([a-z0-9\\-]+\\.)+[a-z]{2,6}$/ix', (string) $value)
            ? false
            : true;
    }

    /**
     * Get the validation error message.
     */
    public function message(): string
    {
        return __('This Email is not a valid email address.');
    }
}
