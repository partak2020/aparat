<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use App\Rules\codeValidation;
use App\Rules\PhoneNumber;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\Passwords\DatabaseTokenRepository;
use Illuminate\Support\Facades\Session;
use Illuminate\Auth\Passwords\PasswordBroker;
use App\User;


class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;


    /**
     * Display the get code view for the given token.
     * 
     */
    static public function showGetCodeForm(Request $request)
    {
        return view('auth.passwords.getCode');
    }


    /**
     * check the given user's code with our code.
     * 
     */
    public function checkCode(Request $request)
    {
        $request->validate($this->rulesPhone(), $this->validationErrorMessages());
        // $resualt = DB::table('password_resets')->first('token');
        // dd($this->credentialsPhone($request));
        // dd($this->credentialsPhone($request));

        // check in database that is there any token that same with user token ???
        // and returns respons with $response.
        $response = $this->broker()->checkCode($this->credentialsPhone($request));

        // change hashed code with original code (6 digist)
        $request['token'] = DatabaseTokenRepository::hashUserToken($request);

        // set user's phone number for check when we want change password.
        Session::put('userPhone', $request['phoneNo']);

        // If the password was successfully reset, we will redirect the user back to
        // the application's home authenticated view. If there is an error we can
        // redirect them back to where they came from with their error message.
        return $response == Password::VALID_TOKEN
            ? $this->sendResetResponsePhone($request, $response)
            : $this->sendResetFailedResponse($request, $response);
    }

    /**
     * reset user password
     *
     */
    protected function resetPasswordPhone(Request $request)
    {
        // App::call('Illuminate\Auth\Passwords\PasswordBroker@delete',$user);

        $validate = $request->validate([
            'token' => ['required'],
            'password' => ['required', 'string', 'min:8']
        ]);
        $user = User::where('phoneNo', Session('userPhone'))->first();
        $response = $this->doReset($user, $request->password);
        return  $response == Password::PASSWORD_RESET
            ? $this->sendResetResponse($request, $response)
            : $this->sendResetFailedResponse($request, $response);
    }

    /**
     * reset password delete token and return respons.
     *
     * @return string
     */
    protected function doReset($user, $password)
    {
        $this->resetPassword($user, $password);
        // TODO delete token in DB....
        return PasswordBroker::PASSWORD_RESET;
    }

    /**
     * Get the check code validation rules.
     *
     * @return array
     */
    protected function rulesPhone()
    {
        return ['token' => ['bail', 'required', 'numeric', new codeValidation]];
    }


    /**
     * Get the password reset credentials from the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function credentialsPhone(Request $request)
    {
        $token = DatabaseTokenRepository::hashUserToken($request);
        // $token = hash_hmac('sha256', $request['token'] , 'b"Ð£±ûîb9ä”DUTdëŒ÷zà‘\x16y2õÍvÌv»ÀáÉŽ"');
        // $token = Hash::make($request['token']);

        // dd($token);
        return ['token' => $token, 'phoneNo' => $request['phoneNo']];
        // return ['token'=>$request['token'] , 'phoneNo' => $request['phoneNo']];
    }


    /*
     * 
     */
    protected function isThereCode($credentials)
    {
        $resualt = DB::table('password_resets')->where('phoneNo', $credentials['phoneNo'])->orderby('id', 'DESC')->first();
        // dd($resualt);
        return $resualt;
    }
}
