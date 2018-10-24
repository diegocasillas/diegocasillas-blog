@forelse ($posts as $post)
    <article>
        <header class="mb-2">
            <div>
                <span class="h5">
                    <span class="badge badge-primary p-3">Frontend</span>
                    <span class="badge badge-success p-3">Backend</span>
                </span>

                <span class="text-muted float-right">{{ $post->readTime }} minutes read</span>
            </div>
            <h3 class="display-1 unica-one text-uppercase mt-4" style="font-size: 4rem;"><a class="text-main" href="{{ $post->slug }}">{{ $post->title }}</a></h3>
        </header>

        <div class="post-body">{!! $post->excerpt !!}</div>
    </article>

    @if (!$loop->last)
        <hr class="m-5">
    @endif
@empty
    <div class="h3 text-center">There aren't posts</div>
@endforelse
