<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    use HasFactory;

    // protected $table = 'my_posts';

    // protected $fillable = ['title', 'content', 'image'];
    protected $guarded = [];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
