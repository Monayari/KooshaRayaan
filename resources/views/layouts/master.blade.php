<!DOCTYPE html>
<html lang="en">
@include('layouts.particals.head')

<body>
        <div class="preloader-wrapper">
        <div class="loader"></div>
    </div>

    @include('layouts.particals.header')

    @include('layouts.particals.Start')
    @include('sweet::alert')
    @yield('content')

    @include('layouts.particals.footer')

    @include('layouts.particals.jquery')


</body>

</html>
