<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Herb;
class GuestController extends Controller
{
    public function herbs()
    {
        $herb = Herb::all();
        return view('herbs', compact('herb'));
    }
}
