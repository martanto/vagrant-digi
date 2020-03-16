<ul class="nav nav-aside">
    <li class="nav-label">Admin</li>
    <li class="nav-item {{ active('digi.user.*') }}">
        <a href="{{ route('digi.user.index') }}" class="nav-link">
            <i data-feather="users"></i><span>Users</span>
        </a>
    </li>
    <li class="nav-item {{ active('digi.user.*') }}">
        <a href="{{ route('digi.role.index') }}" class="nav-link">
            <i data-feather="hash"></i><span>Roles</span>
        </a>
    </li>

    <li class="nav-label mg-t-25">Data</li>
    <li class="nav-item">
        <a href="" class="nav-link">
            <i data-feather="pie-chart"></i><span>Data Monitoring</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="" class="nav-link">
            <i data-feather="bar-chart-2"></i><span>Ketersedian Data</span>
        </a>
    </li>

    <li class="nav-label mg-t-25">Tools</li>
    <li class="nav-item">
        <a href="" class="nav-link">
            <i data-feather="activity"></i><span>RSAM</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="" class="nav-link">
            <i data-feather="folder"></i><span>Katalog Event</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="" class="nav-link">
            <i data-feather="git-pull-request"></i><span>DNA Seismik</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="" class="nav-link">
            <i data-feather="hard-drive"></i><span>File Manager</span>
        </a>
    </li>

    <li class="nav-label mg-t-25">Jobs</li>
    <li class="nav-item">
        <a href="" class="nav-link">
            <i data-feather="loader"></i><span>Running</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="" class="nav-link">
            <i data-feather="check-circle"></i><span>Completed</span>
        </a>
    </li>
</ul>
