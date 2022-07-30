<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <section class="hdr">
        <header class="inner clearfix">
            <h1 class="logo">                
                Tsak List                
            </h1>
            <p class="btn-toggle">
                <span></span>
                <span></span>
                <span></span>
            </p>
        </header>
    </section><!-- /.hdr -->
    @yield('content')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>