<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'author_id',
        'title',
        'content',
        'posted_at',
        'slug',
        'thumbnail_id',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'posted_at'
    ];

    /**
     * Return the post's author
     */
    public function author(){
      return $this->belongsTo(User::class, 'author_id');
    }

    /**
     * Return the post's thumbnail
     */
    public function thumbnail(){
      return $this->belongsTo(Media::class);
    }

    /**
     * Return the post's comments
     */
    public function comments(){
      return $this->hasMany(Comment::class);
    }
}
