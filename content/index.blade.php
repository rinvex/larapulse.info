@extends('_includes.base')

@section('body')

    <div class="left-side">
        @foreach($paginatedBlogPosts as $post)

            <article>
                <p>
                    <a href="@url($post->path)">{{ $post->title }}</a>
                    <br>
                    <small>{{ $post->date }}</small>
                    <br>
                    {{ $post->brief }}
                </p>
            </article>

        @endforeach

        @include('_includes.blog_paginator')
    </div>

    <div class="right-side">
        @include('_includes.sidebar')
    </div>

@stop
