<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Universities;

class DetailsController extends Controller
{
    public function show($universities_id)
{
    $universities = Universities::findOrFail($universities_id);
    $comments = Comment::where('universities_id', $universities_id)->orderBy('created_at', 'desc')->get();
    return view('pages.details', compact('universities', 'comments'));
}

}
