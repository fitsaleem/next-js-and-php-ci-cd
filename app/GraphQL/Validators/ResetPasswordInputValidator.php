<?php

namespace App\GraphQL\Validators;

use Illuminate\Validation\Rules\Password;
use Nuwave\Lighthouse\Validation\Validator;

class ResetPasswordInputValidator extends Validator
{
    /**
     * Return the validation rules.
     *
     * @return array<string, array<mixed>>
     */
    public function rules(): array
    {
        return [
            'token' => 'required|string',
            'email' => 'required|email|between:3,255',
            'password' => ['required', 'confirmed', Password::defaults()]
        ];
    }
}
