<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Rules\PhoneNumber;
use Laravel\Ui\Presets\React;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
    protected function email_validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'unique_field' => ['required', 'string', 'email', 'max:255', 'unique:channels,email'],
            'password' => ['required', 'string', 'min:8'],
        ]);
    }

    protected function phone_validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'unique_field' => ['required', new PhoneNumber, 'unique:channels,phoneNo'],
            'password' => ['required', 'string', 'min:8'],
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
        // dd($this->field_type);

        return User::create([
            'name' => $data['name'],
            $this->field_type => $data['unique_field'],
            'password' => Hash::make($data['password']),
        ]);
    }

    protected function define_type($request)
    {
        $unique_field = $request->unique_field;
        if (is_numeric($unique_field)) {
            // user insert phone number for login
            $this->field_type = 'phoneNo' ;
            $this->phone_validator($request->all())->validate();
        } elseif (filter_var($unique_field, FILTER_VALIDATE_EMAIL)) {
            // user insert email for login
            $this->field_type = 'email' ;
            $this->email_validator($request->all())->validate();
        }
    }
}
