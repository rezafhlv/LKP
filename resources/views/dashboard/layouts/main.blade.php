<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    @include('dashboard.partials.head')
    <title>@yield('title', 'Dashboard') | LKP KOMINFO</title>
    @yield('head')
    <style>
        body {
            background-image: url("{{ asset('images/background/background.jpg') }}");
            background-size: cover;
        }
    </style>
</head>

<body class="d-flex h-100 text-center text-white flex-column">

    <!-- Page content -->
    <div class="container" id="page-content">
        <div class="header @@classList">
            <!-- Header -->
            @include('dashboard.partials.header')
            <!-- / Header -->
        </div>


        {{-- Content --}}
        @yield('content')
    </div>

    <!-- Scripts -->
    @include('dashboard.partials.scripts')

    @yield('scripts')
</body>

</html>
