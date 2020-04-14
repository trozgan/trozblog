<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'provider', 'provider_id', 'email_verified_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
   * The attributes that should be mutated to dates.
   *
   * @var array
   */
    protected $dates = [
        'registered_at'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The roles that belong to the user.
     */
    public function roles() {
      return $this->belongsToMany('App\Models\Role');
    }

    /**
    * Return user has a role
    */
     public function hasRole(string $role){
        return $this->roles->where('name', $role)->isNotEmpty();
     }

    /**
     * Check if the user has role admin
     */
    public function isAdmin(){
      return $this->hasRole(Role::ROLE_ADMIN);
    }

    /**
     * Check if the user has role editor
     */
    public function isEditor(){
      return $this->hasRole(Role::ROLE_EDITOR);
    }

    /**
     * Return the user's posts
     */
    public function posts(){
      return $this->hasMany(Post::class, 'author_id');
    }

    /**
     * Return the user's comments
     */
    public function comments(){
      return $this->hasMany(Comment::class, 'author_id');
    }

}
