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
        $Article->articlesAuthor = $requrest->input('name');
        $Article->articlesTitle = $request->input('title');
        $Article->articlesDate = date("Y/m/d");
        $Article->articlesTime = date("h:i:sa");
        $Article->articlesEmail = $requrest->input('email');
        $Article->articlesContent = $requrest->input('content');
        $Article->articlesTag = $requrest->input('tag');
        $Article->user_id = Auth::user()->id;
        $Article->save();
        return back()->with('success_message', 'Success, article added!');
    }
}

