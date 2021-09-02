<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{


    public $articleInstance;
    public function __construct()
    {
        $this->articleInstance = new Article;
        $this->comment = new Comment;
    }
    public function articlesList()
    {


        return view('index', ['articles' => $this->articleInstance->simplepaginate(3)]);
    }

    public  function show(Article $article)
    {
        $comments = $this->comment->where('parent_id', 0)->get();


        // get previous article id
        $previous_article = Article::select('id', 'slug', 'name')->where('id', '<', $article->id)->orderBy('id', 'asc')->first();

        // get next article id
        $next_article = Article::select('id', 'slug', 'name')->where('id', '>', $article->id)->orderBy('id', 'asc')->first();

        return
            view('articles.detail', compact("article", "comments", "previous_article", "next_article"));
    }
}