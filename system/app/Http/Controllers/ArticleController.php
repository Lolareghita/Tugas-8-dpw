<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{

  function index()
  {
    $user = request()->user();
    $data['list_article'] = $user->article;
    return view('template.article.index', $data);
  }

  function create()
  {
    return view('template.article.create');
  }

  function store()
  {
   
    $article = new Article();
    $article->title = request('title');
    $article->write = request('write');
    $article->id_user = request()->user()->id;
    $article->description = request('description');
    $article->save();

    return redirect('admin/article')->with('success','successfully added');
  }

  function show(Article $article){
    $data['article'] = $article;
    return view('template.article.show', $data);
  }

  function edit(Article $article){
    $data['article'] = $article;
    return view('template.article.edit', $data);
  }

  function update(Article $article){
    $article->title = request('title');
    $article->write = request('write');
    $article->description = request('description');
    $article->save();

    return redirect('admin/article')->with('success','successfully edit');
  }

  function destroy(Article $article){
    $article->delete();
    return redirect('admin/article')->with('danger','successfully delete');
  }

  function filter(){
    $title = request('title');
    $data['title'] = $title;

    $data['list_article'] = Article::where('title', 'like', "%$title%")->get();

    return view('template.article.index', $data);
  }

}
