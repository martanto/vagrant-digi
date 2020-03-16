<div class="aside-body">
    <div class="aside-loggedin">
        <div class="aside-loggedin-user">
            <a href="#loggedinMenu" class="d-flex align-items-center justify-content-between mg-b-2"
                data-toggle="collapse">
                <h6 class="tx-semibold mg-b-0">{{ auth()->user()->name }}</h6>
                <i data-feather="chevron-down"></i>
            </a>
            <p class="tx-color-03 tx-12 mg-b-0">Administrator</p>
        </div>
        <div class="collapse show" id="loggedinMenu">
            <ul class="nav nav-aside mg-b-0">
                <li class="nav-item">
                    <a href="" class="nav-link"><i data-feather="edit"></i> <span>Rubah Profile</span></a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link"><i data-feather="user"></i> <span>Lihat Profile</span></a>
                </li>
                <li class="nav-item">
                    <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="nav-link">
                        <i data-feather="log-out"></i> <span>Sign Out</span></a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
                    @csrf
                </form>
            </ul>
        </div>
    </div>
    @include('layouts.digi.nav-side')
</div>
