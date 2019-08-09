@extends('layouts.app')
@section('content')
@include('inc.messages')
<div class="container-fluid">
      <div class="row">
        @include('inc.navDashboard')
        <main role="main" >
            <div class="container">
              <h2 class='text-center font-weight-bold'>FAILED ORDER </h2>
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
    <script>window.jQuery || document.write('<script src="{{asset('js/jquery/jquery-2.2.4.min.js')}}"><\/script>')</script>

    <!-- Icons -->
    <script src="{{ asset('js/feather.min.js') }}"></script>
    <script>
      feather.replace()
    </script>
@endsection
