<?php

namespace App\Http\Controllers\Auth;

use DB;
use Mail;
use App\User;
use App\Admin;
use Validator;
use Image;
use Illuminate\Http\Request;
use App\Mail\EmailVerification;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/home';

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
    *  Over-ridden the register method from the "RegistersUsers" trait
    *  Remember to take care while upgrading laravel
    */
    public function register(Request $request)
    {
            // Laravel validation
            $validator = $this->validator($request->all());
            if ($validator->fails()) 
            {
                $this->throwValidationException($request, $validator);
            }
            // Using database transactions is useful here because stuff happening is actually a transaction
            // I don't know what I said in the last line! Weird!
            DB::beginTransaction();
            try
            {

                $user = $this->create($request->all(),$request);
                // calling admindetailcreate function
                if ($request->is('admin/register')) {
                    $this->admindetailscreate($request->all(),$user,$request);
                }

                // After creating the user send an email with the random token generated in the create method above
                
                $email = new EmailVerification(new User(['email_token' => $user->email_token]));
                Mail::to($user->email)->send($email);
                DB::commit();
                $request->session()->flash('message', 'We have sent you a verification email!');
                 return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
            }
            catch(Exception $e)
            {
                DB::rollback(); 
                return back();
            }
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
   protected function create(array $data,Request $request)
    {
         if($request->is('admin/register'))
         { 
            //storing admin details

             // if admin store admin verify =1
                return  User::create([
                    'name' => $data['name']." ".$data['secondname'],
                    'email' => $data['email'],
                    'password' => bcrypt($data['password']),
                    'email_token' => str_random(10),
                    'admin_verify' =>1,
                ]);
         }

         else
         {
            // else store admin_verify=0  

                return User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => bcrypt($data['password']),
                    'email_token' => str_random(10),
                ]);
         }

    }
    public function verify($token)
    {
        // The verified method has been added to the user model and chained here
        // for better readability
            User::where('email_token',$token)->firstOrFail()->verified();
            return redirect('login');
    }

    // loading admin sign up page
    public function signup(User $user)
    {
        return view('auth.signup',compact('user'));
    }

    //entering admin details to admin table

    protected function admindetailscreate(array $data,User $user,Request $request)
    {
        //stroing bio and status
        $admin=new Admin;
        $admin->bio=$request->bio;
        $admin->status=$request->status;
        $admin->user_id=$user->id;

        //storing image in public dierectory
        if ($request->hasFile('avatar')) {
                $avatar=$request->file('avatar');
                $filename=time().'.'.$avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatars/'.$filename));
                $admin->avatar=$filename;
        }
        $admin->save();
    }
    public function picture(Request $request)
    {
        dd($request->toArray());

    }
}
