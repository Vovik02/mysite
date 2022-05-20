<?php

namespace App\Http\Controllers;

use App\Models\Friend;
use App\Models\FriendCategories;
use Illuminate\Http\Request;

class FriendController extends Controller
{
    public function getFriend($cat, $friend_id){
        $item = Friend::where('friend_id', $friend_id)->first();
        return view('home.friend', [
           'item' => $item
        ]);
}
    public function getCategory(Request $request, $cat_alias)
    {
        $cat = FriendCategories::where('alias', $cat_alias)->first();

        $friends = Friend::where('friend_cat', $cat->id)->get();

        if (isset($request->orderBy)){
            if ($request->orderBy == 'sex-m'){
                $friends = Friend::where('friend_cat', $cat->id)->where('friend_sex', 'Чоловіча')->get();
            }if ($request->orderBy == 'sex-w'){
                $friends = Friend::where('friend_cat', $cat->id)->where('friend_sex', 'Жіноча')->get();
            }if ($request->orderBy == 'age-low-high'){
                $friends = Friend::where('friend_cat', $cat->id)->orderBy('friend_age')->get();
            }if ($request->orderBy == 'age-high-low'){
                $friends = Friend::where('friend_cat', $cat->id)->orderBy('friend_age', 'desc')->get();
            }if ($request->orderBy == 'name-a-z'){
                $friends = Friend::where('friend_cat', $cat->id)->orderBy('friend_name')->get();
            }if ($request->orderBy == 'name-z-a'){
                $friends = Friend::where('friend_cat', $cat->id)->orderBy('friend_name', 'desc')->get();
            }
        }

        if ($request->ajax()){
            return view('ajax.order-by', [
                'friends' => $friends
            ])->render();
        }



        return view('home.category', [
            'cat' => $cat,
            'friends' => $friends,
        ]);

    }




}
