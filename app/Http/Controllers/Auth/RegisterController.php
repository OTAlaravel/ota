<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Mail;
use Illuminate\Http\Request;
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
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        return Validator::make($data, [
            'username' => 'required|max:255|unique:users',
            'fisrt_name' => 'required|alpha|max:255',
            'last_name' => 'required|alpha|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|min:7',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        var_dump($data); exit;
        $user = User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'first_name' => $data['first_name'],
            'last_name' =>  $data['last_name'],
            'password' => bcrypt($data['password']),
        ]);
        // Fill user model
        Mail::send('emails.welcome', $user, function($message) use ($user){
                $message
                    ->to($user['user']->email)
                    ->from('info@test.dev')
                    ->subject('Welcome!');
            });

        // Redirect to route
        return redirect()->route('home');
    }

    protected function doCreate(Request $request)
    {
        
        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'first_name' => $request->first_name,
            'last_name' =>  $request->last_name,
            'password' => bcrypt($request->password),
            'country_code' => $request->country_code,
        ]);
        // Fill user model
       /* Mail::send('emails.welcome', $user, function($message) use ($user){
                $message
                    ->to($user->email)
                    ->from('info@test.dev')
                    ->subject('Welcome!');
        });*/

        // Redirect to route
        return redirect()->route('home');
    }
}
