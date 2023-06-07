
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('public/css/home.css')}}">
    <title>ILLYRIAN PALACE</title>
</head>

<body>
    <header>
        <nav>
            <div class="logo">
              <a href=""><img src="{{asset('public/images/logo.png')}}" alt="ILLYRIAN PALACE HOTEL"></a>  
              
            </div>
            <ul class="nav-links">
                <li><a href="#">HOME</a></li>
                <li><a href="#">ROOMS</a></li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="#">CONTACT</a></li>
                <!-- Authentication Links -->
                @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
            </ul>
        </nav>
    </header>
    <main>
        <div class="video-container">
            <video id="background-video" src="{{asset('public/videos/banner.mp4')}}" autoplay muted></video>
            <div class="video-overlay">
                <h1>Welcome to Illyrian Palace Hotel</h1>
                <p>Experience luxury and comfort like never before.</p>
                <a href="" class="book-btn">Book now</a>
            </div>
        </div>

        <div class="services">
          <h1>Our Services</h1>
        </div>
    </main>

    <script>
        const video = document.getElementById('background-video');

        video.addEventListener('ended', function () {
            video.currentTime = 0;
            video.play();
        });
    </script>
</body>

</html>

