<?php

namespace App\Http\Controllers;

use App\Models\Friend;
use App\Models\FriendImage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        return view('home.index');


    }
}
