<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Senior Staff Common Room</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- GL-JS (A client-side JS libfor building web mapp/apps using Mapbox technology-->
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />

    <!--CSS Custom Styling-->
    <style>
        .carousel-item{
          height: 70vh;
          background:#777;
          position: relative;
          opacity:0.9;
        }
  
        .carousel-item img{
          height: 70vh;
        }
    </style>
</head>

<body>

 <!--Navbar-->   
    <nav class="navbar navbar-expand-lg  navbar-dark" style="background-color:black; border-bottom:10px solid darkgreen">
        <div class="container" style="background-color:black">
          <div class="navbar-brand d-flex">
            <img src="{{ url('/images/TUK_logo.png') }}" class="ms-2 pt-0 d-flex" style="height:50px; width: 40px" alt="..." >
            <h2 class="text-center fw-bold font-family-sans-serif" style="color:#F0E68C">The Senior Staff<span style="color:darkgreen; font-family:sans-serif"> Common Room</span></h2>
          </div>
    
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu"><span class="navbar-toggler-icon"></span></button>
    
          <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav ms-auto">
                @if (Route::has('login'))
                <div class="hidden fixed top-0 px-6 d-flex">
                    @auth
                        <li>
                            <a href="{{ url('/home') }}" class="nav-link">Home</a>
                        </li>
                    @else
                        <li>
                            <a href="{{ route('login') }}" class="btn btn-primary text-light text-decoration-none">Log in</a>
                        </li>
                    @if (Route::has('register'))
                        <li>
                            <a href="{{ route('register') }}" class="btn btn-outline-success">Register</a>
                        </li>
                    @endif
                    @endauth
                </div>
                @endif
              </ul>
            </div>
          </div> 
      </nav>

<!--- Carousel design-->        
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
  
    <!-- wrapper class for carousel items-->
    <div class="carousel-inner">
  
    <!-- carousel items(images and captions)-->
      <div class="carousel-item active d-flex">
        <img src="{{ url('/images/beef.jpg') }}" class="d-flex w-50" alt="..."> 
        <img src="{{ url('/images/biriyani.png') }}" class="d-flex w-25" alt="...">
        <img src="{{ url('/images/chicken.png') }}" class="d-flex w-25" alt="...">
        <div class="carousel-caption d-none d-md-block end-0  w-75">
          <h1 class="fw-bold bg-primary  pt-2 pb-2 rounded-pill">Get Quality Food Just when you need it</h2>
          <a href="{{ route('login') }}" class="btn btn-lg btn-danger rounded-pill">Place an Order!!!</a>
        </div>
      </div>
  
      <div class="carousel-item">
        <div class="d-sm-flex">
          <img src="{{ url('/images/online.jpeg') }}" class="d-block w-50" alt="...">
          <img src="{{ url('/images/delivery.jpg') }}" class="d-block w-50" alt="...">
        </div>
        <div class="carousel-caption d-none d-md-block end-0  w-75">
          <h1 class="fw-bold bg-success  pt-2 pb-2 rounded-pill">Get Deliveries from your Desk</h2>
          <a href="{{ route('login') }}" class="btn btn-lg btn-danger rounded-pill">Place an Order!!!</a>
        </div>
      </div>
      
  <!--Carousel scrolling buttons-->
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  
      </div>
    </div>
    </div>
  </div>


<!--footer section-->
<section class="footer text-light "  style="background-color: black">

    <div class=" bg-black container pt-1">
        
        <div class="row g-4">
          <h2 class="text-center fw-bold font-family-sans-serif" style="color:#F0E68C">The Senior Staff<span style="color:darkgreen; font-family:sans-serif"> Common Room</span></h2>
        <div class="col-md-4 col-lg-4 " style="text-align:center">
            <img src="{{ url('/images/TUK_logo.png') }}" style="height:200px" alt="..." > 
        </div>

        <div class="col-md-4 col-lg-4" style="text-align:center">
            <p style="text-align: center">The Technical University Of Kenya<br>
            P.O. Box 52428 - 00200<br>
            Nairobi - Kenya<br>
            Haile Selassie Avenue<br>
            Tel: +254(020) 2219929, 3341639, 3343672<br>
            General inquiries: info@tukenya.ac.ke<br>
            Feedback/Compalints/Suggestions : customercare@tukenya.ac.ke<br>
            Official Communication: vc@tukenya.ac.ke</p>         
        </div>
  
        <div class="col-md-4 col-lg-4 " style="text-align:center">
          <div id="map"  style="width:350px; height:200px">
            <script>
                mapboxgl.accessToken = 'pk.eyJ1IjoiY2hyaXotZmxhbmtlciIsImEiOiJja3g2ZDNxb3UxZm0wMm5vMXpvZGEyaW9lIn0.DvI1FKSeXT28p8Qbt3s9TA';
                var map = new mapboxgl.Map({
                container: 'map',
                style: 'mapbox://styles/mapbox/streets-v11',
                center: [36.8219,-1.286389],
                zoom:12
                });
              </script>
              </div>
            </div>
          </div>
          <div class="row g-4 ">
            <h4 class="text-center fw-bold">powered by <span style="color:darkblue">SCIE</span>SEC</h4>
          </div>
        </div>
     
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
