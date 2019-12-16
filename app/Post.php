<?php

namespace App;

use App\Tag;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'content', 'description', 'image', 'image-online', 'author_id'
    ];

    /**
     * Get the user associated with the post.
     */
    public function author()
    {
        return $this->belongsTo(User::class, "author_id");
    }

    /**
     * Get the tags associated with the post.
     */
    public function tags() {
        return $this->belongsToMany(Tag::class, 'post_tag');
    }

    /**
     * @return string
     */
    public function getRelativeTime() {
        return Carbon::parse($this->created_at)->diffForHumans(Carbon::now());
    }

    public function getDate() {
        return Carbon::parse($this->created_at)->format('m/d/Y');
    }
}
