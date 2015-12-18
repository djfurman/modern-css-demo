<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body class="@yield('body_class')">

    @include('partials.topNav')

    @yield('partials.section')

    @include('partials.media')

    @include('partials.footer')

</body>
</html>