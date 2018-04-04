<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>{{ config('app.name', 'iBudaya') }}</title>
        @include('inc.style')        
        @include('inc.script')
    </head>
    
    <body>
        @include('inc.navbar')
        <div class="container">
            @if(Request::is('/'))
                @include('inc.showcase')
                
            @else
                <div class="row" style="margin-top: 15px;">
                    <div class="col-md-8 col-lg-8">
                        @include('inc.messages')
                        @yield('content')
                    </div>
                    <div class="col-md-4 col-lg-4">
                        @include('inc.sidebar')
                    </div>
                </div>
            @endif
        </div>
    
        <footer class="footer" id="footer">
          <div class="container">
            <span class="text-muted">Copyright 2018 &copy; Nusantara | <a href="/contact">Contact Us</a></span> 
             
          </div>
        </footer>

    </body>
</html>