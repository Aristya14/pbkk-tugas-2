@extends('template')

@section('container')
<article class="mb-5">
    <h3 style="color: brown;font-weight:bold">{{ $article->title }} </h3>
    <h6 style="color: grey">Bi: 
        <a href="/authors/{{ $article->user->slug }}" class="text-decoration-none">{{  $article->user->name  }}</a> in 
        <a href="/categories/{{ $article->category->slug }}" class="text-decoration-none">{{ $article->category->name }}</a></h6>
    <p>{!!$article->body!!}</p>
</article>
@endsection