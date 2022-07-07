<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Borrower extends Authenticatable
{
    use HasFactory, HasApiTokens;

    public function chat(){
        return $this->hasOne(Chat::class);
    }

    public function messages(){
        return $this->morphMany(Message::class,'messageable');
    }
}
