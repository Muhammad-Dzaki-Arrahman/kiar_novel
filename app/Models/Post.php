<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory, Sluggable;

    //protected $fillable = ['title','excerpt','body'];
    protected $guarded = ['id'];
    protected $with = ['category', 'author'];

    public function scopeFilters($query, array $filter)
    {
        // if (isset($filter['search']) ? $filter['search'] : false ) {
        //     return $query->where('title', 'like', '%' . $filter['search'] . '%')
        //                 ->orWhere('body', 'like', '%' . $filter['search'] . '%');
        // }

        $query->when($filter['search'] ?? false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%');
        });

        $query->when($filter['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        $query->when(
            $filter['category'] ?? false,
            fn ($query, $author) =>
            $query->whereHas(
                'author',
                fn ($query) =>
                $query->where('username', $author)
            )
        );
    }

    public function category()
    {
        return $this->belongsTo(Category::class); // belongsTo digunakan untuk relasi one to one
    }

    public function author() // nama fungsi dan model harus sama
    {
        return $this->belongsTo(User::class, 'user_id'); //belongsTo digunakan untuk relasi one to one
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
