<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;
use App\Models\Universities;

class RankingController extends Controller
{
    public function ranking()
    {
        $rankings = Universities::withAvg('ratings', 'rating')
                                ->orderByDesc('ratings_avg_rating')
                                ->get();

        return view('pages.classement', ['rankings' => $rankings]);
    }

    //
}
