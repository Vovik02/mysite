<?php

namespace App\Http\Controllers;

use App\Models\Friend;
use App\Models\FriendCategories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function showCategory(){

        return view('home.categories');
    }
}
