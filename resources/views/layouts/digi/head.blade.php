<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Twitter -->
    <meta name="twitter:site" content="@antoitb">
    <meta name="twitter:creator" content="@antoitb">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ config('app.name')}}">
    <meta name="twitter:description" content="{{ config('app.tag_line')}}">
    {{-- <meta name="twitter:image" content="http://themepixels.me/dashforge/img/dashforge-social.png"> --}}

    <!-- Facebook -->
    <meta property="og:url" content="{{ config('app.url') }}">
    <meta property="og:title" content="{{ config('app.name') }}">
    <meta property="og:description" content="{{ config('app.tag_line') }}">

    <!-- Meta -->
    <meta name="description" content="{{ config('app.tag_line') }}">
    <meta name="author" content="{{ config('app.author') }}">

    <!-- Favicon -->
    <link href="{{ asset('favicon.ico') }}" rel="shortcut icon">

    <title>Digital Geofisika</title>

    <link rel="stylesheet" href="{{ asset('vendors/@fortawesome/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/ionicons/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/dashforge.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashforge.dashboard.css') }}">
</head>
