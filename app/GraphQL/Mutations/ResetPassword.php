<?php

namespace App\GraphQL\Mutations;

use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class ResetPassword
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        $status = Password::reset(
            Arr::only($args, ['email', 'password', 'password_confirmation', 'token']),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET ? [
            'error' => false,
            'data' => 'Your password has been reset'
        ] : [
            'error' => true,
            'data' => 'There was an error while resetting password.'
        ];
    }
}
