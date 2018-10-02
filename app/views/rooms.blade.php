@extends('master')
@section('body')
<script type="text/javascript">$(document).ready(function(){$('#parallax-pagetitle').parallax("50%", -0.55);});</script>

<section class="parallax-effect">
  <div id="parallax-pagetitle" style="background-image: url(./images/parallax/parallax-01.JPG);">
    <div class="color-overlay"> 
      <!-- Page title -->
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <ol class="breadcrumb">
              <li><a href="index.html">Home</a></li>
              <li class="active">Rooms list view</li>
            </ol>
            <h1>Rooms list view</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Filter -->
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <ul class="nav nav-pills" id="filters">
        <li class="active"><a href="#" data-filter="*">All</a></li>
        <li><a href="#" data-filter=".nordic_balcony">Nordic Suite Balcony</a></li>
        <li><a href="#" data-filter=".nordic_suite">Nordic Suite</a></li>
        <li><a href="#" data-filter=".deluxe_balcony">Deluxe Balcony</a></li>
    <li><a href="#" data-filter=".deluxe">Deluxe Suite</a></li>
    <li><a href="#" data-filter=".standard">Standard Room</a></li>
      </ul>
    </div>
  </div>
</div>

<!-- Rooms -->
<section class="rooms mt100">
  <div class="container">
    <div class="row room-list fadeIn appear"> 
      <!-- Room -->
      <div class="col-sm-4 nordic_balcony">
        <div class="room-thumb"> <img src="{{asset('assets/images/rooms/room-01.JPG')}}" alt="room 1" class="img-responsive" />
          <div class="mask">
            <div class="main">
              <h5>Nordic Suite Balcony</h5>
              <div class="price">&#8358; 39,500<span>a night</span></div>
            </div>
            <div class="content">
              <p>Spaciously sized with a king size bed. A large sitting area, a writing desk, a Full Size Bathtub with luxurious bath products and the scented candles. 
                  This room is perfect not only for business but also for a romantic getaway.</p>
              <div class="row">
                <div class="col-xs-6">
                  <ul class="list-unstyled">
                    <li><i class="fa fa-check-circle"></i> 24 hours room service</li>
                    <li><i class="fa fa-check-circle"></i> Private balcony</li>
                    <li><i class="fa fa-check-circle"></i> 32" flat screen TV</li>
                   
                  </ul>
                </div>
                <div class="col-xs-6">
                  <ul class="list-unstyled">
                    <li><i class="fa fa-check-circle"></i> Free Wi-Fi</li>
                    <li><i class="fa fa-check-circle"></i> Incl. breakfast</li>
                   <li><i class="fa fa-check-circle"></i> Individually controlled A/C</li>
                  </ul>
                </div>
              </div>
              <a href="{{url('rooms/nordicbalcony')}}" class="btn btn-primary btn-block">Book Now</a> </div>
          </div>
        </div>
      </div>
      <!-- Room -->
      <div class="col-sm-4 nordic_suite apartment">
        <div class="room-thumb"> <img src="{{asset('assets/images/rooms/room-02.JPG')}}" alt="room 2" class="img-responsive" />
          <div class="mask">
            <div class="main">
              <h5>The Nordic Suite</h5>
              <div class="price">&#8358; 35,500<span>a night</span></div>
            </div>
            <div class="content">
              <p> Our Nordic Suites are spaciously sized with a king size bed, a large sitting area, a writing desk. The Suite is furnished to suit your need, its also perfect as an office while staying with us.</p>
               <div class="row">
                <div class="col-xs-6">
                  <ul class="list-unstyled">
                    <li><i class="fa fa-check-circle"></i> 24 hours room service</li>
                   
                    <li><i class="fa fa-check-circle"></i> 32" flat screen TV</li>
                    
                  </ul>
                </div>
                <div class="col-xs-6">
                  <ul class="list-unstyled">
                    <li><i class="fa fa-check-circle"></i> Free Wi-Fi</li>
                    <li><i class="fa fa-check-circle"></i> Incl. breakfast</li>
                  <li><i class="fa fa-check-circle"></i> Individually controlled A/C</li>
                  </ul>
                </div>
              </div>
              <a href="{{url('rooms/nordicsuites')}}" class="btn btn-primary btn-block">Book Now</a> </div>
          </div>
        </div>
      </div>
      <!-- Room -->
      <div class="col-sm-4 deluxe_balcony apartment">
        <div class="room-thumb"> <img src="{{asset('assets/images/rooms/room-03.JPG')}}" alt="room 3" class="img-responsive" />
          <div class="mask">
            <div class="main">
              <h5>The Deluxe Balcony</h5>
              <div class="price">&#8358; 29,500<span>a night</span></div>
            </div>
            <div class="content">
              <p><span>A modern hotel room</span>with walk-in closet and a spacious bathroom with a full size spa tub. 
                  It has a spaciously sized king size bed, a sitting area, a writing desk. This room also features a balcony. </p>
           <div class="row">
                <div class="col-xs-6">
                  <ul class="list-unstyled">
                    <li><i class="fa fa-check-circle"></i> 24 hours room service</li>
                    <li><i class="fa fa-check-circle"></i> Private balcony</li>
                    <li><i class="fa fa-check-circle"></i> 32" flat screen TV</li>
                   
                  </ul>
                </div>
                <div class="col-xs-6">
                  <ul class="list-unstyled">
                    <li><i class="fa fa-check-circle"></i> Free Wi-Fi</li>
                    <li><i class="fa fa-check-circle"></i> Incl. breakfast</li>
                   <li><i class="fa fa-check-circle"></i> Individually controlled A/C</li>
                  </ul>
                </div>
              </div>
              <a href="{{url('rooms/deluxebalcony')}}" class="btn btn-primary btn-block">Book Now</a> </div>
          </div>
        </div>
      </div>
      <!-- Room -->
      <div class="col-sm-4 deluxe executive">
        <div class="room-thumb"> <img src="{{asset('assets/images/rooms/room-04.JPG')}}" alt="room 4" class="img-responsive" />
          <div class="mask">
            <div class="main">
              <h5>Deluxe Room</h5>
              <div class="price">&#8358; 25,500<span>a night</span></div>
            </div>
            <div class="content">
              <p>The Deluxe Rooms are spacious, King size bed with a sitting area. 
                  The Deluxe Rooms offers great comfort  have all the facilities travelers could require</p>
             <div class="row">
                <div class="col-xs-6">
                  <ul class="list-unstyled">
                    <li><i class="fa fa-check-circle"></i> 24 hours room service</li>
                     <li><i class="fa fa-check-circle"></i> 32" flat screen TV</li>
                   
                  </ul>
                </div>
                <div class="col-xs-6">
                  <ul class="list-unstyled">
                    <li><i class="fa fa-check-circle"></i> Free Wi-Fi</li>
                    <li><i class="fa fa-check-circle"></i> Incl. breakfast</li>
                   <li><i class="fa fa-check-circle"></i> Individually controlled A/C</li>
                  </ul>
                </div>
              </div>
              <a href="{{url('rooms/deluxe')}}" class="btn btn-primary btn-block">Book Now</a> </div>
          </div>
        </div>
      </div>
      <!-- Room -->
      <div class="col-sm-4 standard">
        <div class="room-thumb"><img src="{{asset('assets/images/rooms/room-05.JPG')}}" alt="room 7" class="img-responsive" />
          <div class="mask">
            <div class="main">
              <h5>Standard Rooms</h5>
              <div class="price">&#8358; 18,500<span>a night</span></div>
            </div>
            <div class="content">
              <p>Our standards Rooms are comfortably furnished with a queen sized bed,
                  a writing desk, 32" flat-screen TV, High Speed Internet. A Standard Room can accommodate one guest  </p>
              <div class="row">
                <div class="col-xs-6">
                  <ul class="list-unstyled">
                    <li><i class="fa fa-check-circle"></i> Incl. breakfast</li>
                    <li><i class="fa fa-check-circle"></i> Private balcony</li>
                    <li><i class="fa fa-check-circle"></i> Sea view</li>
                  </ul>
                </div>
                <div class="col-xs-6">
                  <ul class="list-unstyled">
                    <li><i class="fa fa-check-circle"></i> Free Wi-Fi</li>
                    <li><i class="fa fa-check-circle"></i> Incl. breakfast</li>
                    <li><i class="fa fa-check-circle"></i> Bathroom</li>
                  </ul>
                </div>
              </div>
              <a href="{{url('rooms/standard')}}" class="btn btn-primary btn-block">Book Now</a> </div>
          </div>
        </div>
      </div>
      <!-- Room -->
   
    </div>
  </div>
</section>

@stop