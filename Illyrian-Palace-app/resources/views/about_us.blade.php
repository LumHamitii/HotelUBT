<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('public/css/about.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>ILLYRIAN PALACE</title>
</head>

<body>
    <header>
        <nav>
            <div class="logo">
              <a href=""><img src="{{asset('public/images/logo.png')}}" alt="ILLYRIAN PALACE HOTEL"></a>  
              
            </div>
            <ul class="nav-links">
                <li><a href="{{url('/')}}">HOME</a></li>
                <li><a href="#">ROOMS</a></li>
                <li><a href="{{url('page/about-us')}}">ABOUT</a></li>
                <li><a href="#">CONTACT</a></li>
                <li> <a href="{{url('login.blade.php')}}"><i class="fa-regular fa-user"></i></a></li>
               

            </ul>
        </nav>
    </header>
    
    <main>
    <div class="banner" style="background-image:url('{{asset('public/images/h1.jpg')}}');">
       <div class="banner-content">
       <h4 class="our-s">Our services</h4>
        <h1 class="ab-us">About us</h1>
       </div>
        </div>
    </div>

    <section class="cool">
        <div class="container-cool">
             <div class="para">
                <h3>PERFECT LOCATION</h3>
                <h2>Nearby Places</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia dolores culpa iusto, adipisci magni veniam doloribus? Facere cupiditate modi ipsa excepturi tempora architecto culpa porro natus. Labore delectus sed quibusdam!</p>            
            </div>
            <div class="card1">
            <div class="card-wrapper">
            <div class="card-img">

            </div>
            <div class="place">
                <h2></h2>
            </div>
            </div>
             </div>    
             <div class="card2">
            <div class="card-wrapper">
            <div class="card-img">
                
            </div>
            <div class="place">
                <h2></h2>
            </div>
            </div>
             </div>
        </div>
    </section>
    </main>
</body>
</html>