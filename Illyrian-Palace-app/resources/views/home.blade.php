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
                <!-- <li><a href="#">LOGIN</a></li>
                <li><a href="#">REGISTER</a></li>
                <li><a href="#">BOOKING</a></li> -->

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
