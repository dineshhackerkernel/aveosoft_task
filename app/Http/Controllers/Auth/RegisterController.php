<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Input;
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
            'name' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'age' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'contactNo' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
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
        if ($data['resume']) {
            $path = '/uploads/resume/';
            if (!file_exists(public_path().'/'.$path)) {
                File::makeDirectory(public_path().'/'.$path,0777,true);
            }
            $image =$data['resume'];
            $imageName = time().'.'.$image->getClientOriginalExtension();   
            $image->move(public_path().$path,$imageName);
            
        }

        if ($data['profilePicture']) {
            $path2 = '/uploads/profileImage/';
            if (!file_exists(public_path().'/'.$path)) {
                File::makeDirectory(public_path().'/'.$path,0777,true);
            }
            $image =$data['profilePicture'];
            $imageName = time().'.'.$image->getClientOriginalExtension();   
            $image->move(public_path().$path,$imageName);
        }

        return User::create([
            'name' => $data['name'],
            'lastName' => $data['lastName'],
            'age' => $data['age'],
            'address' => $data['address'],
            'contactNo' => $data['contactNo'],
            'profilePicture' => $path2.$imageName,
            'resume' => $path.$imageName,
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
