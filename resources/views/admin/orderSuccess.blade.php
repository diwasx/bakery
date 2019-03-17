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

        <div class="container">
              <h2>SUCCESS ORDER</h2>
        </div>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Cake id</th>
                  <th>First Name</th>
                  <th>Second Name</th>
                  <th>Phone no.</th>
                  <th>Email</th>
                  <th>Pickup Type</th>
                  <th>Address</th>
                  <th>Time of order</th>
                </tr>
              </thead>
              <tbody>
                @foreach($order as $item)
                <tr>
                  <td>{{$item->id_order}} </td>
                  <td>{{$item->id_cake}} </td>
                  <td>{{$item->fname}} </td>
                  <td>{{$item->lname}} </td>
                  <td>{{$item->phone}} </td>
                  <td>{{$item->email}} </td>
                  <td>{{$item->pickupType}} </td>
                  <td>{{$item->address}} </td>
                  <td>{{$item->created_at}} </td>
                  {{-- <td><button type="button" class="btn btn-success"><a href="/admin/order/success/{{$item->id_order}}" class="btn btn-success">Complete</a></button></td> --}}
                  {{-- <td><button type="button" class="btn btn-danger"><a href="/admin/order/fail/{{$item->id_order}}" class="btn btn-danger">Failed</a></button></td> --}}

                </tr>

                @endforeach
              </tbody>
            </table>
          </div>
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
