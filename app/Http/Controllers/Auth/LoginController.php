<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request; 
use Illuminate\Foundation\Auth\RedirectsUsers;

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
    use RedirectsUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo ;

     // this function redierects a user to home and a admin to admin home
    public function redirectPath($user)
    {
         if ($user->admin_verify == 1 && $user->verified==1) {

             return $redirectTo = '/adminhome';
         }
         else if($user->verified==1)
         {
           return $redirectTo = '/home';
         }
         else
         {
            return $redirectTo='\login';
         }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
    public function credentials(Request $request)
    {
        return [
            'email' => $request->email,
            'password' => $request->password,
            'verified' => 1,
        ];
   }

}
