<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    @include('includes.style')
</head>

<body>
    <!-- Navbar -->
    @include('includes.navbar')
    <!-- End of navbar -->

    @yield('content')

    <!-- footer -->
    @include('includes.script')
    @stack('addon-script')
</body>

</html>
