<?php

namespace App\Http\Controllers;

use App\Models\Universities;
use Illuminate\Http\Request;
use App\Models\Comment;
use Auth;


class CommentController extends Controller
{
    public function comments(Request $request, $universities_id)
    {
        $request->validate([
            'comment' => 'required|string',
        ]);

        if (Auth::check()) {
            $user_id = Auth::id();
        } else {
            $user_id = null; 
        }

        $comment = new Comment(); 
        $comment->user_id = $user_id;
        $comment->universities_id = $universities_id;
        $comment->comment = $request->input('comment'); 
        $comment->save();

        return redirect()->back();
    }
    //
    public function index()
    {
        $comments = Comment::all();
        return view('admin.comments.index', ['comments' => $comments]);
    }

    public function show($comment_id)
    {
        $comment = Comment::findOrFail($comment_id);
        return view('admin.comments.show', ['comment' => $comment]);
    }


    public function destroy($comment_id)
    {
        $comment = Comment::findOrFail($comment_id);
        $comment->delete();
        return redirect()->route('admin.comments.index');
    }
}
