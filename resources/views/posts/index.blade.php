@extends('master')

@section('header')
    @include('partials.header')
@endsection

@section('main')
    <div class="row">
        <section class="col-lg-10 mx-auto">
            @forelse ($posts as $post)
                @post([
                    'title' => $post->title,
                    'category' => $post->category,
                    'body' => $post->body,
                    'url' => $post->url
                ])
                @endpost

                @if (!$loop->last)
                    <hr>
                @endif
            @empty
                <div class="h3 text-center">There aren't posts</div>
            @endforelse
        </section>
    </div>
@endsection
