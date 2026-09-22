<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    { 
        // Databaseကိုconnectလုပ်တာတွေ Query runတာတွေ menualလုပ်စရာမလိုဘူး
        // ORM - Object Relational Mapping
        // Database tableထဲက dataတွေကို objectပြောင်းပေးတဲ့နည်းပညာ

        // Controllerက dataပေးမယ်  viewက UIလုပ်မယ်  Controllerမှာပဲ outputပြန်ထုတ်မယ်
        $data = Article::latest()->paginate(5); // Controllerက viewကို dataပေး
        // to show the 5 content in one page and latest content

        // Controllerကနေ views articlesထဲက index templateကို dataပေးပြီးလှမ်းခေါ်
        // ("folder name.file name")
        // Controllerမှာပဲ outputပြန်ထုတ်တယ်
        return view("articles.index", [
            'articles' => $data 
        ]); 
    } 

    /**
     * @param mixed $id
     */
    public function detail($id)
    {
        $article = Article::find($id);

        return view("articles.detail", [
            'article' => $article,
        ]);
    }
}
