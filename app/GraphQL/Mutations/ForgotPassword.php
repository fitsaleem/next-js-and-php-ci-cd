<?php

namespace App\GraphQL\Mutations;

use Illuminate\Support\Facades\Password;

class ForgotPassword
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        $status = Password::sendResetLink(
            ['email' => $args['email']]
        );

        return [
            'error' => false,
            'data' => 'If that email address is in our database, we will send you an email to reset your password.'
        ];
    }
}
