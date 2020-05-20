<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AI-based COVID-19 Diagnosis System</title>
    <link rel="shortcut icon" href="{{asset('admin/img/favicon1.ico')}}">
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/icons.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/responsee.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/owl.theme.css')}}">     
    <link rel="stylesheet" href="{{asset('front/css/template-style.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/progresscircle.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/toastr.min.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Roboto:500,700' rel='stylesheet' type='text/css'>


    <style>
    .my-custom-scrollbar {
        position: relative;
        height: 200px;
        overflow: auto;
        }
        .table-wrapper-scroll-y {
        display: block;
        }
        .pb-100 {
          padding-bottom: 100px;
        }
        .pt-100 {
          padding-top: 0;
        }
        a{
            text-decoration:none;
        }
        .section-title h4 {
          font-size: 14px;
          font-weight: 500;
          color: #777;
        }
        .section-title h3 {
          font-size: 32px;
          text-transform: capitalize;
          margin: 15px 0;
          display: inline-block;
          position: relative;
          font-weight: 700;
          padding-bottom: 15px;
          letter-spacing: 1px;
          text-transform: uppercase;
        }
        .section-title p {
          font-weight: 300;
          font-size: 14px;
        }
        .black-bg .section-title h3, .black-bg .section-title h4, .black-bg .section-title p {
          color:#fff
        }
        .section-title h3:before {
          position: absolute;
          content: "";
          width: 150px;
          height: 1px;
          background-color: #777;
          bottom: 0;
          left: 50%;
          margin-left: -75px;
        }
        .section-title h3:after {
          position: absolute;
          content: "";
          width: 80px;
          height: 3px;
          background-color: #e16038;
          border: darkblue;
          bottom: -1px;
          left: 50%;
          margin-left: -40px;
        }
        .section-title {
          margin-bottom: 70px;
        }
        .single-price {
          text-align: center;
          padding: 30px;
          box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }
    </style>
          
  </head>

  <body class="size-1140">
    <!-- HEADER -->
    <header role="banner" class="position-absolute">
      <!-- Top Navigation -->
      <nav class=" background-transparent-hightlight full-width sticky">
        <div class="s-6 l-2">
          <a href="{{url('/')}}" class="logo">
            <!-- Logo White Version -->
            <img class="logo-white" src="{{asset('front/img/logo5.png')}}" alt="">
            <!-- Logo Dark Version -->
            <img class="logo-dark" src="{{asset('front/img/logo5.png')}}" alt="">
          </a>
        </div>
        <div class="top-nav s-6 l-10" style="height: 69px;">

          <ul class="right chevron">
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="#" data-toggle="modal" data-target="#loginModal">COVID-19 Diagnosis</a></li>
            <li><a href="{{route('info')}}">Information</a></li>
            <li><a href="{{route('aboutDeveloper')}}">About Developer</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- MAIN -->
  <!-- Modal-->
    <div id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
      <div role="document" class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Login</strong>
              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            </div>

            <div class="modal-body">
                  <form action="{{url('post-login')}}" method="POST" id="logForm">
                    {{ csrf_field() }}
                    <div class="form-label-group">
                      <span id="eamil_error" class="text-danger"></span>
                      <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" >
                      <label for="inputEmail">Email address</label>

                      @if ($errors->has('email'))
                      <span class="error">{{ $errors->first('email') }}</span>
                      @endif
                    </div>

                    <div class="form-label-group">
                      <span id="password_error" class="text-danger"></span>
                      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">
                      <label for="inputPassword">Password</label>
                      

                      @if ($errors->has('password'))
                      <span class="error">{{ $errors->first('password') }}</span>
                      @endif
                    </div>

                    <button class="btn btn-lg btn-dark btn-block btn-login text-uppercase font-weight-bold mb-2" id="loginBtn" type="submit">Sign In</button>
                  </form>

            </div>
          </div>
        </div>
    </div>



    @yield('body')

    <footer>
        <!-- Main Footer -->

        <!-- Bottom Footer -->
      <section class="padding background-dark full-width">
        <div class="s-12 l-12 text-center">
          <p class="text-size-12">Copyright 2020, AI-based COVID-19 Diagnosis System</p>
        </div>
      </section>
    </footer>
    <script src="{{asset('admin/js/jquery.min.js')}}"></script>
    <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/js/responsee.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/js/owl.carousel.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/js/template-scripts.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/js/toastr.min.js')}}"></script>

    <script type="text/javascript">
      $(function() {
          $("#eamil_error").hide();
          $("#password_error").hide();

          var errEmail = false;
          var errPassword = false;


        $("#inputEmail").focusout(function() {
          check_email();
        });
        $("#inputPassword").focusout(function() {
          check_password();
        });

      function check_email() {
          var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
          if(pattern.test($("#inputEmail").val())) {
            $("#eamil_error").hide();
          } else {
            $("#eamil_error").html("Invalid email address");
            $("#eamil_error").show();
            errEmail = true;
          }
      }

        function check_password() {
          var password_length = $("#inputPassword").val().length;
          if(password_length < 8) {
              $("#password_error").html("At least 8 characters");
              $("#password_error").show();
              errPassword = true;
          } else {
            $("#password_error").hide();
          }
       }

         $("#logForm").submit(function() {
          errEmail = false;
          errPassword = false;


          check_email();
          check_password();

          if(errEmail == false && errPassword == false ) {
              return true;
          } else {
              return false;
          }
        });

       });
    </script>

    <script src="{{asset('front/js/progresscircle.js')}}"></script>
    <script type="text/javascript">
      $(function(){
          $('.circlechart').circlechart();
        });

      var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
      var today = new Date();
      document.getElementById("dateTime").innerHTML = today.toLocaleDateString("en-US", options);
    </script>

<script type="text/javascript">
        toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-bottom-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "10000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
      }
      @if(Session::has('success'))
        toastr["success"]("{{ Session::get('success') }}")
      @endif
      @if(Session::has('error'))
        toastr["error"]("{{ Session::get('error') }}")
      @endif
      @if(Session::has('warning'))
        toastr["warning"]("{{ Session::get('warning') }}")
      @endif


      @if(Session::has('successReg1'))
        toastr["success"]("{{ Session::get('successReg1') }}")
      @endif
      @if(Session::has('successReg2'))
        toastr["info"]("{{ Session::get('successReg2') }}")
      @endif

</script>

    <script src="{{asset('admin/js/dataTables.min.js')}}"></script>
    <script src="{{asset('admin/js/dataTable.bootstrap.min.js')}}"></script>
    <script>
      $(document).ready(function() {
          $('#countryTable').DataTable();
        } );

    </script>

  </body>
</html>
