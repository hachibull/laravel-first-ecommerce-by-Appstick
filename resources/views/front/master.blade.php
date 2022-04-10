<!DOCTYPE html>
<html class="no-js" lang="en">

@include('front.include.head')

    <body class="body-class home-page">
        <!-- pre-loder-area area start here  -->
        <div class="preloader">
            <span class="loader">
                <span class="loader-inner"></span>
            </span>
        </div>
        <!-- pre-loder-area area start here  -->
        <!-- header area start here  -->
@include('front.include.header')
        <!-- header area end here  -->
        <!-- mobile-header-area start here  -->
@include('front.include.mobile-header')
        <!-- mobile-header-area end here  -->
        <!-- offcanvase menu area start here  -->
        <div class="panel-backdrop "></div>
@include('front.include.menu')
        <!-- offcanvase menu area end here  -->
        <!-- slider two area start here  -->
@yield('content')
        <!-- blog area end here  -->
        <!-- footer area start here  -->
@include('front.include.footer')
        <!-- footer area end here  -->
        <!-- Modal -->
@include('front.include.modal')
        <!-- Modal end -->
        
@include('front.include.script')
    </body>
</html>
