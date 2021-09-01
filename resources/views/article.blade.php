@extends('layouts.app')

@section('content')
<div class="row justify-content-center bg-grey">
    <div class="article-post">
        <h2>{{$Article->articlesTitle}}</h2>
        <p class="text-muted"> {{$Article->articlesDate }} by <p class="text-primary">{{$Article->articlesAuthor}}</p></p>
        <p>{{$Article->articlesContent}}</p>
    </div>
</div>
@endsection

