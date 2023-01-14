<?php

namespace App\Http\Controllers;


use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class ApiController extends Controller
{
    public function store(Request $request){

        if($request->isMethod('post')){
            $validation = Validator::make($request->all(),[
                'title' => 'required',
                'description' => 'required',
            ]);
            if($validation->fails()){
                return response()->json($validation->errors(), 422);
            };

            $blog = new Blog();

            $blog->user_id = $request->id;
            $blog->title = $request->title;

            if (($request->slug == "") || $request->slug == null) {
                $blog->slug = Str::slug($request->title);
            } elseif ($request->slug != null) {
                $blog->slug = $request->slug;
            }

            $blog->description  = $request->description;
            $blog->save();

            $message = 'Blog Post Save Successfully';
            return response()->json(['message'=> $message], 201);
        }
    }


    public function show($id = null){

        if($id == ''){
            $blogs = Blog::all();
            return response()->json(['blogs' => $blogs], 200);
        }else{
            $blogs = Blog::findOrFail($id);
            return response()->json(['blogs' => $blogs], 200);
        }
    }



    public function update(Request $request, $id){

        if($request->isMethod('put')){
            $validation = Validator::make($request->all(),[
                'title' => 'required',
                'description' => 'required',
            ]);
            if($validation->fails()){
                return response()->json($validation->errors(), 422);
            };

            $blog = Blog::findOrFail($id);

            $blog->user_id = $request->id;
            $blog->title = $request->title;

            if (($request->slug == "") || $request->slug == null) {
                $blog->slug = Str::slug($request->title);
            } elseif ($request->slug != null) {
                $blog->slug = $request->slug;
            }

            $blog->description  = $request->description;
            $blog->save();

            return response()->json(['message'=> 'Blog Post Update Successfully'], 202);
        }
    }



    public function destroy($id = null){

        Blog::findOrFail($id)->delete();
        return response()->json(['message'=> 'Blog Post Delete Successfully'], 200);
    }

}
