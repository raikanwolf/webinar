<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TopicController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('topics.index', compact('users'));
    }
}
