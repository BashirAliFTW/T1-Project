@extends('layouts.app')

@section('content')
<div class="row justify-content-center bg-grey">
    <div class="article-post col-md-8">
        <h2>{{$Article->articlesTitle}}</h2>
        <p class="text-muted"> {{$Article->articlesDate }} by <a href="#" class="text-primary">{{$Article->articlesAuthor}}</a></p>
        <p>{{$Article->articlesContent}}</p>
    </div>
</div>
@endsection

