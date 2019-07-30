@extends('layouts.app')
@section('content')

<header>
<div class="container-fluid">
  <div class="row">
    {{-- @include('inc.navDashboard') --}}
    @extends('inc.navDashboard')
    @section('table')
    @include('inc.messages')
    <main role="main" >
    <div class="container">
          <h2 class='text-center font-weight-bold'>PENDING ORDER</h2>
    </div>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Order ID</th>
              <th>FName</th>
              <th>LName</th>
              <th>Phno</th>
              <th>Email</th>
              <th>Pickup Type</th>
              <th>Address</th>
              <th>Remark</th>
              <th>Time of order</th>
              <th>Cart</th>
            </tr>
          </thead>
          <tbody>
            @foreach($order as $item)
            <tr>
              <td>{{$item->id_order}} </td>
              <td>{{$item->fname}} </td>
              <td>{{$item->lname}} </td>
              <td>{{$item->phone}} </td>
              <td>{{$item->email}} </td>
              <td>{{$item->pickupType}} </td>
              <td>{{$item->address}} </td>
              <td>{{$item->remark}} </td>
              <td>{{$item->created_at}} </td>
              <td><a href="/admin/order/showCart/{{$item->id_order}}"><i class="fa fa-shopping-cart" style="font-size:24"></i></a></td>
              <td>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-check" style="font-size:18"></i>
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
                        Are you sure want to move it to success table?
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-success"><a href="/admin/order/success/{{$item->id_order}}" class="btn btn-success">Success Order</a></button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>

                    </div>
                  </div>
                </div>
                </td>

                <td>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal1">
                    <i class="fa fa-close" style="font-size:18"></i>
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        Are you sure want to move it to fail table?
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger"><a href="/admin/order/fail/{{$item->id_order}}" class="btn btn-danger">Fail Order</a></button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
                </td>
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
<header>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>

    <!-- Icons -->
    <script src="{{ asset('js/feather.min.js') }}"></script>
    <script>
      feather.replace()
    </script>

@endsection
