<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body class="@yield('body_class')">

    {{--@yield('partials.top-menu')--}}
    <div class="container">
        @yield('partials.section')
    </div>
    {{--@yield('partials.footer')--}}

</body>
</html>