@extends('master')

@section('header')
    <header class="mt-5 mb-5">
        <div class="text-center">
            <div class="h5 mb-5">
                <span class="badge badge-primary p-3">Frontend</span>
                <span class="badge badge-success p-3">Backend</span>
            </div>
            <h1 class="display-3 unica-one text-uppercase">{{$post->title}}</h1>
        </div>
    </header>
@endsection

@section('main')
    <div class="row">
        <section class="col-lg-10 mx-auto">
            <article>
                <img src="https://diegocasillas.com/wp-content/uploads/2018/03/frontend-backend.png" class="mb-5 img-fluid border-5 border-main">

                <main class="post-body">{!! $post->body !!}</main>
            </article>
        </section>
    </div>

    @author
    @endauthor
@endsection
