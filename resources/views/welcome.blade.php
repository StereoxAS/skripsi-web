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
                        <a href="/browse">Beranda</a>
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
                        <a href="{{ route('login') }}">Masuk</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" method="POST">Daftar</a>
                        @endif
                    @endauth
                </div>
                <div class="content">
                    <div class="title m-b-md">
                        <img class="mb-4" src="/images/logo.png" alt="" width="180" height="180">
                    </div>
                    <div class="title m-b-md">
                        Knowledge Base
                    </div>
                    @if (Route::has('login'))
                        @auth
                            <div class="links">
                                <a href="/upload"   >Unggah Dokumen</a>
                                <a href="/browse"   >Beranda</a>
                                <a href="/about"    >Tentang Situs</a>
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