<?php

namespace App\Actions\Fortify;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{

    public function update($user, array $input)
    {
        Validator::make($input, [
            'name' => 'required', 'string', 'max:255',
//            'last_name' => 'required', 'string', 'max:255',
            'type_id' => 'required', 'string', 'max:255',
            'district_id'=>'nullable','string','max:255',
            'phone' =>'required', 'digits:10',
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'photo' => ['nullable', 'mimes:jpg,jpeg,png', 'max:1024'],
        ])->validateWithBag('updateProfileInformation');

        if (isset($input['photo'])) {
            $user->updateProfilePhoto($input['photo']);
        }

        if ($input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {
            $user->forceFill([
                'name' => $input['name'],
//                'last_name' => $input['last_name'],
                'phone' => $input['phone'],
                'district_id'=>$input['district_id'],
                'type_id' => $input['type_id'],
                'email' => $input['email'],
            ])->save();
        }
    }


    protected function updateVerifiedUser($user, array $input)
    {
        $user->forceFill([
            'name' => $input['name'],
//            'last_name' => $input['last_name'],
            'phone' => $input['phone'],
            'district_id'=>$input['district_id'],
            'type_id' => $input['type_id'],
            'email' => $input['email'],
            'email_verified_at' => null,
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}
