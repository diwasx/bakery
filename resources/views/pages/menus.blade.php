@extends('layouts.app')
@section('content')

<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
<section class="jumbotron text-center" style="background: scroll center url('/images/about/about.jpg');">
    <div class="container" style="height:200px" >
    </div>
</section>

<div class="text-center" style="padding:30px;">
    <h2>We Bake.</h1>
    <p>Monday - Friday 7 to 11 am.</p>
    <p>Saturday &amp; Sunday 7am to 2 pm.</p>
    
</div>

{{-- Menu --}}
<div class="container">
   <div class="row">
      <div class="col-md-6" style="padding-right:20px; border-right: 1px solid #ccc; ">
         <section class="menu-section" style="padding:20px;">
            <div class="menu-section__header">
               <h2>ESPECIAL FLAVOUR</h2>
            </div>
            <ul>
               <li class="menu-item">
                  <p class="menu-item__heading">Oreo Kitkat Cake</p>
                  <p class="menu-item__details menu-item__details--price"> <strong><span class="menu-item__currency">Rs </span>800/-</strong>
                  </p>
               </li>
               <li class="menu-item">
                  <p class="menu-item__heading">Red Velvet Cake</p>
                  
                  <p class="menu-item__details menu-item__details--price"> <strong><span class="menu-item__currency">Rs </span>1000/-</strong>
                  </p>
               </li>
               <li class="menu-item">
                  <p class="menu-item__heading">Fruit Cake</p>
                  
                  <p class="menu-item__details menu-item__details--price"> <strong><span class="menu-item__currency">Rs </span>800/-</strong>
                  </p>
               </li>
               <li class="menu-item">
                  <p class="menu-item__heading">Mocha Cake</p>
                  
                  <p class="menu-item__details menu-item__details--price"> <strong><span class="menu-item__currency">Rs </span>800/-</strong>
                  </p>
               </li>

            </ul>
         </section>
         <section class="menu-section" style="padding:20px; border-top: 1px solid #ccc;">
            <div class="menu-section__header">
                <br>
               <h2>CUPCAKES</h2>
               
            </div>
            <ul>
               <li class="menu-item">
                  <p class="menu-item__heading">Vanilla</p>
                  <p class="menu-item__details menu-item__details--price"> <strong><span class="menu-item__currency">Rs </span>30</strong>
                  </p>
               </li>
               <li class="menu-item">
                  <p class="menu-item__heading">Chocolate</p>
                 
                  <p class="menu-item__details menu-item__details--price"> <strong><span class="menu-item__currency">Rs </span>40</strong>
                  </p>
               </li>
               <li class="menu-item">
                  <p class="menu-item__heading">Red Velvet</p>
                  
                  <p class="menu-item__details menu-item__details--price"> <strong><span class="menu-item__currency">Rs </span>50</strong>
                  </p>
               </li>
               <li class="menu-item">
                  <p class="menu-item__heading">Choco. Banana</p>
                  
                  <p class="menu-item__details menu-item__details--price"> <strong><span class="menu-item__currency">Rs </span>35</strong>
                  </p>
               </li>
            </ul>
         </section>
      </div>
      <div class="col-md-6">
         <section class="menu-section" style="padding:20px; border-bottom: 1px solid #ccc;">
            <div class="menu-section__header">
               <h2>REGULAR FLAVOUR</h2>
            </div>
            <ul>
               <li class="menu-item">
                  <p class="menu-item__heading">Black Forest Cake</p>
                  <p class="menu-item__details menu-item__details--price"> <strong><span class="menu-item__currency">Rs </span>550/-</strong>
                  </p>
               </li>
               <li class="menu-item">
                  <p class="menu-item__heading">White Forest Cake</p>
                  <p class="menu-item__details menu-item__details--price"> <strong><span class="menu-item__currency">Rs </span>570</strong>
                  </p>
               </li>
               <li class="menu-item">
                  <p class="menu-item__heading">Chocolate Cake</p>
                  <p class="menu-item__details menu-item__details--price"> <strong><span class="menu-item__currency">Rs </span>650</strong>
                  </p>
               </li>
               <li class="menu-item">
                  <p class="menu-item__heading">Strawberry Cake</p>
                  <p class="menu-item__details menu-item__details--price"> <strong><span class="menu-item__currency">Rs </span>600/-</strong>
                  </p>
               </li>
               <li class="menu-item">
                  <p class="menu-item__heading">Vanilla Cake</p>
                  <p class="menu-item__details menu-item__details--price"> <strong><span class="menu-item__currency">Rs </span>500/-</strong>
                  </p>
               </li>
               <li class="menu-item">
                  <p class="menu-item__heading">Chocovanilla Cake</p>
                  <p class="menu-item__details menu-item__details--price"> <strong><span class="menu-item__currency">Rs </span>600/-</strong>
                  </p>
               </li>
               <li class="menu-item">
                  <p class="menu-item__heading">Butterscotch Cake</p>
                  <p class="menu-item__details menu-item__details--price"> <strong><span class="menu-item__currency">Rs </span>600/-</strong>
                  </p>
               </li>
               <li class="menu-item">
                  <p class="menu-item__heading">Pineapple Cake</p>
                  <p class="menu-item__details menu-item__details--price"> <strong><span class="menu-item__currency">Rs </span>600/-</strong>
                  </p>
               </li>
               <li class="menu-item">
                  <p class="menu-item__heading">Orange Cake</p>
                  <p class="menu-item__details menu-item__details--price"> <strong><span class="menu-item__currency">Rs </span>600/-</strong>
                  </p>
               </li>
               <li class="menu-item">
                  <p class="menu-item__heading">Mango Cake</p>
                  <p class="menu-item__details menu-item__details--price"> <strong><span class="menu-item__currency">Rs </span>600/-</strong>
                  </p>
               </li>
               <li class="menu-item">
                  <p class="menu-item__heading">Coffee Cake</p>
                  <p class="menu-item__details menu-item__details--price"> <strong><span class="menu-item__currency">Rs </span>700/-</strong>
                  </p>
               </li>
            </ul>
         </section>
      </div>
   </div>
</div>
@include('inc.footer')
<script src="{{ asset('js/jquery-3.2.1.slim.min.js') }}" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>

@endsection
