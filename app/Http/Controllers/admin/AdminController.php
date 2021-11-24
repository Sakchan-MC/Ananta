<?php

namespace App\Http\Controllers\admin;

use App\Herb;

use App\User;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();
        $herbs = Herb::all();

        return view('admin.dashboard', compact('users', 'herbs'));
    }
}
