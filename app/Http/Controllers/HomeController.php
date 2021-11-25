<?php

namespace App\Http\Controllers;

use App\Background;
use App\Herb;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (auth()->user()->isAdmin()) {
            return view('admin/dashboard');
        } else {
            return view('home');
        }
    }
    public function herbs()
    {
        $herb = Herb::all();
        return view('herbs', compact('herb'));
    }
    public function background()
    {
        $background = Background::where("status", 1)->get();
        return view('welcome', compact('background'));
    }
}
