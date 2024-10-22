<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $articles = Article::take(3)->orderBy('created_at', 'DESC')->get();
        $products = Product::take(3)->orderBy('created_at', 'DESC')->get();

        return view('index', [
            'articles' => $articles,
            'products' => $products,
        ]);
    }

    public function about()
    {
        return view('about');
    }

    public function indexArticle()
    {
        return view('article.index');
    }

    public function showArticle(Article $article)
    {
        return view('article.show', [
            'article' => $article
        ]);
    }

    public function indexProduct()
    {
        return view('product.index');
    }
}
