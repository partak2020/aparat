<?php

namespace App\Http\Controllers\user;

use Symfony\Component\HttpFoundation\Session\Session;
use App\Http\Controllers\Controller;
use App\Rules\PhoneNumber;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use App\User;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Boolean;

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
        $users = User::orderby('id', 'DESC')->get();
        //dd($users);
        return view('admin.users.users', compact('users'));
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function channelIndex()
    {
        $adminChannel = $this->adminChannel('1');
        // $userInfo = User::where('id', auth::id())->get();
        return view('user.channel.channel' , compact('adminChannel'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showVideos()
    {
        $adminChannel = $this->adminChannel('1');
        // $userInfo = User::where('id', auth::id())->get();
        return view('user.channel.allVideos' , compact('adminChannel'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showPlayLists()
    {
        $adminChannel = $this->adminChannel('1');
        // $userInfo = User::where('id', auth::id())->get();
        return view('user.channel.playlists' , compact('adminChannel'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showInfo()
    {
        $adminChannel = $this->adminChannel('1');
        // $userInfo = User::where('id', auth::id())->get();
        return view('user.channel.about' , compact('adminChannel'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function settingEdit()
    {
        $adminChannel = $this->adminChannel('1');
        // $userInfo = User::where('id', auth::id())->get();
        return view('user.channel.setting' , compact('adminChannel'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function settingupdate()
    {
        dd('update setting');
        // $userInfo = User::where('id', auth::id())->get();
        // return view('user.channel.channel', compact('iserInfo'));
    }

    /**
     * check this user is channel admin?
     *
     * @return Boolean
     */
    public function adminChannel($id)
    {
        return (auth::id() == $id);
    }

}
