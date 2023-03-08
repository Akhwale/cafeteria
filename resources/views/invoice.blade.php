 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
</head>
<body>

    <div class="container">
    <div class="row ">
        <div class="col-8 pt-5 border-5 border-bottom border-dark">
            <h1 style="font-size: 80px"><i># INVOICE</i></h1>
        </div>
        <div class="col-4">
            <h4 style="background-color:black;text-align:right;color:#F0E68C">The Senior Staff<span style="color:darkgreen; font-family:sans-serif fw-bold"> Common Room</span></h4>
            <p style="text-align:right">
                The Technical University Of Kenya<br>
                P.O. Box 52428 - 00200<br>
                Nairobi - Kenya<br>
                Haile Selassie Avenue<br>
                Tel: +254(020) 2219929, 3341639, 3343672<br>
                General inquiries: info@tukenya.ac.ke<br>
               </p>  
        </div>
      </div>

      <div class="container">
        <div class="row pt-2">   
          <div class="col"># Customer ID: {{ Auth::id()}}</div>
          <div class="col"># Order ID: </div>
          <div class="col"># Tracking No:</div>
          <div class="col"># Date:</div>
        </div>
      </div>

      <div class="container">
        <div class="row pt-2 ">
            <div class="col-4">
                <b>Bill To:</b>
                @foreach ($data as $data)
                <p style="text-align:left">
                    {{ $data->name }}<br>
                    Email: {{ $data->email }}<br>
                    Paymentmethod: Mpesa<br>
                    Tel: +254(020) 2219929, 3341639, 3343672<br>
                    General inquiries: info@tukenya.ac.ke<br>
                   </p>
                  @endforeach
            </div>
            <div class="col-8">
                <h3 class="text-end">Terms & Notes</h3>
                <p class="text-center pt-2" style="font-size:10px">
                   Hey 'Aaron' Thank you for shopping with us. We highly value your satisfaction as our esteemed customer<br>
                   Kindly confirm your billing details before proceeding to make a payment.<br>
                   You are also highly advised to download a copy of your receipt from your email.<br>
                   It is worth noting that in case of any queries you will be required to produce a copy of the same<br>
                   as proof of payment<br></p>
                <h5 class="text-end pt-2" style="font-size:15px">By Management</h5>
            </div>
          </div>
      </div>

      <div class="container">
        <table class="table table-borderd">
  
            <tr style="background-color:black;color:#F0E68C">
                <th>#Item Id</th>
                <th>Item Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
            </tr>

            @foreach ($items as $item)
            <tr>
              <td>{{ $item->id }}</td>
              <td>{{ $item->items->name }}</td>
              <td>{{ $item->quantity }}</td>
              <td>{{ $item->items->price }}</td>
              <td>{{ $item->items->price*$item->quantity }}</td>     
            </tr>
            @endforeach
            
        </table>
      </div>

      
      <div class="container" style="float:right;margin:auto;float:right">
        <table class="table table-borderd position-relative  w-25" >
  
            <tr style="background-color:black;color:#F0E68C">
                
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
            </tr>

            @foreach ($items as $item)
            <tr>
              
              <td>{{ $item->quantity }}</td>
              <td>{{ $item->items->price }}</td>
              <td>{{ $item->items->price*$item->quantity }}</td>     
            </tr>
            @endforeach
            
        </table>
      </div>


<!--footer section-->
<div class="pt-5">
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
</div>
   
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
