@extends('layouts.app')
@section('content')
@include('inc.messages')
<div class="container-fluid">
      <div class="row">
          @include('inc.navDashboard')
            <!-- Page Content -->
            <div class="container">
            <br>
            <a href="/admin/pages/home/new" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">New Item</a>
            <br> <br>
              <div class="row">
                @foreach($home as $item)
                    <?php 
                        $src = 'img_pages_home/'.$item->id.'.jpg'.'?'.time();
                    ?>
                    <div class="single-blog-area blog-style-2 mb-50 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1000ms">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-6">
                                <div class="single-blog-thumbnail">
                                    <img src='{{asset($src)}}' alt="" style="width:450px;height:400px;">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <!-- Blog Content -->
                                <div class="single-blog-content">
                                    <h4>"{{$item->title}}"</h4>
                                    <p>{{$item->description}}</p>
                                </div>
                                <a href="/admin/pages/home/edit/{{$item->id}}"><button type="button" class="btn btn-outline-secondary">Edit</button></a>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal_{{$item->id}}">
                          Delete
                        </button>
                            </div>
                        </div>
                    </div>

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
                              <a class="nounderline" href="/admin/pages/home/delete/{{$item->id}}"><button type="button" class="btn btn-outline-danger">Delete</button></a>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                @endforeach

              </div>

            </div>

        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script>window.jQuery || document.write('<script src="{{asset('js/jquery/jquery-2.2.4.min.js')}}"><\/script>')</script>

    <!-- Icons -->
    <script src="{{ asset('js/feather.min.js') }}"></script>
    <script>
      feather.replace()
    </script>

@endsection
