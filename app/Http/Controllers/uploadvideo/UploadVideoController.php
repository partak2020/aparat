<?php

namespace App\Http\Controllers\uploadvideo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Video;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class UploadVideoController extends Controller
{
    public function index()
    {
        return view('user.video.upload');
        //TO DO send aparat category to upload view form
    }

    public function store(Request $request)
    {   //dd(request()->file->getClientOriginalExtension());
        //dd(Auth::id());
        $request->validate([
            'file' => 'required',
        ]);

        $uploadedVideo = new Video;

        $videoId = str::random(8);

        while ($uploadedVideo->where("video_ID", $videoId)->first()) {
            $videoId = str::random(8);
        }

        $fileName = $videoId . '.' . request()->file->getClientOriginalExtension();

        $locationFile = Auth::id();
        $request->file->move(public_path($locationFile), $fileName);

        $uploadedVideo->title = $request->title;
        $uploadedVideo->fileAddress = "$locationFile"."/"."$fileName";
        $uploadedVideo->discription = $request->discription;
        $uploadedVideo->status = $request->status;
        $uploadedVideo->videoID = $videoId;
        
        $uploadedVideo->save();

        return response()->json(['success' => 'File Uploaded Successfully']);
    }
}
