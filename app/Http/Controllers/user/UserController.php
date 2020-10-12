<?php

namespace App\Http\Controllers\user;

use Symfony\Component\HttpFoundation\Session\Session;
use App\Http\Controllers\Controller;
use App\Rules\PhoneNumber;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return user list
        $users = User::orderby('id','DESC');
        return view('admin.users.users',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function filed_type(request $request)
    {
        // $validation = $request->validate(['unique_field' => 'required|regex:/(01)[0-9]{9}/']);
        // $request->session()->reflash('errors', 'Your mobile number not match in our system..!!');
        // $validator = new validator();
        // $validator->getMessageBag()->add('password', 'Password wrong');

        // $unique_field = $request->unique_field;
        // $result = 'hh';
        // if (is_numeric($unique_field)) {
        //     //user insert phone number for login

        //     $validation = $request->validate(['unique_field' => ['required',new PhoneNumber]]);
        //     dd($validation);
        //     $result = 'you are logig with phone number';
        // } elseif (filter_var($unique_field, FILTER_VALIDATE_EMAIL)) {
        //     // user insert email for login
        //     $result = 'you are logig with email address';
        // }
        // return view('welcome');
    }
}
