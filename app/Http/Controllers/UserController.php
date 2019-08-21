<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Post;
use Auth;
use JD\Cloudder\Facades\Cloudder;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function show(User $user)
    {
        $user = User::find($user->id);
        
        // $user->load('posts');
        return view('users.show', [
            'user' => $user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit',['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->name = $request->name;
        if (!empty($request->image)){
            $image = $request->image;
            $image_name = $image->getRealPath();
            Cloudder::upload($image_name, null);
            list($width, $height) = getimagesize($image_name);
        // 直前にアップロードした画像のユニークIDを取得します。
        $publicId = Cloudder::getPublicId();
        // URLを生成します
        $imageUrl = Cloudder::show($publicId,[
            'width'     => $width,
            'height'    => $height
        ]);
        $user->image = $imageUrl;
        $user->save();
        }
       
        $user->age = $request->age;
        $user->sex = $request->sex;
        $user->twitter_link = $request->twitter_link;
        $user->region = $request->region;
        $user->save();
        return redirect('users/'.$user->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect('users');
    }

    public function record(User $user)
    {
        $login_id = Auth::id();
        $posts = Post::whereIn('user_id', [$login_id])->get();
        // $posts->load('post');
        return view('users.record',[
        'posts' => $posts,
        ]);
    }
}

