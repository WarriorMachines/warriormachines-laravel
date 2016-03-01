<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Warrior Machines</title>
    <link rel="stylesheet" href="{{ elixir('css/all.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway" type="text/css">
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-73347217-1', 'auto');
        ga('send', 'pageview');
    </script>
</head>
<body>

@include('partials.nav')

@yield('content')

@include('partials.footer')

<script src="{{ elixir('js/all.js') }}"></script>
</body>
</html>
