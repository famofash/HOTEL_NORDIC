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
              <li class="active">error</li>
            </ol>
            <h1>Page Error</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="error-404">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="fadeIn appear animated">404</h2>
        <h3 class="fadeIn appear animated" data-start="700">Well this is embarrassing... We can’t find your page.</h3>
        <a class="btn btn-lg btn-default mt30 fadeIn appear animated" data-start="1000" href="{{url('/')}}"><i class="fa fa-home"></i> Go back to home</a> </div>
    </div>
  </div>
</section>
@stop