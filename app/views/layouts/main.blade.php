<!DOCTYPE html>
<html lang="ru">
<head>
    @include('include.head')
    @yield('head')
</head>

<body>
    @include('include.header')
    @yield('bron')

    <!-- BODY -->
    <div class="row site-body">
        <div class="large-8 columns">
            @yield('content')
        </div>
        <div class="large-4 columns">
            @include('include.sidebar')
        </div>
    </div>

@include('include.footer')
</body>
</html>