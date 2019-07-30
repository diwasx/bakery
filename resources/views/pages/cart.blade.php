@extends('layouts.app')
@section('content')
<div class="container">

    <style>
        .table>tbody>tr>td, .table>tfoot>tr>td{
            vertical-align: middle;
        }
        @media screen and (max-width: 600px) {
        table#cart tbody td .form-control{
            width:20%;
            display: inline !important;
        }
        .actions .btn{
            width:36%;
            margin:1.5em 0;
        }
        .actions .btn-info{
            float:left;
        }
        .actions .btn-danger{
            float:right;
        }
        table#cart thead { display: none; }
        table#cart tbody td { display: block; padding: .6rem; min-width:320px;}
        table#cart tbody tr td:first-child { background: #333; color: #fff; }
        table#cart tbody td:before {
            content: attr(data-th); font-weight: bold;
            display: inline-block; width: 8rem;
        }
        table#cart tfoot td{display:block; }
        table#cart tfoot td .btn{display:block;}
        
    </style>

    <div class="container">
        <table id="cart" class="table table-hover table-condensed">
        @if(Session::has('cart'))
            @if($totalPrice != 0)
                    <thead>
                        <tr>
                            <th style="width:20%">Product</th>
                            <th style="width:10%">Size</th>
                            <th style="width:15%">Price Per Pound</th>
                            <th style="width:8%">Quantity</th>
                            <th style="width:22%" class="text-center">Subtotal</th>
                            <th style="width:10%"></th>
                        </tr>
                    </thead>
                @foreach($products as $product)
                <?php
                    $item=$product['item'];
                    $size=$product['size'];
                    $item_name=$item->name;
                    $item_id=$item->id;
                    $item_desc=$item->description;
                    $item_price="Rs. ".$item->price;
                    $src = 'img_product/'.$item_id.'.jpg';
                    $src=asset($src)."?".time();

                    $id_name = $item_id."-".$size
                ?>
                    <tbody>
                        <tr>
                            <td data-th="Product">
                                <div class="row">
                                    <div class="col-sm-8 hidden-xs"><img src={{$src}} alt="..." class="img-responsive"/></div>
                                    <div class="col-sm-10">
                                        <h4 class="nomargin">{{$item_name}}</h4>
                                        {{-- <p>{{$item_desc}}</p> --}}
                                    </div>
                                </div>
                            </td>
                            <td data-th="Price">{{$size}}</td>
                            <td data-th="Size">{{$item_price}}</td>
                                <script>
                                    function qtyCheck(elem){
                                        if (elem.value <= 0){
                                            elem.value = 0;
                                        }
                                        if (elem.value >= 20) {
                                            elem.value = 20; 
                                        }
                                    }
                                </script>
                            <td data-th="Quantity" class="text-center">
                                {{$product['qty']}}
                                <a href="/changeQty/{{$id_name}}/up"><button class="btn btn-danger btn-sm"><i class="fa fa-level-up"></i></button></a>
                                <a href="/changeQty/{{$id_name}}/down"><button class="btn btn-danger btn-sm"><i class="fa fa-level-down"></i></button></a>
                            </td>
                            <td data-th="Subtotal" class="text-center">Rs. {{$product['price']}}</td>
                            <td class="actions" data-th="">
                                <a href="/deleteFromCart/{{$id_name}}"><button id={{$id_name}} class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button></a>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
                    <tfoot>
                        <tr>
                            <td><a href="/shop" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                            <td colspan="2" class="hidden-xs"></td>
                            <td class="hidden-xs text-center"><strong>Net Total: Rs. {{$totalPrice}}</strong></td>
                            <td><a href="/checkoutForm" class="btn btn-success btn-block">Next Step <i class="fa fa-angle-right"></i></a></td>
                        </tr>
                    </tfoot>
                </table>
            @else
            <div class="row">
                <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                    <h2>No Items in Cart</h2>
                </div>
            </div>
            @endif
        @endif
    </div>
    </div>
    <br><br>
    <script>
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();

    </script>

@endsection
