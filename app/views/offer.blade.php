@extends('master')
@section('body')
<script type="text/javascript">$(document).ready(function(){$('#parallax-pagetitle').parallax("50%", -0.55);});</script>

<section class="parallax-effect">
  <div id="parallax-pagetitle" style="background-image: url(./images/parallax/parallax-01.jpg);">
    <div class="color-overlay"> 
      <!-- Page title -->
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <ol class="breadcrumb">
              <li><a href="{{url('/')}}">Home</a></li>
              <li class="active">offer</li>
            </ol>
            <h1>Our Offers</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Filter -->


<!-- Rooms -->
<section class="rooms mt100">
  <div class="container">
    <div class="row room-list fadeIn appear"> 
      <!-- Room -->
      <div class="col-sm-4 nordic_balcony">
          <div class="room-thumb"> <img src="{{asset('assets/images/offers/car-parking.jpg')}}" style="width: 350px; height: 300px" alt="room 1" class="img-responsive" />
          <div class="mask">
            <div class="main">
              <h5>Secured Parking</h5>
             
            </div>
            <div class="content">
              <p> We offer free, secure parking within a gated compound.
                  We also offer specific needs in regards to vehicle storage, please call in advance..</p>
              
             
            </div>
          </div>
        </div>
      </div>
      <!-- Room -->
      <div class="col-sm-4 nordic_suite apartment">
        <div class="room-thumb"> <img src="{{asset('assets/images/offers/transport.jpg')}}" alt="room 2" class="img-responsive" />
          <div class="mask">
            <div class="main">
              <h5>Transport in Abuja</h5>
             
            </div>
            <div class="content">
              <p>  The Nordic Hospitality Suite we are happy to arrange transportation during your stay in Abuja.
                  We have a good cooperation with Corporate Cab Drivers,we will provide you with a great high-end cars with air condition and qualified drivers..</p>
            
            
            </div>
          </div>
        </div>
      </div>
      <!-- Room -->
      <div class="col-sm-4 deluxe_balcony apartment">
        <div class="room-thumb"> <img src="{{asset('assets/images/offers/payment.png')}}" alt="room 3" class="img-responsive" />
          <div class="mask">
            <div class="main">
              <h5>Payment made easy</h5>
            
            </div>
            <div class="content">
                <p>
                    We provide easy means of payment. We accept Bank Transfer, 
Paying with a Nigerian issued debit/credit card (Naira) or International issued MasterCard and 
Cash payment at check-in.
                </p>
            </div>
          </div>
        </div>
      </div>
      <!-- Room -->
      <div class="col-sm-4 deluxe executive">
        <div class="room-thumb"> <img src="{{asset('assets/images/offers/special-occasion.jpg')}}" alt="room 4" class="img-responsive" />
          <div class="mask">
            <div class="main">
              <h5>Special occasion celebration</h5>
              
            </div>
            <div class="content">
                <p>
                    Are you celebrating a special occasion while you are staying in The Nordic Hospitality Suite, please let us know. We would love to help make your birthday,
                    anniversary or other event just a little more special.
                </p>
           
            </div>
          </div>
        </div>
      </div>
     
   
    </div>
  </div>
</section>

@stop