<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @extends('skeleton')
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="/upload"   >Upload</a>
                    <a href="/browse"   >Browse</a>
                    <a href="/about"    >About</a>
                </div>
            </div>
        </div>
    </body>
    <div class="content">
        <footer class="footer">
            <div class="container">
              <span class="text-muted">Developed by <?php echo $devName; ?></span>
            </div>
        </footer>
    </div>
</html>