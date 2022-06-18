<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @section('pagetitle')
            koosharayan|Admin Panel
        @show
    </title>
    <meta name="description" content>
    <meta name="keywords" content>
    <meta name="author" content="RedGraphic.ir">
    <script src="{{asset('js/app.js')}}"></script>
<!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/favicon.png">

    <!-- Bootstrap & Plugins CSS -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="{{ asset('/css/blue.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/rtl.css') }}" rel="stylesheet" type="text/css">

    @if (Request::RouteIs('fea.single'))
        <!-- Bootstrap & Plugins CSS -->

        <link href="{{ asset('/css/magnific-popup.css') }}" rel="stylesheet" type="text/css">
    @endif

</head>
