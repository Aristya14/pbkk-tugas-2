@extends('template')

@section('container')
   <h2> All Authors</h2>
   {{-- <h5>editor: {{ $name }} | {{ $email }}</h5> --}}
   <hr/>
    @foreach($users as $user)
        <article class="mb-5">
            <ul>
                <li>
                    <h3>
                        <a href="/authors/{{ $user->slug }}" class="text-decoration-none">
                        {{ $user->name}} 
                        </a>                    
                    </h3> 
                </li>
            </ul>
              
        </article>
    @endforeach
@endsection
