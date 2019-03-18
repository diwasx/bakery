@extends('layouts.app')
@section('content')
<div class="container-fluid">
      <div class="row">
          @include('inc.navDashboard')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          {{-- <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom"> --}}
          {{--   <h1 class="h2">Dashboard</h1> --}}
          {{--   <div class="btn-toolbar mb-2 mb-md-0"> --}}
          {{--     <div class="btn-group mr-2"> --}}
          {{--       <button class="btn btn-sm btn-outline-secondary">Share</button> --}}
          {{--       <button class="btn btn-sm btn-outline-secondary">Export</button> --}}
          {{--     </div> --}}
          {{--     <button class="btn btn-sm btn-outline-secondary dropdown-toggle"> --}}
          {{--       <span data-feather="calendar"></span> --}}
          {{--       This week --}}
          {{--     </button> --}}
          {{--   </div> --}}
          {{-- </div> --}}

          {{-- <canvas class="my-4" id="myChart" width="900" height="380"></canvas> --}}

          {{-- Data in table form --}}
          {{-- <div class="table-responsive"> --}}
            {{-- <table class="table table-striped table-sm"> --}}
            {{--   <thead> --}}
            {{--     <tr> --}}
            {{--       <th>#</th> --}}
            {{--       <th>Name</th> --}}
            {{--       <th>Price</th> --}}
            {{--       <th>Description</th> --}}
            {{--       <th>Time of order</th> --}}
            {{--     </tr> --}}
            {{--   </thead> --}}
            {{--   <tbody> --}}
            {{--     @foreach($shop as $item) --}}
            {{--     <tr> --}}
            {{--       <td>{{$item->id}} </td> --}}
            {{--       <td>{{$item->name}} </td> --}}
            {{--       <td>{{$item->price}} </td> --}}
            {{--       <td>{{$item->description}} </td> --}}
            {{--       <td>{{$item->created_at}} </td> --}}
            {{--     </tr> --}}

            {{--     @endforeach --}}
            {{--   </tbody> --}}
            {{-- </table> --}}
          {{-- </div> --}}

          {{-- Gallery part --}}
            {{-- <!-- Header --> --}}
            {{-- <header class="bg-primary text-center py-5 mb-4"> --}}
            {{--   <div class="container"> --}}
            {{--     <h1 class="font-weight-light text-white">Products</h1> --}}
            {{--   </div> --}}
            {{-- </header> --}}

            <!-- Page Content -->
            <div class="container">
              <div class="row">

                {{-- Item gallery --}}
                @foreach($shop as $item)
                        {{-- $src=asset($src)."?".time(); --}}
                        {{-- Adding time to image src will force cache refresh --}}
                    <?php 
                        $src = 'img/'.$item->id.'.jpg'.'?'.time();

                    ?>
                <!-- Team Member 1 -->
                <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-0 shadow">
                    <img src="{{asset($src)}}" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-0">{{$item->name}}</h5>
                        <div class="card-text text-black-50">{{$item->description}}</div>
                        <div class="card-text text-black-50">Rs {{$item->price}}</div>
                        <button type="button" class="btn btn-sm btn-outline-secondary"> <a class="nav-link" href="/admin/product/edit/{{$item->id}}">Edit</a></button>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                          Delete
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                Are you sure want to delete? 
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-danger"><a class="nounderline" href="/admin/product/delete/{{$item->id}}">Delete</a></button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>

                    </div>
                  </div>
                </div>
                @endforeach

              </div>
              <!-- /.row -->

            </div>
            <!-- /.container -->

        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

@endsection
