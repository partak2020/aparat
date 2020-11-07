<?php

namespace App\Http\Controllers\uploadvideo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Video;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Playlist;
use App\Tags;
use App\AparatCategory;

class UploadVideoController extends Controller
{
    public function index()
    {
        $playlists = Playlist::orderby('id', 'DESC')->get();
        $tags = Tags::orderby('id', 'DESC')->get();
        $categories = AparatCategory::orderby('id', 'DESC')->get();
        return view('user.video.upload', compact('playlists', 'tags', 'categories'));
        //TO DO send aparat category to upload view form
    }

    public function store(Request $request)
    {   //dd(request()->file->getClientOriginalExtension());
        //dd(Auth::id());
        //dd($request);

        $this->validate($request, [
            'inputFile' => 'required|max:1024M',
            'title' => 'required|string',
            'discription' => 'required|different:title|string',
            'aparatcategory' => 'required',
            'status' => 'required|boolean',
            'commentStatus' => 'required|boolean',
            'playlistVideo' => 'required',
            'tags' => 'required'
        ]);

        //dd($request);

        $uploadedVideo = new Video;

        $videoId = str::random(5);

        while ($uploadedVideo->where("videoID", $videoId)->first()) {
            $videoId = str::random(5);
        }

        $fileName = $videoId . '.' . $request->file('inputFile')->getClientOriginalName();

        $locationFile = Auth::id();
        $request->inputFile->move(public_path($locationFile), $fileName);
        
        $uploadedVideo->fileAddress = "$locationFile" . "/" . "$fileName";
        $uploadedVideo->title = $request->title;
        $uploadedVideo->discription = $request->discription;
        $uploadedVideo->status = $request->status;
        $uploadedVideo->commentStatus = $request->commentStatus;
        $uploadedVideo->videoID = $videoId;
        $uploadedVideo->aparatcategory_ID = $request->aparatcategory;
        $uploadedVideo->duration = now();
        $uploadedVideo->save();

        return view("user.channel.channel")->with("successful","ویدیوهای شما با موفقیت منتشر شد!
        پس از پردازشی کوتاه بر روی آپارات به نمایش در خواهد آمد.");
    }
}
