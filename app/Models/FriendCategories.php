<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FriendCategories extends Model
{
    public function friend(){
        return $this->hasMany(Friend::class, 'friend_cat');
    }
}
