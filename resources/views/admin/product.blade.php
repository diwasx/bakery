@extends('layouts.app')
@section('content')
@include('inc.messages')
<div class="container-fluid">
      <div class="row">
          @include('inc.navDashboard')
            <!-- Page Content -->
            <div class="container">
              <div class="row">

                {{-- Item gallery --}}
                @foreach($shop as $item)
                        {{-- $src=asset($src)."?".time(); --}}
                        {{-- Adding time to image src will force cache refresh --}}
                    <?php 
                        $src = 'img_product/'.$item->id.'.jpg'.'?'.time();

                    ?>
                <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-0 shadow">
                    {{-- <h5 class="card-text text-black-50">#{{$item->id}}</div> --}}
                    <h5 class="card-text mb-0 font-weight-bold">#{{$item->id}}</h5>
                    <img src="{{asset($src)}}" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-0">{{$item->name}}</h5>
                        <div class="card-text text-black-50">{{$item->description}}</div>
                        <div class="card-text text-black-50">Rs {{$item->price}}</div>
                        <button type="button" class="btn btn-outline-secondary"> <a href="/admin/product/edit/{{$item->id}}">Edit</a></button>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal_{{$item->id}}">
                          Delete
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal_{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel_{{$item->id}}" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel_{{$item->id}}">Title</h5>
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
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>

    <!-- Icons -->
    <script src="{{ asset('js/feather.min.js') }}"></script>
    <script>
      feather.replace()
    </script>

@endsection
