<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Haskell Solutions</title>
        
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        @include('inc.navbar')
        <div class="pt-4 container">
            @if(Request::is('/'))
                @include('inc.showcase')
            @endif
            <div class="row">
                <div class="col-md-8 col-lg-8">
                    @include('inc.messages')
                    @yield('content')
                    @if(Request::is('about'))
                        @include('inc.work')
                    @endif
                </div>
                <div class="col-md-4 col-lg-4">
                    @include('inc.sidebar')
                </div>
            </div>
            
        </div>

        <footer id="footer" class="text-center">
            <p>Copyright 2021 &copy; Haskell Solutions.</p>
        </footer>
    </body>
</html>