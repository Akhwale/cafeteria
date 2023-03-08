<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- GL-JS (A client-side JS libfor building web mapp/apps using Mapbox technology-->
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />

<style>
  .dropdown-menu dropdown-item:hover {
    color: blue;
  }
  .carousel-item{
        height: 70vh;
        background:#777;
        position: relative;
        opacity:0.9;
      }

      .carousel-item img{
        height: 70vh;
      }
       
    #pic{
      width: 16rem; 
      height:205px;
      
    }
    #prodinf{
      padding: 0px;
      background-color:transparent;
    }
}
</style>


</head>
<body>

 <!--Navbar-->   
    <nav class="navbar navbar-expand-lg  navbar-dark" style="background-color:black">
        <div class="container" style="background-color:black">
          <div class="navbar-brand d-flex">
            <img src="{{ url('/images/TUK_logo.png') }}" class="ms-2 pt-0 d-flex" style="height:50px; width: 40px" alt="..." >
            <h2 class="text-center fw-bold font-family-sans-serif" style="color:#F0E68C">The Senior Staff<span style="color:darkgreen; font-family:sans-serif"> Common Room</span></h2>
          </div>
    
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu"><span class="navbar-toggler-icon"></span></button>
    
          <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav ms-auto">
              <li>  
                <a href="{{ url('/homepage') }}" class="nav-link">Home</a>
              </li>
              <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Categories
                    </a>
                    <ul style="background-color:black" class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                      <li><a class="dropdown-item active" href="{{url('/homepage') }}" aria-current="true">Food Hub</a></li>
                      <li><a class="dropdown-item" href="{{url('/drinks') }}">Drinks</a></li>   
                    </ul>
                  </li>
                </ul>
              </div>
                  
                  <li>  
                    <a href="" class="nav-link">About</a>
                </li>
                <li>  
                  <a href="{{ url('/mycart', Auth::user()->id) }}" class="nav-link position-relative">MyCart<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    {{ $count }}
                    <span class="visually-hidden">unread messages</span>
                  </span></a>
                </li>
                <li>  
                    <a href="" class="nav-link">Profile</a>
                </li>
                
                
                <li class="nav-item dropdown">
                  <button id="navbarDropdown" class=" btn btn-primary rounded-pill dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </button>

                  <div style="background-color:black" class="dropdown-menu dropdown-menu-dark " aria-labelledby="navbarDropdown">
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
              

              </ul>
            </div>
          </div> 
      </nav>

     

    @yield('content')

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

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
