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
            <thead>
                <tr>
                    <th style="width:20%">Product</th>
                    <th style="width:20%">Product ID</th>
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
                $item_name=$item['name'];
                $item_id=$item['id'];
                $item_desc=$item['description'];
                $item_price="Rs. ".$item['price'];
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
                    <td data-th="Price">{{$item_id}}</td>
                    <td data-th="Price">{{$size}}</td>
                    <td data-th="Size">{{$item_price}}</td>
                    <td data-th="Quantity" class="text-center">
                        {{$product['qty']}}
                    </td>
                    <td data-th="Subtotal" class="text-center">Rs. {{$product['price']}}</td>
                </tr>
            </tbody>
            @endforeach
            <tfoot>
                <tr>
                    <td class="hidden-xs text-center"><strong style="font-size:22px">Net Total: Rs. {{$totalPrice}}</strong></td>
                </tr>
            </tfoot>
        </table>
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
