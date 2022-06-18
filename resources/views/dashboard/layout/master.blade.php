<!DOCTYPE html>
<html lang="en">
@include('dashboard.layout.particals.head')
<body class="light rtl">
    @include('dashboard.layout.particals.pageloader')
    <div class="overlay"></div>

    @include('dashboard.layout.particals.navbar')

    <div>

        @include('dashboard.layout.particals.slidleft')
        @include('dashboard.layout.particals.slidright')

    </div>
    @include('sweet::alert')
    @yield('content')
  <script src="{{asset('/js/dashboard/jquery-3.6.0.min.js')}}"></script>
  
    @stack('scripts')


</body>

</html>
