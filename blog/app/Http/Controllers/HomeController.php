<?php

namespace App\Http\Controllers;


use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){

        $search =  $request->input('search');

        if($search){
            $blogs =  Blog::query()
                ->where('title','LIKE', "%{$search}%")
                ->orWhere('slug','LIKE',"%{$search}%")->paginate(20);
            return view('home', compact('blogs'));
        }

        $blogs = Blog::orderBy('id','desc')->paginate(20);
        return view('home', compact('blogs'));
    }


    public function show($slug, $id){
       $blog =  Blog::findOrFail($id);
       $comments = Comment::where('post_id',$blog->id)->get();
       $count = Comment::where('post_id',$blog->id)->count();
        return view('view', compact('blog','comments','count'));
    }


}
