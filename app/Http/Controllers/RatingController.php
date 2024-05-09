<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Universities;

class RatingController extends Controller
{
    public function rate(Request $request, $universities_id)
{
    $rating = $request->input('rating');
    $user_id = auth()->user()->id;
    
    $universities = Universities::findOrFail($universities_id);
    $universities->rate($rating, $user_id);

    return redirect()->route('details', $universities_id);
}


    //
}
