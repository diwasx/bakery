@extends("layouts.app")
@section("content")
@include('inc.messages')
    <link href="{{ asset('/lightbox/ekko-lightbox.css') }}" rel="stylesheet">
    <script src="{{ asset('/lightbox/ekko-lightbox.js') }}" defer></script>
    <script src="{{ asset('/lightbox/ekko-lightbox.js.map') }}" defer></script>

<header>
</header>

<style>
    body, .grad-color{
        {{-- background-color: #f7f3f0; --}}
        background-image: linear-gradient(to left, #dad4ec 0%, #dad4ec 1%, #f3e7e9 100%);
    }
</style>

<main role="main">

  <section class="jumbotron text-center" style="background: scroll center url('/images/bg.jpg')">
  {{-- <section class="jumbotron text-center grad-color"> --}}
    <div class="container">
      {{-- <h1 class="jumbotron-heading text-light">Grg Bakery</h1> --}}
      <p class="lead text-info">The smell of good bread baking, like the sound of lightly flowing water, is indescribable in its evocation of innocence and delight.</p>
      <p>
        <a href="https://www.instagram.com/grgsbakery/" target="_blank" class="btn btn-primary my-2">Check out instagram for more</a>
        {{-- <a href="#" class="btn btn-secondary my-2">Secondary action</a> --}}
      </p>
    </div>
  </section>

  {{-- <div class="album py-5 bg-light" style="background-image: linear-gradient(to right top, #eebad7, #f1b0d9, #f2a6db, #f29cdf, #f093e4);"> --}}
  <div class="album py-5 bg-light grad-color" >
    <div class="container grad-color" >
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
                    $src = 'img_product/'.$item_id.'.jpg';
                    $item_image = $item->image;
                    $src=asset($src)."?".time();
                ?>
                <kbd><p class="text-center text-primary" style="font-size:18px;">{{$item_name}}</p></kbd>
                <img class="card-img-top" src={{$src}} alt={{$item_name}}/>
                {{-- <img class="card-img-top" data-src="data:{{$image}}" alt="Card image cap"> --}}

            <div class="card-body">
              <p class="card-text" >{{$item_price}} per pound</p>
              <p class="card-text" >{{$item_desc}}</p>
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
@include('inc.footer')

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="{{ asset('js/jquery-3.2.1.slim.min.js') }}" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>

    <script>
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
    </script>
@endsection
