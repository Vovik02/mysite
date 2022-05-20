<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    public function category(){
        return $this->belongsTo(FriendCategories::class, 'friend_cat');
    }
}
