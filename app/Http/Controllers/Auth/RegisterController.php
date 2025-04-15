<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Notifications\NewUserNotification;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/users/create/store';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    { 
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required','email','unique:users'],
            'phone' => ['required', 'max:13','min:10', 'unique:users,phone'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'agree'=>['accepted']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $user =User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone'=>$data['phone'],
            'password' => Hash::make($data['password']),
            'active'=>1,
        ]);
        $this->send_noti($user);
        return $user;
    }
    public function send_noti($user){
        $admins=User::whereHas('roles', function($q) {
            $q->whereHas('permissions', function($q1) {
              $q1->where('name', '=', 'browse_users');
            });
          })->get();
          foreach($admins as $admin){
            $admin->notify(new NewUserNotification($user));
         }  
    }
}
