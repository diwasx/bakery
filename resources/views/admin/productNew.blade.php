@extends('layouts.app')
@section('content')

<style>
.btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}

#img-upload{
    width: 100%;
}
:root {
  --input-padding-x: 1.5rem;
  --input-padding-y: .75rem;
}

body {
  {{-- background: #007bff; --}}
  {{-- background: linear-gradient(to right, #0062E6, #33AEFF); --}}
}

.card-signin {
  border: 0;
  border-radius: 1rem;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
  overflow: hidden;
}

.card-signin .card-title {
  margin-bottom: 2rem;
  font-weight: 300;
  font-size: 1.5rem;
}

.card-signin .card-img-left {
  width: 45%;
  /* Link to your background image using in the property below! */
  background: scroll center url('https://source.unsplash.com/WEQbe2jBg40/414x512');
  background-size: cover;
}

.card-signin .card-body {
  padding: 2rem;
}

.form-signin {
  width: 100%;
}

.form-signin .btn {
  font-size: 80%;
  border-radius: 5rem;
  letter-spacing: .1rem;
  font-weight: bold;
  padding: 1rem;
  transition: all 0.2s;
}

.form-label-group {
  position: relative;
  margin-bottom: 1rem;
}

.form-label-group input {
  height: auto;
  border-radius: 2rem;
}

.form-label-group>input,
.form-label-group>label {
  padding: var(--input-padding-y) var(--input-padding-x);
}

.form-label-group>label {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  margin-bottom: 0;
  /* Override default `<label>` margin */
  line-height: 1.5;
  color: #495057;
  border: 1px solid transparent;
  border-radius: .25rem;
  transition: all .1s ease-in-out;
}

.form-label-group input::-webkit-input-placeholder {
  color: transparent;
}

.form-label-group input:-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-moz-placeholder {
  color: transparent;
}

.form-label-group input::placeholder {
  color: transparent;
}

.form-label-group input:not(:placeholder-shown) {
  padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
  padding-bottom: calc(var(--input-padding-y) / 3);
}

.form-label-group input:not(:placeholder-shown)~label {
  padding-top: calc(var(--input-padding-y) / 3);
  padding-bottom: calc(var(--input-padding-y) / 3);
  font-size: 12px;
  color: #777;
}

.btn-google {
  color: white;
  background-color: #ea4335;
}

.btn-facebook {
  color: white;
  background-color: #3b5998;
}
</style>

<div class="container-fluid">
      <div class="row">
          @include('inc.navDashboard')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <!-- Page Content -->

            {{-- This is from snippets --}}
            <div class="container">
              <div class="row">
                <div class="container">
                    <a href="/admin/product" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                    <div class="row">
                      <div class="col-lg-10 col-xl-9 mx-auto">
                        <div class="card card-signin flex-row my-5">
                          <div class="card-img-left d-none d-md-flex">
                             <!-- Background image for card set in CSS! -->
                          </div>
                          <div class="card-body">
                            <h5 class="card-title text-center">Product</h5>

                            {{-- Form part --}}
                            <form enctype="multipart/form-data" action="/admin/product/store" method="POST" class="form-signin">

                                {{-- This is need for crf protection in form --}}
                                {{ csrf_field() }}

                              <div class="form-label-group">
                                <input name='name' type="text" id="name" class="form-control" placeholder="Name" required autofocus>
                                <label for="name">Name</label>
                              </div>

                              <div class="form-label-group">
                                <input name='price' type="text" id="price" class="form-control" placeholder="Price" required autofocus>
                                <label for="price">Price</label>
                              </div>
                              <hr>
                              <div class="form-label-group">
                                <input name='description' type="text" id="description" class="form-control" placeholder="Description" required autofocus>
                                <label for="description">Description</label>
                              </div>
                              <hr>
                              {{-- Upload image --}}

                                <div class="form-label-group">
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <span class="btn btn-default btn-file">
                                                Browse… 
                                                <input name="input_img" type="file" id="imgInp" class="formcontrol" required autofocus>
                                            </span>
                                        </span>
                                        <input type="text" class="form-control" readonly>
                                    </div>
                                    <img id='img-upload'/>
                                </div>
                              
                              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Register</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

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
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>

    <script>
        feather.replace()
        $(document).ready( function() {
                $(document).on('change', '.btn-file :file', function() {
                var input = $(this),
                    label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
                input.trigger('fileselect', [label]);
                });

                $('.btn-file :file').on('fileselect', function(event, label) {
                    
                    var input = $(this).parents('.input-group').find(':text'),
                        log = label;
                    
                    if( input.length ) {
                        input.val(log);
                    } else {
                        if( log ) alert(log);
                    }
                
                });
                function readURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        
                        reader.onload = function (e) {
                            $('#img-upload').attr('src', e.target.result);
                        }
                        
                        reader.readAsDataURL(input.files[0]);
                    }
                }

                $("#imgInp").change(function(){
                    readURL(this);
                }); 	
            });
    </script>

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
@endsection