<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /** @use HasFactory<\Database\Factories\ArticleFactory> */
    use HasFactory;

    // write the function in the class
    public function category() // to call category in Article Models
    {
        // return This Article -> Related -> Category;
        return $this->belongsTo('App\Models\Category');
    }

    public function comments()
    {
        // return This Article -> Related -> Comments;
        return $this->hasMany('App\Models\Comment');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}


