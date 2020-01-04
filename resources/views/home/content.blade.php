<!-- s-content
================================================== -->
<section class="s-content">

    <div class="row masonry-wrap">
        <div class="masonry">

            <div class="grid-sizer"></div>

            @foreach( $allPosts as $post)

            <article class="masonry__brick entry format-standard" data-aos="fade-up">

                <div class="entry__thumb">
                    <a href="{{ route('show_post', ['postId' => $post->id]) }}" class="entry__thumb-link">
                        <img src="{{ $post->poster }}">
                           {{--  srcset="images/thumbs/masonry/lamp-400.jpg 1x, images/thumbs/masonry/lamp-800.jpg 2x" alt="">--}}
                    </a>
                </div>

                <div class="entry__text">
                    <div class="entry__header">

                        <div class="entry__date">
                            <a href="single-standard.html">December 15, 2017</a>
                        </div>
                        <h1 class="entry__title"><a href="{{ route('show_post', ['postId' => $post->id]) }}">{{ $post->title }}.</a></h1>

                    </div>
                    <div class="entry__excerpt">
                        <p>
                            {{ $post->preview }}
                        </p>
                    </div>
                    <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="category.html">Design</a>
                                <a href="category.html">Photography</a>
                            </span>
                    </div>
                </div>

            </article> <!-- end article -->
            @endforeach

        </div> <!-- end masonry -->
    </div> <!-- end masonry-wrap -->

    {{ $allPosts->links('vendor.pagination.bootstrap-4') }}

</section> <!-- s-content -->