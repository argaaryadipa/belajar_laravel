@extends('layouts.main')

@section('container')

    <h1 class="mb-5">{{ $title }}</h1>

    {{-- hitung jumlah postingan --}}
    @if ($posts->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
            <div class="card-body">
                <h3 class="card-title">
                    <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">
                        {{ $posts[0]->title }}
                    </a>
                </h3>
                <p> 
                    <small>
                        By : 
                        <a class="text-decoration-none" href="/authors/{{ $posts[0]->author->username }}">
                            {{ $posts[0]->author->name }}
                        </a> 
                        in 
                        <a class="text-decoration-none" href="/categories/{{ $posts[0]->category->slug }}">
                            {{ $posts[0]->category->name }}
                            {{-- mengambil waktu saat post dibuat --}}
                        </a> {{ $posts[0]->created_at->diffForHumans() }}   
                    </small>
                </p>

                <p class="card-text">{{ $posts[0]->excerpt }}</p>    

                <a class="text-decoration-none btn btn-primary" href="/posts/{{ $posts[0]->slug }}">Read More</a>

            </div>
        </div>
    @else
        <p class="text-center fs-4">No post found.</p> 
    @endif

    <div class="container">
        <div class="row">
        @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.8)">
                        <a href="/categories/{{ $post->category->slug }}" class="text-white text-decoration-none">
                            {{ $post->category->name }}
                        </a>
                    </div>
                    <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                    <div class="card-body">
                      <h5 class="card-title">{{ $post->title }}</h5>
                        <p> 
                            <small>
                                By : 
                                <a class="text-decoration-none" href="/authors/{{ $post->author->username }}">
                                    {{ $post->author->name }}
                                </a> 
                                {{ $post->created_at->diffForHumans() }}   
                            </small>
                        </p>
                      <p class="card-text">{{ $post->excerpt }}</p>
                      <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>

    {{-- @foreach ($posts->skip(1) as $post)
        <article class="mb-5 border-bottom pb-3">
            <h2>
                <a class="text-decoration-none" href="/posts/{{ $post->slug }}">
                    {{ $post->title }}
                </a>
            </h2>

            <p> By : 
                <a class="text-decoration-none" href="/authors/{{ $post->author->username }}">
                    {{ $post->author->name }}
                </a> 
                in 
                <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">
                    {{ $post->category->name }}
                </a>
            </p>

            <p>{{ $post->excerpt }}</p>

            <a class="text-decoration-none" href="/posts/{{ $post->slug }}">Read More...</a>
        </article>
    @endforeach --}}

@endsection

