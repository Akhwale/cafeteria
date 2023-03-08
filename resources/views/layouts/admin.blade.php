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
  .container input{
        width:500px;
        height:40px;
        text-align: center;
        outline: none;
    }
  .container select{
        width:500px;
        height:40px;
        text-align: center;
        outline: none;

  }

</style>


</head>
<body>

 <!--Navbar-->   
    <nav class="navbar navbar-expand-lg  navbar-dark" style="background-color:black">
        <div class="container" style="background-color:black">
          <div class="navbar-brand d-flex">
            <img src="{{ url('/images/TUK_logo.png') }}" class="ms-2 pt-0 d-flex" style="height:50px; width: 40px" alt="..." >
            <h2 class="text-center fw-bold font-family-sans-serif" style="color:#F0E68C">Admin <span style="color:darkgreen; font-family:sans-serif"> Console</span></h2>
          </div>
    
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu"><span class="navbar-toggler-icon"></span></button>
    
          <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav ms-auto">
              <li>  
                <a href="" class="nav-link">Active-Orders</a>
              </li>
                <li>  
                    <a href="" class="nav-link">Deliveries</a>
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

     
<!---side nav-->

<div class="d-flex vh=100" >
  <div class="d-block" style="background-color:black" >
  <div class="row bg-light w-100 vh-100">
    <div class= "col bg-light">
    <div class="card bg-light" >
        <div class="card-header text-center">
            <img src="{{ url('images/TUK.png') }}" alt="" class="rounded-circle img-fluid pb-2 mx-0">
            
            <h4 class="card-title">{{ Auth::user()->name }}</h4>
        </div>
        <div class="card-body pt-0 px-0 w-100">
            <div class="list-group ">
                <a href="{{ url('/sscradmin') }}" class="list-group-item list-group-item-action active"  aria-current="true">Dashboard</a>
                <a href="{{url('/additems') }}" class="list-group-item list-group-item-action">Add Items</a>
                <a href="{{url('/viewitems') }}" class="list-group-item list-group-item-action ">View Items</a>
                <a href="{{url('/deleteitems') }}" class="list-group-item list-group-item-action">Delete Items</a>
            </div>

        <div class="list-group pt-3">
            <a href="{{ url('/viewusers') }}" class="list-group-item list-group-item-action">View Users</a>
            <a href="{{ url('/vieworder') }}" class="list-group-item list-group-item-action">View Orders</a>
        </div>
        </div>
    </div>        
    </div>
</div>
</div>

<div class="col d-block " >
  <div class=" text-light w-100  float-end position-relative top-0 end-0" style="background-color:black">
   <h2 style="border-left:5px solid darkorange;padding-left:25px;padding-bottom:5px">@yield('heading')</h2> 
@yield('content')
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

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
