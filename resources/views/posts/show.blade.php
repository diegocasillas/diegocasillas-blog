@extends('master')

@section('header')
    <header>
        <div class="unica-one text-uppercase text-center">
            <h1 class="display-3 mt-5">{{$post->title}}</h1>
        </div>
    </header>
@endsection

@section('main')
    <div class="row">
        <section class="col-lg-10 mx-auto">
            <article>
                <header class="mb-2">
                        <img src="https://diegocasillas.com/wp-content/uploads/2018/03/frontend-backend.png" class="img-fluid mt-2 mb-3 border-5 border-main">
                </header>

                <main class="post-body">{!! $post->body !!}</main>
            </article>
        </section>
    </div>

    @author
    @endauthor
@endsection
