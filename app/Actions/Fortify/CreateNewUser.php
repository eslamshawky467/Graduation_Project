<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255','min:6'],
            'address' => ['required', 'string', 'max:255'],
            'socialid' => ['required', 'string', 'max:255','unique:users'],
            'phonenumber' => ['required', 'string', 'max:12'],
            'gender' => ['required', 'string', 'max:10'],
            'age' => ['required', 'numeric', 'max:200'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'address' => $input['address'],
            'socialid' => $input['socialid'],
            'phonenumber' => $input['phonenumber'],
            'gender' => $input['gender'],
            'age' => $input['age'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
