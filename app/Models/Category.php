<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    //video 7
    protected $guarded = ['id'];
    //video 7

    //video 8
    //model Category bereleasi one to many dengan model Post

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    //video 8


}
