

@include('theme.header')
    @include('theme.top_nav')
    @include('theme.side_nav')
        @yield('content')

@include('theme.footer')
