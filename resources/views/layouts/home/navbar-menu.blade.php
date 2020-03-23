<div id="navbarMenu" class="navbar-menu-wrapper">
    <div class="navbar-menu-header">
        <a href="{{ route('home') }}" class="df-logo">.: di<span>gi</span></a>
        <a id="mainMenuClose" href=""><i data-feather="x"></i></a>
    </div>
    <ul class="nav navbar-menu justify-content-center">
        <li class="nav-label pd-l-20 pd-lg-l-25 d-lg-none">Navigasi Utama</li>
        <li class="nav-item {{ active('home') }}"><a href="{{ route('home') }}" class="nav-link"><i data-feather="box"></i>Home</a></li>
        <li class="nav-item with-sub {{ active('station') }}">
            <a href="" class="nav-link"><i data-feather="package"></i> Apps</a>
            <ul class="navbar-menu-sub">
                <li class="nav-sub-item"><a href="{{ route('station') }}" class="nav-sub-link"><i data-feather="calendar"></i>Stations</a></li>
                <li class="nav-sub-item"><a href="{{ route('station') }}" class="nav-sub-link"><i data-feather="calendar"></i>Waveforms</a></li>
            </ul>
        </li>
        <li class="nav-item {{ active('data.*') }}"><a href="{{ route('data') }}" class="nav-link"><i data-feather="box"></i>Data</a></li>
        <li class="nav-item {{ active('data.*') }}"><a href="#" class="nav-link"><i data-feather="box"></i>Tentang Kami</a></li>
    </ul>
</div>
