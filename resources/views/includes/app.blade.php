<!doctype html>
<html lang="en">

@include('includes.head')

<body class="mt-5"
    style="background-image: url(img/1.jpg); height: 100vh; background-size: cover; background-position: center;">

    @include('includes.navbar')

    @yield('content')

    @include('includes.footer')


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    @include('includes.script')
</body>

</html>
