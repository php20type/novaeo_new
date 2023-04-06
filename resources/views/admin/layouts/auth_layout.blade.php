<!DOCTYPE html>
<html lang="en" class="">

<head>
    <!-- Site Title -->
    <title>@yield('title')</title>

   @include('admin/include/css')
   @yield('style')

</head>

<body>
    @yield('content')
    @include('admin/include/script')
    @yield('script')

</body>
</html>