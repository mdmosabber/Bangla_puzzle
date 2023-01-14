<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        if($request->isMethod('post')){

            $request->validate([
                'comment' => 'required',
            ]);

           $comment = new Comment();

            $comment->post_id = $request->post_id;
            $comment->user_id = $request->user_id;
            $comment->comment = $request->comment;
            $comment->save();

            return back()->with('message','Comment Save Successfully');

        }
    }


    public function show(Comment $comment)
    {
        //
    }


    public function edit(Comment $comment)
    {
        //
    }


    public function update(Request $request, Comment $comment)
    {
        //
    }


    public function destroy(Comment $comment)
    {
        //
    }
}
