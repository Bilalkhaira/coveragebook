<!DOCTYPE html>
<html lang="en">
@include('admin.layouts.partials._head')

<body>
    @include('admin.layouts.partials._header')

    <!-- ===== sidebar-wrapper start ====== -->
    @include('admin.layouts.partials._sidebar')
    <!-- ====== sidebar-wrapper end ====== -->

    <main id="main" class="main">
        <!-- ====== page-content-wrapper start ====== -->
        @yield('content')
    </main>
    <!-- End #main -->

    <!-- ====== footer ====== -->
    @include('admin.layouts.partials._footer')

    <!-- ====== script ====== -->
    @include('admin.layouts.partials._scripts')
</body>

</html>