<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('js/jquery-3.2.1.slim.min.js') }}" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
{{-- <script> --}}
{{--   Holder.addTheme('thumb', { --}}
{{--     bg: '#55595c', --}}
{{--     fg: '#eceeef', --}}
{{--     text: 'Thumbnail' --}}
{{--   }); --}}
{{-- </script> --}}
<style>
header div .carousel-item {
  height: 100vh;
  min-height: 350px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>

{{-- <script src="{{ asset('js/app.js') }}"></script> --}}
<script>
var scrolling = false;
var currentPos = 0;

    function scrollUp(){
        if(!scrolling && currentPos > 0 ){
            scrolling=true;
            currentPos --;
            var scrollToElement = $('.scrollTo')[currentPos];

            $('html, body').animate({
                scrollTop: $(scrollToElement).offset().top
            }, 500, function(){
                scrolling = false;
            });      
        }
    }   

    function scrollDown(){   
        if(!scrolling && currentPos < $('.scrollTo').length-1  ){
            scrolling=true;
            currentPos ++;
            var scrollToElement = $('.scrollTo')[currentPos];

            $('html, body').animate({
                scrollTop: $(scrollToElement).offset().top
            }, 500,function(){
                scrolling = false;
            }); 
        }
    }    

    $(document).ready(function() {

        // Get the current position on load

        for( var i = 0; i < $('.scrollTo').length; i++){
            var elm = $('.scrollTo')[i];

            if( $(document).scrollTop() >= $(elm).offset().top ){
                currentPos = i;
            }
        }

        $(document).bind('DOMMouseScroll', function(e){
            if(e.originalEvent.detail > 0) {
                scrollDown();
            }else {
                scrollUp();   
            }
            return false;
        });

        $(document).bind('mousewheel', function(e){
            if(e.originalEvent.wheelDelta < 0) {
                scrollDown();
            }else {
                scrollUp();     
            }
            return false;
        });
    });
</script>
@extends('layouts.app')
@section('content')
    {{-- First Slide --}}
<header class='scrollTo'>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('/images/index/index3.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <p class='lead font-weight-bold '>Everyday Kringle Favorites Every slice is a celebration!  For over 65 years, the Olesen family has continued to use the traditional methods of Old Denmark to make our Kringle. Each Kringle takes 3 full days to make, resulting in 36 delicate layers for a truly flaky and flavorful pastry. Combine our scratch made fillings from the finest ingredients we can find, you are certain to find a flavor suited just for you. With thirteen delectable and award-winning flavors, you'll find a favorite for everyone on your list.</p>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('/images/index/index5.jpg')">
        <div class="carousel-caption d-none d-md-block">
          {{-- <h2 class="display-4">Second Slide</h2> --}}
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('/images/index/index7.jpg')">
        <div class="carousel-caption d-none d-md-block">
          {{-- <h2 class="display-4">Third Slide</h2> --}}
          {{-- <p class="lead">This is a description for the third slide.</p> --}}
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
</header>

    {{-- Second Slide --}}
<header class='scrollTo'>
  <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('/images/index/index9.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h1>GrG's Bakery</h1>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('/images/index/index4.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h1>GrG's Bakery</h1>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('/images/index/index1.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h1>GrG's Bakery</h1>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
</header>

    {{-- Third Slide --}}
<header class='scrollTo'>
  <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('/images/index/index10.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h2 align='center'>GrG's Bakery</h2>
          <h2 align='center'>"Place where cakes get SHAPED" </h2>
          <h2 align='center'>Contact us on 9813633705 </h2>
          <h2 align='center'>Viber :: +977 9813633705 </h2>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('/images/index/cover.jpg')">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('/images/index/cover1.jpg')">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
</header>

<header class='scrollTo'>
@include('inc.footer')
</header>


@endsection
