<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       
    <title>FGCMW</title>
    
        @include('layouts.head')
    </head>
    <body>
        <div class="flex-center position-ref full-height"> 
    @include('layouts.header')
   
      @yield('content')

    </div>  
    @include('layouts.footer')    
    @include('layouts.footer-script')    
    </body>
</html>