@include('user.layouts.head')
    <body>
        <!-- Navigation-->
        @include('user.layouts.header')
        <!-- Main Content-->
        @yield('main_content')

        <!-- Footer-->
         @include('user.layouts.footer')
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('user/js/scripts.js') }}"></script>
    </body>
</html>
