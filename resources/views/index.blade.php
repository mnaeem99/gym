<!DOCTYPE html>
<html lang="zxx">

@include('layout.head')
<body>
    <!-- Page Preloder -->
    @include('layout.loader')
    
    <!-- Header Section Begin -->
    @include('layout.header')
    <!-- Header End -->
    <!-- Content  -->
    @yield('content')
    <!-- // Content  -->
        
    
    <!-- Footer Section Begin -->
    @include('layout.footer')
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    @include('layout.jsfiles')
</body>

</html>