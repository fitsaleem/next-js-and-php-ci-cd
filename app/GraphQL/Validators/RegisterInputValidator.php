<?php

namespace App\GraphQL\Validators;

use Illuminate\Validation\Rules\Password;
use Nuwave\Lighthouse\Validation\Validator;

class RegisterInputValidator extends Validator
{
    /**
     * Return the validation rules.
     *
     * @return array<string, array<mixed>>
     */
    public function rules(): array
    {
        return [
            'name' => 'nullable|string|between:3,255',
            'email' => 'required|email|between:3,255|unique:users,email',
            'password' => ['required', 'confirmed', Password::defaults()]
        ];
    }
}
