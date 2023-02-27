<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('images/fav.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('coreui/css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('coreui/vendors/simplebar/css/simplebar.css') }}">
    <link rel="stylesheet" href="{{ asset('coreui/vendors/@coreui/icons/css/free.min.css') }}">
    <link rel="stylesheet" href="{{ asset('datatable/datatables.min.css') }}">
    <title>@yield('title')</title>
    @yield('header')
</head>

<body>
    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
        <div class="sidebar-brand d-none d-md-flex">
            <img class="sidebar-brand-full" src="{{ asset('images/p.png') }}" 
                width="100px" height="100px" style="margin:10px;" alt="">
            <img class="sidebar-brand-narrow" 
                width="46" height="46" src="{{ asset('images/p.png') }}" alt="">
        </div>
        <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
            @include('layouts.menu')
        </ul>
        <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
    </div>
5
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        <header class="header header-sticky mb-4">
            <div class="container-fluid">
                <button class="header-toggler px-md-0 me-md-3" type="button" 
                    onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
                    <i class="nav-icon icon-lg cil-menu"></i>
                </button>

                <a class="header-brand d-md-none" href="#">
                    <svg width="118" height="46" alt="CoreUI Logo">
                        <use xlink:href="assets/brand/coreui.svg#full"></use>
                    </svg>
                </a>

                <ul class="header-nav d-none d-md-flex">
                <ol class="breadcrumb my-0 ms-2">
                        <li class="breadcrumb-item">
                            <!-- if breadcrumb is single--><span>Home</span>
                        </li>
                        <li class="breadcrumb-item active"><span>@yield('breadcrumb')</span></li>
                    </ol>
                </ul>

        </header>
        
        <div class="body flex-grow-1 px-3">
            <div class="container-lg">
                @yield('content')
            </div>
        </div>
        <footer class="footer">
            <div>
                Nazkia Najidah Ramdani Studentday © 2023</div>
            <div class="ms-auto">Powered by Web Programming</div>
        </footer>
    </div>


    <script src="{{ asset('coreui/vendors/@coreui/coreui/js/coreui.bundle.min.js') }}"></script>
    <script src="{{ asset('coreui/vendors/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('datatable/datatables.min.js') }}"></script>
    @yield('footer')
</body>

</html>