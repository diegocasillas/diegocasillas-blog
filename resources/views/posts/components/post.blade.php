<article>
    <header class="mb-2">
        <h3 class="h1 unica-one text-uppercase"><a href="{{ $slug }}">{{ $title }}</a></h3>
        <a href="{{ $slug }}">
            <img src="{{ $thumbnail }}" class="img-fluid mt-2 mb-3 border-5 border-main">
        </a>
    </header>

    <main class="post-body">{!! $body !!}</main>
</article>
