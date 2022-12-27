<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//how to create this model using command "php artisan make:model Post"
//if using comman "php artisan make:model -m " that mean make a model with migration

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    //video 7
    // protected $fillable = ['title', 'excerpt', 'body'];
    protected $guarded = ['id'];
    //video 7

    //video 8
    //model Post bereleasi one to one dengan model Category

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    //video 8

    //video 9

    //model Post bereleasi one to one dengan model User

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    //video 9


}
