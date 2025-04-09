<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::paginate(15);

        return view('pages.articles.articles_list', compact('articles'));
    }

    public function read($id){
        $article = Article::find($id);

        return view('pages.articles.article_read', compact('article'));
    }

    public function create($id){
        //title_content - max:70
    }

    public function edit(){
        //title_content - max:70

        return view('pages.articles.article_form');
    }

}
