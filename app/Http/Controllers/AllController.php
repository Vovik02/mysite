<?php

namespace App\Http\Controllers;

use App\Models\Friend;
use Illuminate\Http\Request;

class AllController extends Controller
{
    public function all(Request $request)
    {
        $friends = Friend::orderBy('friend_id')->get();


        $friends = Friend::orderBy('friend_id')->get();

        if (isset($request->orderBy)){
            if ($request->orderBy == 'sex-m'){
                $friends = Friend::where('friend_sex', 'Чоловіча')->get();
            }if ($request->orderBy == 'sex-w'){
                $friends = Friend::where('friend_sex', 'Жіноча')->get();
            }if ($request->orderBy == 'age-low-high'){
                $friends = Friend::orderBy('friend_age')->get();
            }if ($request->orderBy == 'age-high-low'){
                $friends = Friend::orderBy('friend_age', 'desc')->get();
            }if ($request->orderBy == 'name-a-z'){
                $friends = Friend::orderBy('friend_name')->get();
            }if ($request->orderBy == 'name-z-a'){
                $friends = Friend::orderBy('friend_name', 'desc')->get();
            }
        }

        if ($request->ajax()){
            return view('ajax.order-by', [
                'friends' => $friends
            ])->render();
        }

        return view('home.all', [
            'friends' => $friends
        ]);
    }

}
