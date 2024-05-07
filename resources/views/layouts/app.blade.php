@include('layouts.header')

<body>
    <script src="{{ asset('dist/js/demo-theme.min.js?1684106062') }}"></script>
    <div class="page">
        <!-- Navbar -->
        @include('layouts.header-navbar')
        <div class="page-wrapper">
            <!-- Page header -->
            @yield('body')
            @include('layouts.footer')
        </div>
    </div>
    