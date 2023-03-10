<!DOCTYPE html>
<html lang="en">
@include('layouts.partials._head')

<body>
    <main id="main">
        @include('layouts.partials._header')

        <!-- ===== sidebar-wrapper start ====== -->
        @include('layouts.partials._sidebar')
        <!-- ====== sidebar-wrapper end ====== -->
    </main>

    <!-- ====== page-content-wrapper start ====== -->
    @yield('content')
    <!-- End #main -->

    <!-- ====== footer ====== -->
    @include('layouts.partials._footer')

    <!-- ====== script ====== -->
    @include('layouts.partials._scripts')
</body>

</html>