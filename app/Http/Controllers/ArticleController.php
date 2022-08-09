<?php

namespace App\Http\Controllers;



use App\Models\Article;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(): Factory|View|Application
    {
        $articles = Article::paginate(12);
        return view('articles.index',compact(['articles']));
    }

    public function show($id): Application|Factory|View|RedirectResponse
    {
        $article = Article::find($id) ?? null;

        if ($article)
            return view('articles.show',compact(['article']));
        else
            return redirect()->to('/');
    }

    public function main(): Application|View
    {
        $articles = Article::latest()->take(6)->get();
        return view('index',compact(['articles']));
    }

    public function addWatch($id)
    {
        $article = Article::find($id) ?? null;

        if ($article){
            $article->watch_count += 1;
            $article->save();
            return response()->json(['data'=>$article->watch_count],'200');
        }
        else
            return response()->json([],'500');
    }

    public function addLike($id)
    {
        $article = Article::find($id) ?? null;

        if ($article){
            $article->like_count += 1;
            $article->save();
            return response()->json(['data'=>$article->like_count],'200');
        }
        else
            return response()->json([],'500');
    }
}
