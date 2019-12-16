<?php

namespace App;

use App\Post;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'font-color', 'background-color'
    ];

    /**
     * Get the user associated with the post.
     */
    public function posts() {
        return $this->belongsToMany(Post::class, 'post_tag');
    }
}
