<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use App\Observers\UserObserver;
use App\Observers\PostObserver;
use App\Observers\CommentObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(){
      User::observe(UserObserver::class);
      Post::observe(PostObserver::class);
    }
}
