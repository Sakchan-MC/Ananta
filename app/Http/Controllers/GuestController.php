<?php

namespace App\Http\Controllers;
use App\Background;
use Illuminate\Http\Request;
use App\Herb;

class GuestController extends Controller
{
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
