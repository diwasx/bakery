@extends("layouts.app")
@section("content")
    <link href="{{ asset('/lightbox/ekko-lightbox.css') }}" rel="stylesheet">
    <script src="{{ asset('/lightbox/ekko-lightbox.js') }}" defer></script>
    <script src="{{ asset('/lightbox/ekko-lightbox.js.map') }}" defer></script>

<!-- Removing whitespace -->
    <style> 
    body{
        padding-bottom: 0px;
    }

    footer{
        postion: absolute;
    }

    </style>

<header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">About</h4>
              <p class="text-muted">Baking cookies is comforting, and cookies are the sweetest little bit of comfort food. They are very bite-sized and personal.</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Contact</h4>
              <ul class="list-unstyled">
                <li><a href="https://www.instagram.com/grgsbakery/" target="_blank" class="text-white">Follow on Instagram</a></li>
                <li><a href="#" class="text-white">Like on Facebook</a></li>
                <li><a href="#" class="text-white">Email me</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
            <strong>Our Product</strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>

    <main role="main">

      <section class="jumbotron text-center" style="background: scroll center url('/images/bg.jpg')">
        <div class="container" >
          <h1 class="jumbotron-heading text-light">Grg Bakery</h1>
          <p class="lead text-info">The smell of good bread baking, like the sound of lightly flowing water, is indescribable in its evocation of innocence and delight.</p>
          <p>
            <a href="#" class="btn btn-primary my-2">Main call to action</a>
            <a href="#" class="btn btn-secondary my-2">Secondary action</a>
          </p>
        </div>
      </section>

      <div class="album py-5 bg-light" style="background-image: linear-gradient(to right top, #eebad7, #f1b0d9, #f2a6db, #f29cdf, #f093e4);">
        <div class="container" >
          <div class="row" >

            @foreach($items as $item)
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">

                {{-- Checking data --}}
                    <?php
                        $item_name=$item->name;
                        $item_id=$item->id;
                        $item_desc=$item->description;
                        $item_price="Rs. ".$item->price;
                        $src = 'img/'.$item_id.'.jpg';
                        $item_image = $item->image;
                        $src=asset($src)."?".time();
                    ?>
                      <p class="text-center bg-info">{{$item_name}}</p>
                    <img class="card-img-top" src={{$src}} alt={{$item_name}}/>
                    {{-- <img class="card-img-top" data-src="data:{{$image}}" alt="Card image cap"> --}}

                <div class="card-body">
                  <p class="card-text">{{$item_price}}</p>
                  <p class="card-text">{{$item_desc}}</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary"> <a class="nav-link" href="/checkout/{{$item_id}}">Buy</a></button>
                        {{-- <button type="button" class="btn btn-sm btn-outline-secondary">View</button> --}}
                            {{-- <img id='viewimg' src="/img/3.jpg" alt="Smiley face" style="width:100%;max-width:300px;height:100%;max-height:300px"> --}}

                        {{-- Lightbox library --}}
                        <button type="button" class="btn btn-sm btn-outline-secondary"> <a href={{$src}} class="nav-link" data-toggle="lightbox"> 
                            View 
                        </a> </button>


                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach

          </div>
        </div>
      </div>

    </main>

    <footer class="text-muted" style="background: scroll center url('/images/footer1.jpg')">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
        <p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting started guide</a>.</p>
      </div>
    </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>

    <script>
$(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
    </script>
@endsection
