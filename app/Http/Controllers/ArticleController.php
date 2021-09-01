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
            'email' => 'required',
            'body' => 'required',
            'tags' => 'required'
        ]);
        $Article = new Article;
        $Article->name = $requrest->input('name');
        $Article->date = date("Y/m/d");
        $Article->time = date("h:i:sa");
        $Article->email = $requrest->input('email');
        $Article->body = $requrest->input('body');
        $Article->tag = $requrest->input('tag');
        $Article->user_id = Auth::user()->id;
        $Article->save();
        return back()->with('success_message', 'Success, article added!');
    }

public function list(){
    $data = Article::all();
    return view('articles',['data'->$data]);

}

}

