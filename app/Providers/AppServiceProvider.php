<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();
        // if use the Paginator, that say to use the Bootstrap

        // check authorization to delete article and comment using the Gate class
        Gate::define("delete-article", function($user, $article) {
            return $user->id == $article->user_id;
        });

        Gate::define("delete-comment", function($user, $comment) {
            return $user->id == $comment->user_id // the owner of the comment
                or $user->id == $comment->article->user_id; 
                // the owner of the article
        });
    }
}
