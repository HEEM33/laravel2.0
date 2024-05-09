<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Universities;

class DashboardController extends Controller
{
    /*
    public function index()
    {
        return view('admin.dashboard');
    }*/
    //
    public function index()
    {
        $universities = Universities::all(); 
        return view('admin.dashboard', ['universities' => $universities]);
    }
}
