@extends('layouts.app')

@section('content')
<div class="row justify-content-center bg-light">
    <div class="article-post col-md-8">
        <h2>{{$Article->articlesTitle}}</h2>
        <p class="text-muted" style="padding-top:10px;"> {{$Article->articlesDate }} by <a href="#" class="text-primary">{{$Article->articlesAuthor}}</a></p>
        <p style="padding-top:10px;">{{$Article->articlesContent}}</p>
    </div>
</div>
@endsection

