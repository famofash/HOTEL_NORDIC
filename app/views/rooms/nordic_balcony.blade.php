@extends('master')
@section('body')
<!-- Parallax Effect -->
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
              <li><a href="{{url('/rooms')}}">Room list view</a></li>
              <li class="active">Room detail</li>
            </ol>
            <h1>Room detail</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="container">
  <div class="row"> 
    <!-- Slider -->
    <section class="room-slider standard-slider mt50">
      <div class="col-sm-12 col-md-8">
        <div id="owl-standard" class="owl-carousel">
          <div class="item"> <a href="{{asset('assets/images/rooms/nordic_suite_balcony/room-1.JPG')}}" data-rel="prettyPhoto[gallery1]"><img src="{{asset('assets/images/rooms/nordic_suite_balcony/room-1.JPG')}}" alt="Bed" class="img-responsive"></a> </div>
          <div class="item"> <a href="{{asset('assets/images/rooms/nordic_suite_balcony/room-2.JPG')}}" data-rel="prettyPhoto[gallery1]"><img src="{{asset('assets/images/rooms/nordic_suite_balcony/room-2.JPG')}}" alt="Bathroom" class="img-responsive"></a> </div>
           <div class="item"> <a href="{{asset('assets/images/rooms/nordic_suite_balcony/room-3.JPG')}}" data-rel="prettyPhoto[gallery1]"><img src="{{asset('assets/images/rooms/nordic_suite_balcony/room-3.JPG')}}" alt="Bathroom" class="img-responsive"></a> </div>
          <div class="item"> <a href="{{asset('assets/images/rooms/nordic_suite_balcony/room-4.JPG')}}" data-rel="prettyPhoto[gallery1]"><img src="{{asset('assets/images/rooms/nordic_suite_balcony/room-4.JPG')}}" alt="Bathroom" class="img-responsive"></a> </div>
          <div class="item"> <a href="{{asset('assets/images/rooms/nordic_suite_balcony/room-5.JPG')}}" data-rel="prettyPhoto[gallery1]"><img src="{{asset('assets/images/rooms/nordic_suite_balcony/room-5.JPG')}}" alt="Bathroom" class="img-responsive"></a> </div>
          <div class="item"> <a href="{{asset('assets/images/rooms/nordic_suite_balcony/room-6.JPG')}}" data-rel="prettyPhoto[gallery1]"><img src="{{asset('assets/images/rooms/nordic_suite_balcony/room-6.JPG')}}" alt="Bathroom" class="img-responsive"></a> </div>
       
        </div>
      </div>
    </section>
    
    <!-- Reservation form -->
    <section id="reservation-form" class="mt50 clearfix">
      <div class="col-sm-12 col-md-4">
        <form class="reservation-vertical clearfix" role="form" method="post" onsubmit="create_booking('reservationform','{{URL::to('addbooking')}}');event.preventDefault();" id="reservationform">
          <h2 class="lined-heading"><span>Reservation</span></h2>
          <div class="price">
            <h4>The Nordic Suite Balcony</h4>
            &#8358; 39,500,-<span> a night</span></div>
          <div id="message"></div>
          <!-- Error message display -->
          <div class="form-group">
            <label for="email" accesskey="E">E-mail</label>
            <input name="email" type="text" id="email" value="" class="form-control" placeholder="Please enter your E-mail"/>
          </div>
          <div class="form-group">
            <select class="hidden" name="room" id="room" disabled="disabled">
                 <option value="Single">The Nordic Suite Balcony</option>
             
            </select>
          </div>
          <div class="form-group">
            <label for="checkin">Check-in</label>
            <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-In is from 11:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
            <i class="fa fa-calendar infield"></i>
            <input name="check-in" type="text" id="checkin" value="" class="form-control" placeholder="Check-in"/>
          </div>
          <div class="form-group">
            <label for="checkout">Check-out</label>
            <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-out is from 12:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
            <i class="fa fa-calendar infield"></i>
            <input name="check-out" type="text" id="checkout" value="" class="form-control" placeholder="Check-out"/>
          </div>
          <div class="form-group">
            <div class="guests-select">
              <label>Guests</label>
              <i class="fa fa-user infield"></i>
              <div class="total form-control" id="test">1</div>
              <div class="guests">
                <div class="form-group adults">
                  <label for="adults">Adults</label>
                  <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="+18 years"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                  <select name="adults" id="adults" class="form-control">
                    <option value="1">1 adult</option>
                    <option value="2">2 adults</option>
                    <option value="3">3 adults</option>
                  </select>
                </div>
                <div class="form-group children">
                  <label for="children">Children</label>
                  <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="0 till 18 years"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                  <select name="children" id="children" class="form-control">
                    <option value="0">0 children</option>
                    <option value="1">1 child</option>
                    <option value="2">2 children</option>
                    <option value="3">3 children</option>
                  </select>
                </div>
                <button type="button" class="btn btn-default button-save btn-block">Save</button>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Book Now</button>
            <input type="hidden" name="room" value="{{$roomid}}"/>
        </form>
      </div>
    </section>
    
    <!-- Room Content -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-sm-7 mt50">
            <h2 class="lined-heading"><span>Room Details</span></h2>
            <h3 class="mt50">Table overview</h3>
            <table class="table table-striped mt30">
              <tbody>
                <tr>
                  <td><i class="fa fa-check-circle"></i> Double Bed</td>
                  <td><i class="fa fa-check-circle"></i> Free Internet</td>
                  <td><i class="fa fa-check-circle"></i> Bed room (360m x 350m)  </td>
                </tr>
                <tr>
                 <td><i class="fa fa-check-circle"></i> seating room/balcony (724m x 323m)
                                                         </td>
                  <td><i class="fa fa-check-circle"></i> Modern bathroom</td>
                  <td><i class="fa fa-check-circle"></i> 2 persons</td>
                </tr>
                <tr>
                  <td><i class="fa fa-check-circle"></i> Refrigerator</td>
                  <td><i class="fa fa-check-circle"></i> Secured parking space </td>
                  <td><i class="fa fa-check-circle"></i> Breakfast included</td>
                </tr>
                <tr>
                  <td><i class="fa fa-check-circle"></i> Private Balcony</td>
                  <td><i class="fa fa-check-circle"></i> Flat Screen TV</td>
                  <td><i class="fa fa-check-circle"></i> Jacuzzi</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-sm-5 mt50">
            <h2 class="lined-heading"><span>Overview</span></h2>
            
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
              <li class="active"><a href="#overview" data-toggle="tab">Overview</a></li>
             
              <li><a href="#extra" data-toggle="tab">Extra</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
              <div class="tab-pane fade in active" id="overview">
              <p>Spaciously sized with a king size bed. A large sitting area, a writing desk, a Full Size Bathtub with luxurious bath products and the scented candles. 
                  This room is perfect not only for business but also for a romantic getaway.</p>  
              <p>
                  <h3 class="p1">Rates</h3>
                  <ul>
<li>Executive Suite: &#8358; 39,500 </li>
<li>Breakfast included in the room rate.</li>
</ul>  <p>All prices are exclusive 5% VAT</p>
              </p>
              <p>Check-in from 3.00 pm</p>
              <p>Check-out by 12.00 noon</p>
              </div>
        <div class="tab-pane fade" id="extra">We offer freshly prepared breakfast and various snacks every day. 
                  You will find restaurants within a 10 minute commute from The Nordic Villa.</div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>

@stop