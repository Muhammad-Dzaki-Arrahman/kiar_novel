<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function scopeFilcat($query, array $fc){

    $query->when($filter['category'] ?? false, function ($query, $category) {
        return $query->whereHas('category', function ($query) use ($category) {
            $query->where('slug', $category);
        });
    });

}
    public function post()
    {
        return $this->hasMany(Post::class); // has many digunakan untuk relasi one to many
    }
}
