@extends('template')

@section('container')
   <h2> {{ $title }}</h2>
   {{-- <h5>editor: {{ $name }} | {{ $email }}</h5> --}}
   <hr/>
    @foreach($articles as $article)
        <article class="mb-5 border-bottom pb-4">
            <h3>
                <a href="/article/{{ $article->slug }}" class="text-decoration-none">
                {{ $article->title }} 
                </a>                    
            </h3>
            <h6>Bi: <a href="/authors/{{ $article->user->slug }}" class="text-decoration-none">{{ $article->user->name }}</a> 
                in <a href="/categories/{{ $article->category->slug }}" class="text-decoration-none">{{ $article->category->name }}</a>
            </h6>
            <p>{!! $article->excerpt!!}</p>
            <a href="/article/{{ $article->slug }}" class="text-decoration-none">Read more...</a>
        </article>
    @endforeach
@endsection
