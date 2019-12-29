@extends('layouts.app')

@section('content')
    @include('layouts.header')
    <section class="s-content">

        <div class="row narrow">
            <div class="col-full s-content__header" data-aos="fade-up">
                <h1>Category: {{ $category->name }}</h1>

                <p class="lead">Dolor similique vitae. Exercitationem quidem occaecati iusto. Id non vitae enim quas error dolor maiores ut. Exercitationem earum ut repudiandae optio veritatis animi nulla qui dolores.</p>
            </div>
        </div>

        <div class="row masonry-wrap">
            <div class="masonry">

                <div class="grid-sizer"></div>

                @foreach($allPosts as $post)

                <article class="masonry__brick entry format-standard" data-aos="fade-up">

                    <div class="entry__thumb">
                        <a href="{{ route('show_post', ['postId' => $post->id]) }}" class="entry__thumb-link">
                            <img src="{{ $post->poster }}"
                                 alt="">
                        </a>
                    </div>

                    <div class="entry__text">
                        <div class="entry__header">

                            <div class="entry__date">
                                <a href="{{ route('show_post', ['postId' => $post->id]) }}">{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $post->created_at)->format('F, d Y') }}</a>
                            </div>
                            <h1 class="entry__title"><a href="{{ route('show_post', ['postId' => $post->id]) }}">{{$post->title }}</a></h1>

                        </div>
                        <div class="entry__excerpt">
                            <p>
                                {{ $post->preview }}
                            </p>
                        </div>
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="{{ route('show_category', $post->category->id) }}"> {{ $post->category->name }}</a>
                            </span>
                        </div>
                    </div>

                </article> <!-- end article -->
                @endforeach

            </div> <!-- end masonry -->
        </div> <!-- end masonry-wrap -->

        <div class="row">
            <div class="col-full">
                <nav class="pgn">
                    <ul>
                        <li><a class="pgn__prev" href="#0">Prev</a></li>
                        <li><a class="pgn__num" href="#0">1</a></li>
                        <li><span class="pgn__num current">2</span></li>
                        <li><a class="pgn__num" href="#0">3</a></li>
                        <li><a class="pgn__num" href="#0">4</a></li>
                        <li><a class="pgn__num" href="#0">5</a></li>
                        <li><span class="pgn__num dots">…</span></li>
                        <li><a class="pgn__num" href="#0">8</a></li>
                        <li><a class="pgn__next" href="#0">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>

    </section>
@endsection