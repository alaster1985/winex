<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::id());
        return view('index', ['user' => $user]);
    }

    public function cave()
    {
        $user = User::find(Auth::id());
        return view('cave', ['user' => $user]);
    }
}
