<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

@include('layouts.home.head')

<body class="page-profile">
    <header class="navbar navbar-header navbar-header-fixed">
        <a href="" id="mainMenuOpen" class="burger-menu"><i data-feather="menu"></i></a>

        <div class="navbar-brand">
            <a href="{{ route('home') }}" class="df-logo">.: di<span>gi</span></span></a>
        </div><!-- navbar-brand -->

        @include('layouts.home.navbar-menu')

        <div class="navbar-right">
            <a href="{{ route('login') }}" class="nav-link">Sign In</a>
        </div>
    </header>

    @yield('content')

    @include('layouts.home.footer')

    <!-- Vendor scripts -->
    @include('layouts.home.script')
</body>

</html>
