@extends('master')

@section('header')
    @include('partials.header')
@endsection

@section('main')
    <div class="row">
        <section class="col-lg-10 mx-auto pt-5">
            @postList(['posts' => $posts])
            @endpostList
        </section>
    </div>
@endsection
