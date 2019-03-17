@extends('layouts.app')
@section('content')

<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
<section class="jumbotron text-center" style="background: scroll center url('/images/about/about.jpg');">
    <div class="container" style="height:200px" >
    </div>
</section>

<div class="text-center" style="padding:30px;">
    <h2>Menus</h1>
    <p>Monday - Friday 7 to 11 am.</p>
    <p>Saturday &amp; Sunday 7am to 2 pm.</p>
    <p>Caffe Marchio is cash-free.</p>
</div>

{{-- Menu --}}
<div class="container">
   <div class="row">
      <div class="col-md-6" style="padding-right:20px; border-right: 1px solid #ccc; ">
         <section class="menu-section" style="padding:20px;">
            <div class="menu-section__header">
               <h2>BREAKFAST</h2>
            </div>
            <ul>
               <li class="menu-item">
                  <p class="menu-item__heading">YOGURT BERRY PARFAIT</p>
                  <p class="menu-item__details menu-item__details--price"> <strong><span class="menu-item__currency">Rs </span>6</strong>
                  </p>
               </li>
               <li class="menu-item">
                  <p class="menu-item__heading">STEEL-CUT OATS</p>
                  <p>Almond Milk &amp; Housemade Jam
                     Add Banana 1.00
                  </p>
                  <p class="menu-item__details menu-item__details--price"> <strong><span class="menu-item__currency">Rs </span>7</strong>
                  </p>
               </li>
            </ul>
         </section>
         <section class="menu-section" style="padding:20px; border-top: 1px solid #ccc;">
            <div class="menu-section__header">
                <br>
               <h2>EGG SANDWICHES</h2>
               Served on Buttermilk Biscuit
            </div>
            <ul>
               <li class="menu-item">
                  <p class="menu-item__heading">CLASSIC</p>
                  <p>Pecorino Toscano, Grana Padano</p>
                  <p class="menu-item__details menu-item__details--price"> <strong><span class="menu-item__currency">Rs </span>7</strong>
                  </p>
               </li>
               <li class="menu-item">
                  <p class="menu-item__heading">MARCHIO</p>
                  <p>Bacon, Pecorino Toscano</p>
                  <p class="menu-item__details menu-item__details--price"> <strong><span class="menu-item__currency">Rs </span>9</strong>
                  </p>
               </li>
               <li class="menu-item">
                  <p class="menu-item__heading">VEGETABLE</p>
                  <p>Butternut Squash, Arugula, Grana Padano</p>
                  <p class="menu-item__details menu-item__details--price"> <strong><span class="menu-item__currency">Rs </span>9</strong>
                  </p>
               </li>
               <li class="menu-item">
                  <p class="menu-item__heading">COPPA COTTA</p>
                  <p>Grana Padano</p>
                  <p class="menu-item__details menu-item__details--price"> <strong><span class="menu-item__currency">Rs </span>9</strong>
                  </p>
               </li>
            </ul>
         </section>
      </div>
      <div class="col-md-6">
         <section class="menu-section" style="padding:20px; border-bottom: 1px solid #ccc;">
            <div class="menu-section__header">
               <h2>DAILY PASTRIES</h2>
            </div>
            <ul>
               <li class="menu-item">
                  <p class="menu-item__heading">Cornetto</p>
                  <p class="menu-item__details menu-item__details--price"> <strong><span class="menu-item__currency">Rs </span>3.50</strong>
                  </p>
               </li>
               <li class="menu-item">
                  <p class="menu-item__heading">Specorino</p>
                  <p class="menu-item__details menu-item__details--price"> <strong><span class="menu-item__currency">Rs </span>4.50</strong>
                  </p>
               </li>
               <li class="menu-item">
                  <p class="menu-item__heading">Ciambellone</p>
                  <p class="menu-item__details menu-item__details--price"> <strong><span class="menu-item__currency">Rs </span>3.50</strong>
                  </p>
               </li>
               <li class="menu-item">
                  <p class="menu-item__heading">Apple Fritter</p>
                  <p class="menu-item__details menu-item__details--price"> <strong><span class="menu-item__currency">Rs </span>4</strong>
                  </p>
               </li>
               <li class="menu-item">
                  <p class="menu-item__heading">Bomboloni</p>
                  <p class="menu-item__details menu-item__details--price"> <strong><span class="menu-item__currency">Rs </span>3</strong>
                  </p>
               </li>
               <li class="menu-item">
                  <p class="menu-item__heading">Fruit &amp; Oat Bar</p>
                  <p class="menu-item__details menu-item__details--price"> <strong><span class="menu-item__currency">Rs </span>3.50</strong>
                  </p>
               </li>
               <li class="menu-item">
                  <p class="menu-item__heading">Cornetto Di Cioccolato</p>
                  <p class="menu-item__details menu-item__details--price"> <strong><span class="menu-item__currency">Rs </span>4</strong>
                  </p>
               </li>
               <li class="menu-item">
                  <p class="menu-item__heading">Torta Di Mela</p>
                  <p class="menu-item__details menu-item__details--price"> <strong><span class="menu-item__currency">Rs </span>4.50</strong>
                  </p>
               </li>
            </ul>
         </section>
         {{-- <section class="menu-section"> --}}
         <section class="menu-section" style="padding:20px;">
            <div class="menu-section__header">
               <h2>COOKIES</h2>
            </div>
            <ul>
               <li class="menu-item">
                  <p class="menu-item__heading">Almond Biscotti</p>
                  <p class="menu-item__details menu-item__details--price"> <strong><span class="menu-item__currency">Rs </span>2.50</strong>
                  </p>
               </li>
               <li class="menu-item">
                  <p class="menu-item__heading">Chocolate Hazelnut</p>
                  <p>Gluten Free</p>
                  <p class="menu-item__details menu-item__details--price"> <strong><span class="menu-item__currency">Rs </span>3</strong>
                  </p>
               </li>
               <li class="menu-item">
                  <p class="menu-item__heading">Ricotta Chocolate Chip</p>
                  <p class="menu-item__details menu-item__details--price"> <strong><span class="menu-item__currency">Rs </span>3</strong>
                  </p>
               </li>
               <li class="menu-item">
                  <p class="menu-item__heading">Ventaglio</p>
                  <p class="menu-item__details menu-item__details--price"> <strong><span class="menu-item__currency">Rs </span>4</strong>
                  </p>
               </li>
               <li class="menu-item">
                  <p class="menu-item__heading">Ciavattini</p>
                  <p class="menu-item__details menu-item__details--price"> <strong><span class="menu-item__currency">Rs </span>3.50</strong>
                  </p>
               </li>
               <li class="menu-item">
               </li>
            </ul>
         </section>
      </div>
   </div>
</div>
@include('inc.footer')
<!-- Bootstrap core JavaScript
   ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>

@endsection
