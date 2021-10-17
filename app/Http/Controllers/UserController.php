<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\District;
use App\Models\Role;
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
        $this->addMiddlewaresFor('Users');
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
        $roles = Role::all();
        $districts=District::all();
        $categories =Category::all();
        return view('/users/create',compact('categories','roles','districts'));
    }

    public function store(Request $request)
    {

        Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'category_id' => ['required', 'string', 'max:255'],
            'district_id'=>'nullable','string', 'max:255',
            'longitude' => 'required',
            'latitude' => 'required',
            'phone' =>['required', 'digits:10'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
        ])->validate();

        request()->merge(['password' => Hash::make($request['password'])]);
        request()->merge(['is_active' => $request->is_active == 'on' ? true : false]);

        $user=User::create(
            request()
                ->only( 'name',  'district_id','password','longitude','latitude','email', 'password',
                    'category_id','phone','is_active'));
        $roles = request()->validate([
            'role_id' => 'nullable',
        ]);
        $user->syncRoles($roles);

        return redirect('/users/manage')->withSuccess(__('Your User has been created successfully'));
    }


    public function show(User $user)
    {
        //
    }


    public function edit(User $user)
    {
        $roles = Role::all();
        $userRoles = $user->roles()->pluck('id')->toArray();
        $districts= District::all();
        $categories=Category::all();
        return view('users.edit', compact('user','userRoles','roles','categories','districts'));

    }


    public function update(Request $request, User $user)
    {
//     dd($user);
        Validator::make($request->all(),
            [
                'name' => ['required', 'string', 'max:255'],
                'phone' => ['required', 'string', 'max:255'],
                'category_id' => ['required', 'string', 'max:255'],
                'email' => ['required', 'email', 'max:255'],
                'district_id'=>'nullable','string', 'max:255',
                'longitude' => 'required',
                'latitude' => 'required',
                'is_active' => 'required',
            ])->validateWithBag('updateProfileInformation');

        if (isset($request['photo'])) {
            $request->updateProfilePhoto($request['photo']);
        }
        if ($request['email'] !== $user->email &&
            $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $request);
        } else {
            $user->forceFill([
                'name' => $request['name'],
                'phone' => $request['phone'],
                'email' => $request['email'],
                'category_id'=>$request['category_id'],
                'district_id' => $request['district_id'],
                'longitude' => $request['longitude'],
                'latitude' => $request['latitude'],
                'is_active' => $request['is_active'],
            ])->save();

            $roles = request()->validate([
                'role_id' => 'nullable',
            ]);
            $user->syncRoles($roles);
        }

        return redirect('/users/manage')->withSuccess(__(':attribute Has Been Updated',['attribute'=>__('User')]));

    }


    public function destroy(User $user)
    {
        $user->delete();
        return redirect('users/manage');
    }
}
