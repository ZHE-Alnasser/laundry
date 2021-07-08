<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Notifications\Approve;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class UserController extends Controller
{


    public function manage()
    {
        return view('users/manage');
    }


    public function index()
    {
        //
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show(User $user)
    {
        //
    }


    public function edit(User $user)
    {
        return view('users.edit', compact('user'));

    }


    public function update(Request $request, User $user)
    {
//     dd($user);
        Validator::make($request->all(),
            [
                'name' => ['required', 'string', 'max:255'],
                'last_name' => ['required', 'string', 'max:255'],
                'phone' => ['required', 'string', 'max:255'],
                'email' => ['required', 'email', 'max:255'],
                'is_active' => 'required',
            ])->validateWithBag('updateProfileInformation');

        if ($request['email'] !== $user->email &&
            $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $request);
        } else {
            $user->forceFill([
                'first_name' => $request['name'],
//                'last_name' => $request['last_name'],
                'phone' => $request['phone'],
                'email' => $request['email'],
                'address_1' => $request['address_1'],
                'address_2' => $request['address_2'],

                'is_active' => $request['is_active'],
            ])->save();
        }

        if($request->is_active === '1')
        {
            Notification::route('mail', $request->email)
                ->notify(new Approve($user));
        }
        return redirect('users/manage')->withSuccess(__('User Has Been Updated'));

    }


    public function destroy(User $user)
    {
        $user->delete();
        return redirect('users/manage');
    }
}
