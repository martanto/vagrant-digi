<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

@include('layouts.digi.head')

<body>
    <aside class="aside aside-fixed">
        @include('layouts.digi.aside-header')
        @include('layouts.digi.aside-body')
    </aside>

    <div class="content ht-100v pd-0">
        <div class="content-header">
            <div class="content-search"></div>
            <nav class="nav">
                <a href="" class="nav-link"><i data-feather="grid"></i></a>
                <a href="" class="nav-link"><i data-feather="align-left"></i></a>
            </nav>
        </div><!-- content-header -->

        <div class="content-body">
            @yield('content-body')
        </div>
    </div>

    <!-- Vendor scripts -->
    @include('layouts.digi.script')

</body>

</html>
