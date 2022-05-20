<?php


namespace App\Http\Controllers;

use App\Models\Friend;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {

        return view('home.contact');
    }

}
