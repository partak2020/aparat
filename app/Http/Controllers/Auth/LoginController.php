<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Rules\PhoneNumber;
use App\Rules\UserName;
use Illuminate\Support\Facades\Auth;

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




    public $field_type = null;


    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }


    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function login(Request $request)
    {

        $this->validateLogin($request);

        // replace 'unique_field' with '$this->field_type' 
        $request->request->add([$this->field_type => $request->unique_field]);
        $request->request->remove('unique_field');


        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if (
            method_exists($this, 'hasTooManyLoginAttempts') &&
            $this->hasTooManyLoginAttempts($request)
        ) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }


    /**
     * Validate the user login request.
     * we have tree option email, phone number, username
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function validateLogin(Request $request)
    {
        $unique_field = $request->unique_field;
        switch (true) {
            case is_numeric($unique_field):
                // validation phone number
                $this->field_type = 'phoneNo';
                $request->validate([
                    'unique_field' => ['required', new PhoneNumber],
                    'password' => 'required|string|min:8',
                ]);
                // dd($this->field_type);
                break;

            case filter_var($unique_field, FILTER_VALIDATE_EMAIL):
                // validation email
                $this->field_type = 'email';
                $request->validate([
                    'unique_field' => 'required|email',
                    'password' => 'required|string|min:8',
                ]);
                break;

            default:
                // validation username
                $this->field_type = 'username';
                $request->validate([
                    'unique_field' => ['required', new UserName],
                    'password' => 'required|string|min:8',
                ]);
                break;
        }
    }

    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        // here return type of the unique field that user inserted
        return $this->field_type;
    }
}
