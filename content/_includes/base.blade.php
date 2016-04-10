<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('pageDescription', $siteDescription)">

    <title>{{$siteName}} @yield('pageTitle')</title>

    <link href='https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="@url('style.css')">
</head>

<body>

    <script>

        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-32372582-6', 'auto');
        ga('send', 'pageview');

    </script>

<nav>
    <div class="wrapper">
        <strong>{{$siteName}}</strong>

        <ul>
            <li><a href="@url('/')">Home</a></li>
            <li><a href="@url('about')">About</a></li>
            <li><a href="https://twitter.com/larapulsephp">Twitter</a></li>
        </ul>

        {{$siteDescription}}
    </div>
</nav>

<div class="wrapper m-t-30">
    @yield('body')
</div>

<div class="clearfix"></div>

</body>
</html>
