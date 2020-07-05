<?php

namespace App\Http\Controllers;

use App\Model\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index() {
        $articles = Article::get_all();

        return view('articles.home', compact('articles'));
    }

    public function show($id) {
        $article = Article::find_by_id($id);
        $tags = explode(',', $article->tags);

        return view('articles.detail', compact('article', 'tags'));
    }

    public function create() {
        return view('articles.create');
    }

    public function store(Request $request) {
        $article = Article::save($request->all());

        return redirect('/article');
    }

    public function edit($id) {
        $article = Article::find_by_id($id);

        return view('articles.edit', compact('article'));
    }

    public function update($id, Request $request) {
        $article = Article::update($id, $request->all());

        return redirect('/article');
    }

    public function destroy($id) {
        $article = Article::delete($id);

        return redirect('/article');
    }
}
