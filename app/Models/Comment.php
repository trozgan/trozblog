<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'author_id',
      'post_id',
      'content',
      'posted_at'
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
     * Return the comment's author
     */
    public function author(){
      return $this->belongsTo(User::class, 'author_id');
    }

    /**
     * Return the comment's post
     */
    public function post(){
      return $this->belongsTo(Post::class);
    }
}
