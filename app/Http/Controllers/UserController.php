<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Notifications\Approve;
use Illuminate\Contracts\Auth\MustVerifyEmail;
//use App\Notification;
use App\Services\Notifier;
use Illuminate\Support\Facades\Hash;
use App\Actions\Fortify\PasswordValidationRules;





class UserController extends Controller
{

    use PasswordValidationRules;

    function __construct()
    {

        $this->middleware('auth');
    }
    public function manage()
    {
        return view('users/manage');
    }


    public function index()
    {
        return view('users/manage');
    }


    public function create()
    {
        $districts=District::all();
        $types =Type::all();
        return view('/users/create',compact('types','districts'));
    }

    public function store(Request $request)
    {

        Validator::make($request->all(), [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'type_id' => ['required', 'string', 'max:255'],
            'district_id'=>'nullable','string', 'max:255',
            'phone' =>['required', 'digits:10'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
        ])->validate();

        request()->merge(['password' => Hash::make($request['password'])]);

        User::create(
            request()
                ->only( 'first_name', 'last_name',  'district_id','password','email', 'password',
                    'type_id','phone'));
//        if($request->sms) {
//            Notifier::sendSMS($request->message, $request->users);
//            return redirect('notifications')->withMessage(__('Sent Successfully'));
//        }
        return redirect('/users/manage')->withSuccess(__('Sent Successfully'));
    }


    public function show(User $user)
    {
        //
    }


    public function edit(User $user)
    {
        $districts= District::all();
        $types=Type::all();
        return view('users.edit', compact('user','types','districts'));

    }


    public function update(Request $request, User $user)
    {
//     dd($user);
        Validator::make($request->all(),
            [
                'first_name' => ['required', 'string', 'max:255'],
                'last_name' => ['required', 'string', 'max:255'],
                'phone' => ['required', 'string', 'max:255'],
                'type_id' => ['required', 'string', 'max:255'],
                'email' => ['required', 'email', 'max:255'],
                'district_id'=>'nullable','string', 'max:255',
//                'is_active' => 'required',
            ])->validateWithBag('updateProfileInformation');

        if (isset($request['photo'])) {
            $request->updateProfilePhoto($request['photo']);
        }
        if ($request['email'] !== $user->email &&
            $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $request);
        } else {
            $user->forceFill([
                'first_name' => $request['first_name'],
                'last_name' => $request['last_name'],
                'phone' => $request['phone'],
                'email' => $request['email'],
                'type_id'=>$request['type_id'],
                'district_id' => $request['district_id'],
//                'is_active' => $request['is_active'],
            ])->save();
        }

        if($request->is_active === '1')
        {
            Notification::route('mail', $request->email)
                ->notify(new Approve($user));
        }
        return redirect('/users/manage')->withSuccess(__('User Has Been Updated'));

    }


    public function destroy(User $user)
    {
        $user->delete();
        return redirect('users/manage');
    }
}
