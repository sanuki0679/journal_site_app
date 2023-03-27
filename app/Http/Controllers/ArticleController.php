<?php

namespace App\Http\Controllers;

// Articleクラスを読み込む
use App\Models\Article;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // indexページへ移動
    public function index()
    {
        // モデル名::テーブル全件取得
        $articles = Article::all();
        // Articlesティレクトリーの中のindexページを指定し、articlesの連想配列を代入
        return view('articles.index', ['articles' => $articles]);
    }

    // showページへ移動
    public function show($id)
    {
        $article = Article::find($id);
        return view('articles.show', ['article' => $article]);
    }
}
