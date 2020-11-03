<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Password;
use App\Rules\UserName;
use App\Rules\PhoneNumber;
use App\User;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */
    use SendsPasswordResetEmails;




    /**
     * Send a reset link to the given user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function sendResetLinkEmail(Request $request)
    {
        if (!($this->removeEmptyInputs($request))) {
            return Redirect::back()->withErrors(['empty' => 'حتما باید یکی از فرم های زیر پر شود.']);
        }

        // we remove empty inputs in this function
        $this->removeEmptyInputs($request);

        // now we have-to know user want reset password with which way (username / email / phone)
        return $this->whichWaysToReset($request);
    }


    public function removeEmptyInputs($request)
    {
        // dd($request->email == null && $request->username == null && $request->phoneNo == null);
        if (($request->email == null && $request->username == null && $request->phoneNo == null)) {
            return false;
        }

        // remove evry one of inputs is null 
        if ($request->email === null) {
            $request->request->remove('email');
        }

        if ($request->username === null) {
            $request->request->remove('username');
        }

        if ($request->phoneNo === null) {
            $request->request->remove('phoneNo');
        }
        return true;
    }

    public function whichWaysToReset($request)
    {
        if (isset($request->email)) {
            // do works that need reset password with email
            $this->field_type = 'email';
            return $this->resetWithEmail($request);
        }
        if (isset($request->phoneNo)) {
            $this->field_type = 'phoneNo';
            return $this->resetWithPhone($request);
        }
        if (isset($request->username)) {
            $this->field_type = 'username';
            return $this->resetWithUsername($request);
        }
    }

    public function resetWithEmail(request $request)
    {
        $this->validateEmail($request);
        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $response = $this->broker()->sendResetLink(
            $this->credentials($request)
        );

        return $response == Password::RESET_LINK_SENT
            ? $this->sendResetLinkResponse($request, $response)
            : $this->sendResetLinkFailedResponse($request, $response);
    }

    public function resetWithPhone($request)
    {
        $this->validatePhone($request);

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $response = $this->broker()->sendResetLinkPhone(
            $this->credentials($request)
        );

        return $response == Password::RESET_LINK_SENT
            ? $this->sendResetCodeResponse($request, $response)
            : $this->sendResetLinkFailedResponse($request, $response);
    }

    public function resetWithUsername($request)
    {   
        // validate username that came from request.
        $this->validateUsername($request);

        // try to find user in DB.
        $user = User::where('username', $request->username)->first();

        // here if user was not in records redirect user to fist page of reset password.
        if (!$user) {
            redirect()->back()->with('message', 'حسابی مطابق با این نام کاربری وجود ندارد.');
        }

        switch (true) {
            case $user->email && $user->phoneNo:
                // dd(['email'=> $user->email,'phone' => $user->phoneNo]);
                return redirect('password/reset/username')->with(['email' => $user->email , 'phoneNo' => $user->phoneNo] );
                break;
            case $user->email:
                // dd(['email' => $user->email]);
                return redirect('password/reset/username')->with(['email' => $user->email ]);
                break;
            case $user->phoneNo:
                // dd(['phone' => $user->phoneNo]);
                return redirect('password/reset/username')->with(['phoneNo' => $user->phoneNo] );
                break;
            default:
                dd('defualt');
                break;
        }
    }


    /**
     * Get the needed authentication credentials from the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function credentials(Request $request)
    {
        return $request->only($this->field_type);
    }


    protected function doResetWithUsername(request $request ,$username, $way)
    {
        dd($request);
        $user = User::where('username', $username)->first();
        if ($way == 'phone') {
            $this->field_type = 'phoneNo';
            return $this->resetWithPhone($request);
        } elseif ($way == 'email') {
            $this->field_type = 'email';
            return $this->resetWithEmail($request);
        }
    }


    /**
     * Validate the Phone for the given request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    protected function validatePhone(Request $request)
    {
        $request->validate(['phoneNo' => new PhoneNumber]);
    }

    /**
     * Validate the Username for the given request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    protected function validateUsername(Request $request)
    {
        $request->validate(['username' => new UserName]);
    }
}
