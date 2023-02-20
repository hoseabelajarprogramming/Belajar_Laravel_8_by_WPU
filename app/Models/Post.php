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

    //video 13

    //cara 2
    //"scope"nya wajib, nama dibelakangnya bebas
    // "scope" itu untuk menunjukkan bahwa itu fitur scope yang di panggil
    // public function scopeFilter($query)
    // {
    //     if (request('search')) {
    //         return $query->where('title', 'like', '%' . request('search') . '%')
    //             ->orWhere('body', 'like', '%' . request('search') . '%');
    //     }
    // }


    //cara 3
    //perbaikan dari cara 2 adalah dengan menaruh request search pada controller karena memang request merupakan kerjanya controller
    // public function scopeFilter($query, array $filters)
    // {
    //     if (isset($filters['search']) ? $filters['search'] : false) {
    //         return $query->where('title', 'like', '%' . $filters['search'] . '%')
    //             ->orWhere('body', 'like', '%' . $filters['search'] . '%');
    //     }
    // }
    //cara 3

    //cara 4
    //pengefektifan cara 3 menggunakan "when"
    //when method akan di eksekusi/dijalankan ketika first argument berisi true
    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%');
        });


        //membuat query untuk search yang mana ketika user berada di category tertentu
        //dan mencari blog postingan pada category tersebut
        //whereHas ->digunakan untuk join table / mencari yang punya relationship apa
        //whereHas Category dibawah adalah relasi join table dengan function category yang terdapat pada model ini
        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        $query->when(
            $filters['author'] ?? false,
            fn ($query, $author) =>
            $query->whereHas(
                'user',
                fn ($query) =>
                $query->where('username', $author)
            )
        );
    }

    //cara 4

    //video 13


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
