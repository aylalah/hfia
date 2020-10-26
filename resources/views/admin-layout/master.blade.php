<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       
    <title>HFIA ADMIN</title>
    
        @include('admin-layout.head')
    </head>
    <body data-col="2-columns" class=" 2-columns" >
        <div class="wrapper" >
            <div class="main-panel" >
                <!-- BEGIN : Main Content-->
                <div class="main-content">
            @include('admin-layout.header')
        
            @yield('content')
            </div>
            @include('admin-layout.footer')    
            @include('admin-layout.footer-script')    
        </div>  
    </body>
</html>