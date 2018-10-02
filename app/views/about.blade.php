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
              <li class="active">About us</li>
            </ol>
              <h1> About the Hotel </h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="container">
  <div class="row"> 
    <!-- Blog -->
    <section class="blog mt50">
      <div class="col-md-9" > 
        <!-- Article -->
        <article>
           <img src="{{asset('assets/images/slides/slide-bg1.JPG')}}" style="width:850px; height: auto" alt="slidebg1"  data-bgfit="cover" data-bgposition="left bottom" data-bgrepeat="no-repeat"> 
          
    
        </article>
     
      </div>
    </section>
    
    <!-- Aside -->
    <aside class="mt50">
      <div class="col-md-3"> 
        <!-- Widget: Text -->
        <div class="widget">
          <h3 style="font-size: 14px;">About our Hotel</h3>
         <p>Nordic Hospitality is a boutique hotel located in Jabi.
          We offer 22 unique state of the art rooms furnished in a modern day style and decorated with designer furniture <br>
        <br>
        Our  rooms are ideal for travelers and families who want the best of leisure time. 
        <br/> 
   
        </div>
     
        <!-- Widget: Categories -->
        <div class="widget">
            <h3 style="font-size: 14px;">At The Nordic Hospitality Suites:</h3>
            <ul class="list-unstyled arrow">
                
                <li><a href="#"> AC in all rooms</a></li>
                 <li><a href="#"> Friendly staff</a></li>
		<li><a href="#">We offer 24 Hr Front Desk and Daily Housekeeping</a></li>
 
                  <li><a href="#"> Drivers available 24/7</a></li>
                   <li><a href="#"> Breakfast included in the rate</a></li>
                    <li><a href="#"> Gated compound with 24h security</a></li>
                     <li><a href="#"> Free WI-FI (high speed)</a></li>
            </ul>
         
        </div>

      
      </div>
    </aside>
  </div>
</div>


<!-- Go-top Button -->
<div id="go-top"><i class="fa fa-angle-up fa-2x"></i></div>

@stop