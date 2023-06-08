<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('public/css/home.css')}}">
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
                <li><a href="#">HOME</a></li>
                <li><a href="#">ROOMS</a></li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="#">CONTACT</a></li>
                <li> <a href="login.php"><i class="fa-regular fa-user"></i></a></li>
               

            </ul>
        </nav>
    </header>
    <main>
    @yield('content')
    </main>
</body>
</html>