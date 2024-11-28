<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', env('WEB_TITLE'))</title>
    @include('components.header')
</head>

<body style="background-color:#F4F4F4">
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <script>
        $(window).resize(function() {
            let width = $(window).width();
            if (width < 992) {
                $('#sidebar').hide();
                $(".nav-item").show();
                $(".navbar-secondary-text").hide();
            } else {
                $('#sidebar').show();
                $(".nav-item").hide();
                $(".navbar-secondary-text").show();
            }
        });
        $(window).resize();
    </script>
    @stack('scripts')
</body>

</html>
