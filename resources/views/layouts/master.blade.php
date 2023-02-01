<!DOCTYPE html>
<html lang="en">
@include('layouts.partials._head')

<body>
    <div class="content-wrapper">
        @include('layouts.partials._header')

        <!-- ====== page-content-wrapper start ====== -->
        @yield('content')

    </div>
    <!-- ====== footer ====== -->
    @include('layouts.partials._footer')

    <!-- ====== script ====== -->
    @include('layouts.partials._scripts')
</body>

</html>