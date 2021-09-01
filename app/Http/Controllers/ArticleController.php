<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    //
    public function index()
    {
        return view('addarticle');
    }
    public function select(Request $request, $id)
    {
        return view('article', compact('$id'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'title' => 'required',
            'email' => 'required',
            'content' => 'required',
            'tag' => 'required'
        ]);
        $Article = new Article;
        $Article->articlesAuthor = $request->input('name');
        $Article->articlesTitle = $request->input('title');
        $Article->articlesDate = date("Y/m/d");
        $Article->articlesTime = date("h:i:s");
        $Article->articlesEmail = $request->input('email');
        $Article->articlesContent = $request->input('content');
        $Article->articlesTag = $request->input('tag');
        $Article->user_id = $request->user()->id;
        $Article->save();
        return redirect()->route('articles')->with('success_message', 'Success, article added!');
    }

public function list(){
    $data = Article::all();
    return view('articles',['data'->$data]);

}

}

