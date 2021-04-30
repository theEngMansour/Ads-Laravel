<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Favorite,
    Ad,
};
use App\User;
use App\Models\Category;

class CpanelController extends Controller
{
    public function __construct()
    {
    
        
    }
    
    /*
    *@ Render cpanel dashboard page
    */
    public function index()
    {
        // $ad=Ad::with('user')->where(["user_id"=>auth()->user()->id])->get();
        $ad=Ad::where("user_id","=",auth()->user()->id)->get();
    	return view('cpanel.index',compact('ad'));
    }

    /*
    *@ Render cpanel crrate page
    */
    public function create()
    {
    	return view('cpanel.pages.create');
    }

    /*
    *@ Render cpanel posts page
    */
    public function posts()
    {
        $posts  = Post::orderBy('created_at', 'desc')->get();
        return view('cpanel.pages.posts', compact('posts'));
    }

    /*
    *@ Render cpanel categories page
    */
    public function categories()
    {
        $cats = Category::orderBy('created_at', 'desc')->get();
        
        return view('cpanel.pages.categories', compact('cats'));
    }

    /*
    *@ Render cpanel comments page
    */
    public function comments()
    {
        return view('cpanel.pages.comments');
    }

    /*
    *@ Render cpanel messages page
    */
    public function messages()
    {
        return view('cpanel.pages.messages');
    }

    /*
    *@ Render cpanel profile page
    */
    public function profile()
    {
        return view('cpanel.pages.profile');
    }

    /*
    *@ Render cpanel profile page
    */
    public function updateProfile()
    {
        return view('cpanel.pages.updateProfile');
    }
}
