<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @extends('skeleton')
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name')}}</title>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                        <a href="/browse">Browse</a>
                    @auth
                        <!-- 
                        <a href="{{ url('/home') }}">Home</a>
                        -->
                        <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
        </a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" method="POST">Register</a>
                        @endif
                    @endauth
                </div>
                <div class="content">
                    <div class="title m-b-md">
                        Knowledge Base
                    </div>
                    @if (Route::has('login'))
                        @auth
                            <div class="links">
                                <a href="/upload"   >Upload</a>
                                <a href="/browse"   >Browse</a>
                                <a href="/about"    >About</a>
                            </div>
                        @endauth
                    @endif
                </div>
            @endif

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