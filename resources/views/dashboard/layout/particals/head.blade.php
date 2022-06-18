<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>
        @section('pagetitle') - Bootstrap 4 Admin Dashboard Template
        @show
    </title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


  

    <link href="{{ asset('/css/dashboard/app.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/dashboard/materialize-rtl.min.css') }}" rel="stylesheet">
    <!-- Custom Css -->
    <link href="{{ asset('/css/dashboard/style.css') }}" rel="stylesheet">
    <!-- You can choose a theme from css/styles instead of get all themes -->
    <link href="{{ asset('/css/dashboard/all-themes.css') }}" rel="stylesheet">
</head>
