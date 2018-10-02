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
              <li><a href="">Home</a></li>
              <li class="active">Contact</li>
            </ol>
            <h1>Contact</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="container">
  <div class="row"> 
    
    <!-- Contact details -->
    <section class="contact-details">
      <div class="col-md-5">
        <h2 class="lined-heading  mt50"><span>Address</span></h2>
        <!-- Panel -->
        <div class="panel panel-default text-left">
          <div class="panel-heading">
            <div class="panel-title"><i class="fa fa-star"></i> <strong>The Nordic Hospitality Suites</strong></div>
          </div>
          <div class="panel-body">
            <address>
      
    No. 14, Patrick O. Bokkor Crescent, <br>
      Jabi, Abuja<br>
      <abbr title="Phone">P:</abbr> <a href="#">+2347080266555</a><br>
      <abbr title="Email">E:</abbr> <a href="#">info@nordichospitalitysuites.com</a><br>
    
      </address>
          </div>
        </div>
        <!-- GMap -->
		<div class="mt30">
          <div id="map">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3939.9619260062163!2d7.426766314326674!3d9.067233190886668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e7529ee8f402b%3A0xaf42a076547b4b6f!2sPatrick.+O.+Bokkor+Cres%2C+Abuja!5e0!3m2!1sen!2sng!4v1451329505151" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
		</div>
      </div>
    </section>
    
    <!-- Contact form -->
    <section id="contact-form" class="mt50">
      <div class="col-md-7">
        <h2 class="lined-heading"><span>Send a message</span></h2>
        <p>Fill in the Form below <div id="message"></div>
        <!-- Error message display -->
        <form class="clearfix mt50" role="form" method="post" action="http://www.slashdown.nl/starhotel/php/contact.php" name="contactform" id="contactform">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="name" accesskey="U"><span class="required">*</span> Your Name</label>
                <input name="name" type="text" id="name" class="form-control" value=""/>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="email" accesskey="E"><span class="required">*</span> E-mail</label>
                <input name="email" type="text" id="email" value="" class="form-control"/>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="subject" accesskey="S">Subject</label>
            <select name="subject" id="subject" class="form-control">
              <option value="Booking">Booking</option>
              <option value="a Room">Room</option>
              <option value="other">Other</option>
            </select>
          </div>
          <div class="form-group">
            <label for="comments" accesskey="C"><span class="required">*</span> Your message</label>
            <textarea name="comments" rows="9" id="comments" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <label><span class="required">*</span> Spam Filter: &nbsp;&nbsp;&nbsp;3 + 1 =</label>
  		    <input name="verify" type="text" id="verify" value="" class="form-control" placeholder="Please enter the outcome" />
          </div>
          <button type="submit" class="btn  btn-lg btn-primary">Send message</button>
        </form>
      </div>
    </section>
  </div>
</div>



@stop