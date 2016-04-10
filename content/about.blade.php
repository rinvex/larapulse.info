@extends('_includes.base')

@section('pageTitle', '- About')

@section('body')

    <div class="left-side">
        @markdown

        # About

        > Work hard until you no longer have to introduce yourself. ―Anonymous

        This project has never seen the light without the inspiration got from remarkable awesome people who influenced me over the past months:
        - [@taylorotwell](https://twitter.com/taylorotwell)
        - [@jeffrey_way](https://twitter.com/jeffrey_way)
        - [@stauffermatt](https://twitter.com/stauffermatt)
        - [@a_abueldahab](https://twitter.com/a_abueldahab)
        - [@adamwathan](https://twitter.com/adamwathan)
        - [@dansyme](https://twitter.com/dansyme)
        - [@seldaek](https://twitter.com/seldaek)

        Proudly made of [`Love`](https://en.wikipedia.org/wiki/Love) on [`Mac`](https://www.apple.com/mac/) with [`Laravel`](https://laravel.com/) in [`Alexandria`](https://en.wikipedia.org/wiki/Alexandria) by [`Omranic`](https://twitter.com/omranic) at [`Rinvex, LLC`](http://rinvex.com) using [`Katana`](https://github.com/themsaid/katana).

        > The first and greatest victory is to conquer yourself; to be conquered by yourself is such a shame. -Plato

        @endmarkdown
    </div>

    <div class="right-side">
        @include('_includes.sidebar')
    </div>

@stop
