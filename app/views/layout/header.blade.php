<!-- Top header -->
<div id="top-header">
  <div class="container">
    <div class="row">
      <div class="col-xs-6">
        <div class="th-text pull-left"> For Reservation:
          <div class="th-item"> <a href="#"><i class="fa fa-phone"></i>+2347080266555 </a> </div>
          <div class="th-item"> <a href="#"><i class="fa fa-envelope"></i>info@nordichospitalitysuites.com </a></div>
        </div>
      </div>
      <div class="col-xs-6">
        <div class="th-text pull-right">
        
          <div class="th-item">
            <div class="social-icons"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-youtube-play"></i></a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Header -->
<header>
  <!-- Navigation -->
  <div class="navbar yamm navbar-default" id="sticky">
    <div class="container">
      <div class="navbar-header">
       <a href="{{url('/')}}" class="navbar-brand">         
        <!-- Logo -->
        <div id="logo"> <img id="default-logo" src="{{asset('assets/images/logo-grey.png')}}" alt="Starhotel" style="width: 160px;height: auto">

        </div>
        </a> </div>
      <div id="navbar-collapse-grid" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="dropdown active"> <a href="{{url('/')}}">Home</a>
          </li>
          <li class="dropdown"> <a href="#" data-toggle="dropdown" class="dropdown-toggle js-activated">Rooms <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="{{url('/rooms/nordicbalcony')}}">The Nordic Suite Balcony</a></li>
              <li><a href="{{url('/rooms/nordicsuites')}}">The Nordic Suite</a></li>
              <li><a href="{{url('/rooms/deluxebalcony')}}">The Deluxe Balcony</a></li>
              <li><a href="{{url('/rooms/deluxe')}}">The Deluxe Room</a></li>
              <li><a href="{{url('/rooms/standard')}}">The Standard Room</a></li>
            </ul>
          </li>
          <li class="dropdown"> <a href="{{url('/offer')}}"  class="">Our Offer</a>
           
          </li>
          <li class="dropdown"> <a href="{{url('/about')}}">About the Hotel</a>
            
          </li>
          <li> <a href="{{url('/gallery')}}">Gallery</a></li>
          <li> <a href="{{url('/contact')}}" target="_new" >Contact</b></a>
               <li> <a href="{{url('/terms')}}" target="_new" >Terms & Conditions</b></a>
            
          </li>
        </ul>
      </div>
    </div>
  </div>
</header>
