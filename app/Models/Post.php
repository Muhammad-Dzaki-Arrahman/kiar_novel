<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    //protected $fillable = ['title','excerpt','body'];
    protected $guarded = ['id'];
    protected $with = ['category', 'author'];

    public function category()
    {
        return $this->belongsTo(Category::class); // belongsTo digunakan untuk relasi one to one
    }

    public function author() // nama fungsi dan model harus sama
    {
        return $this->belongsTo(User::class, 'user_id'); //belongsTo digunakan untuk relasi one to one
    }
}
