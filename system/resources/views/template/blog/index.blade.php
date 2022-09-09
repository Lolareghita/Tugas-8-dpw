@extends('template.client.base')

@section('client_content')
    <div class="container px-4 px-lg-5">

        @foreach ($list_article as $article)
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="{{ url('article', $article->id) }}">
                            <h2 class="post-title">{{ $article->title }}</h2>
                            <h3 class="post-subtitle">{{ $article->description }}</h3>
                        </a>
                        <p >
                            <strong> write : {{ $article->write }}</strong> 
                        </p>
                    </div>
                </div>
            </div>
        @endforeach


    </div>
@endsection
