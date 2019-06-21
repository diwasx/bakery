@extends('layouts.app')
@section('content')

<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
<link href="{{ asset('css/modal.css') }}" rel="stylesheet">
<main role="main">

<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

  <div class="row featurette">
    <div class="">
    </div>
  </div>

<div class="row">
  <div class="col-sm-2"></div>
  <div class="col-sm-8">
      <h2 class="featurette-heading">About us</h2>
      <p class="lead">GrG's Bakery honors the Roman tradition of delicious coffee in an energetic and convivial environment.  Open from morning through early evening, GrG's Bakery serves up a proprietary roast designed to evoke the gutsy character of Roman espresso and to complement the array of breakfast sandwiches and traditional Italian pasticcerie by Pastry Chef Jessica Weiss.  At midday, casual and hearty Roman inspired fare, including sandwiches, salads and soups will be available along with an afternoon selection of beer and wine.  As in the neighborhood coffee bars of Rome, the airy interiors are lined with terrazzo countertops for stand-up, on-the-go refueling. </p>
  </div>
  <div class="col-sm-2"></div>
</div>

  <hr class="featurette-divider">

  <!-- Three columns of text below the carousel -->
  <h2 class="featurette-heading text-center">Our Team</h2>
  <br>
  <div class="row">

    <div class="col-lg-4">
      <img class="rounded-circle" src="/images/about/mayuri.png" alt="Generic placeholder image" width="240" height="240">
      <h2>Mayuri Shina</h2>
      <p>EXECUTIVE CHEF</p>
      <a class="btn btn-secondary modal-trigger" href="#" data-modal="modal-name" role="button">View details &raquo;</a>

<!-- Modal -->
<div class="modal" id="modal-name">
  <div class="modal-sandbox"></div>
  <div class="modal-box">
    <div class="modal-header">
      <div class="close-modal">&#10006;</div> 
      <h1>Shina Mayuri</h1>
    </div>
    <div class="modal-body">
      <p>Shina Mayuri</p>
      <p>I am mayuriGrG's Bakery honors the Roman tradition of delicious coffee in an energetic and convivial environment. Open from morning through early evening, GrG's Bakery serves up a proprietary roast designed to evoke the gutsy character of Roman espresso and to complement the array of breakfast sandwiches and traditional Italian pasticcerie by Pastry Chef Jessica Weiss. At midday, casual and hearty Roman inspired fare, including sandwiches, salads and soups will be available along with an afternoon selection of beer and wine. As in the neighborhood coffee bars of Rome, the airy interiors are lined with terrazzo countertops for stand-up, on-the-go refueling.</p>
      <br />
      <button class="close-modal">Close!</button>
    </div>
  </div>
</div>

    </div><!-- /.col-lg-4 -->

    <div class="col-lg-4">
      <img class="rounded-circle" src="/images/about/shao.jpg" alt="Generic placeholder image" width="240" height="240">
      <h2>Shao Yuwei</h2>
      <p>ASSOCIATE DIRECTOR OF OPERATIONS</p>
      <a class="btn btn-secondary modal-trigger" href="#" data-modal="modal-name1" role="button">View details &raquo;</a>

<!-- Modal -->
<div class="modal" id="modal-name1">
  <div class="modal-sandbox"></div>
  <div class="modal-box">
    <div class="modal-header">
      <div class="close-modal">&#10006;</div> 
      <h1>Shao Yuwei</h1>
    </div>
    <div class="modal-body">
      <p>Shao Yuwei</p>
      <p>Singing is my passon</p>
      <br />
      <button class="close-modal">Close!</button>
    </div>
  </div>
</div>

    </div><!-- /.col-lg-4 -->

    <div class="col-lg-4">
      <img class="rounded-circle" src="/images/about/astrid.jpg" alt="Generic placeholder image" width="240" height="240">
      <h2>Astird</h2>
      <p>EXECUTIVE PASTRY CHEF</p>
      <a class="btn btn-secondary modal-trigger" href="#" data-modal="modal-name2" role="button">View details &raquo;</a>
<!-- Modal -->
<div class="modal" id="modal-name2">
  <div class="modal-sandbox"></div>
  <div class="modal-box">
    <div class="modal-header">
      <div class="close-modal">&#10006;</div> 
      <h1>Shao Yuwei</h1>
    </div>
    <div class="modal-body">
      <p>Hunter</p>
      <p>I ride dragon</p>
      <br />
      <button class="close-modal">Close!</button>
    </div>
  </div>
</div>

    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img class="rounded-circle" src="/images/about/nerdlol.jpg" alt="Generic placeholder image" width="240" height="240">
      <h2>Computer Guy</h2>
      <p>DIRECTOR OF OPERATIONS</p>
      <a class="btn btn-secondary modal-trigger" href="#" data-modal="modal-name3" role="button">View details &raquo;</a>
<!-- Modal -->
<div class="modal" id="modal-name3">
  <div class="modal-sandbox"></div>
  <div class="modal-box">
    <div class="modal-header">
      <div class="close-modal">&#10006;</div> 
      <h1>Computer </h1>
    </div>
    <div class="modal-body">
      <p>Hello World</p>
      <p>I am incharge here</p>
      <br />
      <button class="close-modal">Close!</button>
    </div>
  </div>
</div>
    </div><!-- /.col-lg-4 -->

  </div><!-- /.row -->


  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-4 order-md-2">
        <h3 class=""><strong>Hours and Location</strong></h3>
        <br>
        <pre class="lead">
Nakhipot, Bishal Chowk
Patan 44700, Nepal

Open Every Day : 7AM - 6PM
        </pre>

    </div>
    <div class="col-md-7 order-md-1">

    {{-- Google Map --}}
    <style>
     #map {
       width: 100%;
       height: 500px;
       background-color: grey;
     }
    </style>
    <script>
    // Initialize and add the map
    function initMap() {
      // The location of Uluru
      var uluru = {lat: 27.65097154109523, lng: 85.318024456501};
      // The map, centered at Uluru
      var map = new google.maps.Map(
          document.getElementById('map'), {zoom: 18, center: uluru});
      // The marker, positioned at Uluru
      var marker = new google.maps.Marker({position: uluru, map: map});
    }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap">
    </script>

    <div id="map"></div>

    </div>

  {{-- End of map --}}

    </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
        <h3 class=""><strong>Contact us</strong></h3>
        <br>
        <pre class="lead">
"Place where cakes get SHAPED"
 Contact us on 9813633705
 Viber :: +977 9813633705
        </pre>
    </div>
    <div class="col-md-5">
      <img class="featurette-image img-fluid mx-auto" src="/images/contact.jpg" alt="Generic placeholder image">
    </div>
  </div>

  <hr class="featurette-divider">

  <!-- /END THE FEATURETTES -->

</div><!-- /.container -->
</main>
@include('inc.footer')

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
{{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
<script src="{{ asset('js/jquery-3.2.1.slim.min.js') }}" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
        
    <script>
        /*
===============================================================

Hi! Welcome to my little playground!

My name is Tobias Bogliolo. 'Open source' by default and always 'responsive',
I'm a publicist, visual designer and frontend developer based in Barcelona. 

Here you will find some of my personal experiments. Sometimes usefull,
sometimes simply for fun. You are free to use them for whatever you want 
but I would appreciate an attribution from my work. I hope you enjoy it.

===============================================================
*/

$(".modal-trigger").click(function(e){
  e.preventDefault();
  dataModal = $(this).attr("data-modal");
  $("#" + dataModal).css({"display":"block"});
  // $("body").css({"overflow-y": "hidden"}); //Prevent double scrollbar.
});

$(".close-modal, .modal-sandbox").click(function(){
  $(".modal").css({"display":"none"});
  // $("body").css({"overflow-y": "auto"}); //Prevent double scrollbar.
});
    </script>
@endsection
