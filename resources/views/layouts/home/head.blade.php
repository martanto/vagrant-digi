<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name') }}</title>

    <!-- Meta -->
    <meta name="description" content="{{ config('app.tag_line') }}">
    <meta name="author" content="Martanto">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.png') }}">

    <!-- vendor css -->
    <link href="{{ asset('vendors/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/cryptofont/css/cryptofont.min.css') }}" rel="stylesheet">

    @yield('add-vendor-css')

    <link rel="stylesheet" href="{{ asset('css/dashforge.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashforge.dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/digi.css') }}">
</head>
