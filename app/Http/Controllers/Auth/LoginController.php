<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    use AuthenticatesUsers {
    logout as performLogout;
}

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo ="/admin";

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function logout(Request $request)
{  
    $lang=app()->getLocale();
    $this->performLogout($request); // call the original code
    app()->setLocale($lang);
    return redirect()->route('admin'); // add the Locale fix for logout
}
}
