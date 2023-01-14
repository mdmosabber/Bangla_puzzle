<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index(){
        return view('user/post/index');
    }

    public function store(Request $request){
        if($request->isMethod('post')){

            Validator::make($request->all(),[
                'title' => 'required',
                'description' => 'required',
            ]);


            if($request->id){
                $blog = Blog::findOrFail($request->id);
            }else{
                $blog = new Blog();
            }

            $blog->user_id = Auth::user()->id;
            $blog->title = $request->title;

            if (($request->slug == "") || $request->slug == null) {
                $blog->slug = Str::slug($request->title);
            } elseif ($request->slug != null) {
                $blog->slug = $request->slug;
            }

            $blog->description  = $request->description;
            $blog->save();

            if($request->id){
                return to_route('user.post-box.show')->with('message','Blog Post Update Successfully');
            }else{
                return redirect()->back()->with('message','Blog Post Save Successfully');
            }
        }
    }


    public function show(){
        $blogs = Blog::latest()->where('user_id',Auth::user()->id)->paginate(10);
        return view('user/post/view',compact('blogs'));
    }


    public function edit($id){
        $blog = Blog::findOrFail($id);
        return view('user/post/index',compact('blog'));
    }


    public function destroy($id){
        Blog::findOrFail($id)->delete();
        return redirect()->back()->with('message','Blog Post Delete Successfully');
    }


}
