<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('public/bs5/bootstrap.min.css')}}" rel="stylesheet" >
    <script type="text/javascript" src="{{asset('public/bs5/bootstrap.bundle.min.js')}}"></script>
    <title>Illyrian Palace</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <div class="container">
    <a class="navbar-brand" href="#">Illyrian Palace Hotel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Booking</a>
        </li>
      </ul>
    </div>
  </div>
</nav>



<!-- Slider start -->
<div id="carouselExampleDark" class="carousel carousel-dark slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="{{asset('public/images/hotel.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>VIP Treatment </h5>
        <p>>Our VIP Suite is the epitome of exclusivity and luxury. With unparalleled views of the city skyline and an array of lavish amenities, our VIP Suite is the perfect retreat for discerning travelers. Indulge in personalized service and amenities that cater to your every whim, and experience the ultimate in luxury travel.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="{{asset('public/images/vip.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Extravagance</h5>
        <p>Experience the pinnacle of luxury at our exclusive hotel. From the moment you step into our grand lobby, you'll be swept away by the opulence and elegance of our surroundings. Our accommodations are the epitome of luxury, with plush furnishings, stunning views, and all the modern amenities you need to feel pampered and indulged.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('public/images/bazen.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Indulgent Spa</h5>
        <p>Our luxurious spa is the ultimate retreat for those seeking relaxation and rejuvenation. From the moment you step into our tranquil spa environment, you'll feel the stress of daily life melt away. Our experienced therapists offer a range of indulgent treatments designed to nourish the mind, body, and soul. </p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Slider end -->

<!-- Services start -->
<div class="container mt-4">
    <h1 class="text-center border-bottom ">Services</h1>

    <div class="row mt-4">
        <div class="col-mid-4">
        <img src="{{asset('public/images/service.jpg')}}" class="img-thumbnail width 200" alt="...">
        </div>
        <div class="col-mid-8">
            <h3>Superb costumer advisory</h3>
            <p>Get the most amazing customer service at Illyrian Palace</p>
            <a class="btn btn-sm btn-primary" href="">Read more</a>
        </div>
    </div>
</div>
<!-- Services end -->


</body>
</html>
