<!DOCTYPE html>
<html lang="en" class="">

<head>
    <!-- Site Title -->
    <title>@yield('title')</title>

    @include('admin/include/css')
    @yield('style')
</head>

<body>
    <section class="dashboard-main-section">
        @include('admin/include/sidebar')
        @yield('content')

    </section>
    @include('admin/include/script')
    @yield('script')
</body>
</html>