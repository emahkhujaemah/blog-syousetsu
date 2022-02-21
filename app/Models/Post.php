<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory;
    use Sluggable;

     /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    
    // protected $fillable = ['title', 'excerpt', 'body'];

    protected $guarded = ['id'];
    protected $with = ['category', 'writer', 'author'];  //dipindah dari postController

    public function scopeFilter($query, array $filters)
    {

        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });
        
        $query->when($filters['author'] ?? false, function ($query, $author) {
            return $query->whereHas('author', function ($query) use ($author) {
                $query->where('slug', $author);
            });
        });

        $query->when(
            $filters['writer'] ?? false,
            fn ($query,  $writer) =>
            $query->whereHas(
                'writer',
                fn ($query) =>
                $query->where('username', $writer)
            )
        );

        // $query->when(
        //     $filters['author'] ?? false, fn ($query,  $author) =>
        //     $query->whereHas(
        //         'author',
        //         fn ($query) =>
        //         $query->where('slug', $author)
        //     )
        // );

    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function writer()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
