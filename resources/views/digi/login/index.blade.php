<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Twitter -->
    <meta name="twitter:site" content="@antoitb">
    <meta name="twitter:creator" content="{{ config('app.author') }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ config('app.name') }}">
    <meta name="twitter:description" content="{{ config('app.tag_line' )}}">
    {{-- <meta name="twitter:image" content="http://themepixels.me/dashforge/img/dashforge-social.png"> --}}

    <!-- Facebook -->
    <meta property="og:url" content="{{ config('app.url') }}">
    <meta property="og:title" content="{{ config('app.name') }}">
    <meta property="og:description" content="{{ config('app.tag_line') }}">
    {{-- <meta property="og:image" content="http://themepixels.me/dashforge/img/dashforge-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/dashforge/img/dashforge-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600"> --}}

    <!-- Meta -->
    <meta name="description" content="{{ config('app.tag_line') }}">
    <meta name="author" content="{{ config('app.author') }}">

    <!-- Favicon -->
    <link href="{{ asset('favicon.ico') }}" rel="shortcut icon">

    <title>Digital Geofisika</title>

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('vendors/@fortawesome/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/ionicons/css/ionicons.min.css') }}">

    <!-- DashForge CSS -->
    <link rel="stylesheet" href="{{ asset('css/dashforge.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashforge.auth.css') }}">
</head>

<body>

    <div class="content content-fixed content-auth">
        <div class="container">
            <div class="media align-items-stretch justify-content-center ht-100p pos-relative">
                <div class="sign-wrapper mg-lg-l-50 mg-xl-l-60">
                    <div class="wd-100p">
                        <h3 class="tx-color-01 mg-b-5">Sign In</h3>
                        <p class="tx-color-03 tx-16 mg-b-40">Selamat Datang! Harap Sign In untuk melanjutkan.</p>

                        <form method="post" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label>Email address</label>
                                <input name="email" type="email" class="form-control" placeholder="Masukkan email Anda">
                            </div>

                            <div class="form-group">
                                <div class="d-flex justify-content-between mg-b-5">
                                    <label class="mg-b-0-f">Password</label>
                                </div>
                                <input name="password" type="password" class="form-control" placeholder="Masukkan password Anda">
                            </div>

                            @if(count($errors) > 0)
                            <div class="form-group">
                                <div class="alert alert-danger">
                                    <ul class="list-unstyled">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            @endif

                            <button type="submit" class="btn btn-brand-02 btn-block">Sign In</button>
                            <div class="tx-13 mg-t-20 tx-center">Tidak punya akun? <a href="page-signup.html">Daftar di sini</a></div>
                        </form>
                    </div>
                </div><!-- sign-wrapper -->
            </div><!-- media -->
        </div><!-- container -->
    </div><!-- content -->

    <footer class="footer">
        <div>
            <span>&copy; {{ now()->format('Y') }} DiGi v0.0.1 </span>
            <span>Dibuat oleh <a href="https://itb.ac.id">Teknik Geofisika | FTTM | Institut Teknologi Bandung</a></span>
        </div>
        <div>
            <nav class="nav">
                <a href="#" class="nav-link">Licenses</a>
                <a href="#" class="nav-link">Change Log</a>
            </nav>
        </div>
    </footer>

	<script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
	<script src="{{ asset('vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('vendors/feather-icons/feather.min.js') }}"></script>
	<script src="{{ asset('vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

	<script src="{{ asset('js/dashforge.js') }}"></script>
</body>

</html>
