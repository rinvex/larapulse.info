@extends('_includes.base')

@section('pageDescription')@yield('post::brief')@endsection

@section('body')

    <div class="wrapper m-t-30">
        <div class="left-side">
            <a href="/">Back to home</a>

            <h1>@yield('post::title')</h1>

            <small>@yield('post::date')</small>

            @yield('post_body')
        </div>

        <div class="right-side">
            @include('_includes.sidebar')
        </div>
    </div>

@stop
