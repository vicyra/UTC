<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index(){
        $categories = Category::all();
        $articles = [Article::with('detail')->first(), Article::with('detail')->latest()->first()];
        return view('welcome', compact('categories', 'articles'));
    }

    public function detail($id){
        $article = Article::findOrFail($id);
        $categories = Category::all();

        return view('detail-article', compact('article', 'categories'));
    }

    public function category($id){
        $categories = Category::all();
        $category = Category::with('articles')->findOrFail($id);
        return view('category', compact('categories', 'category'));
    }

    public function popular(){
        $categories = Category::all();
        $articles = Article::paginate(3);
        return view('popular', compact('categories', 'articles'));
    }
}
