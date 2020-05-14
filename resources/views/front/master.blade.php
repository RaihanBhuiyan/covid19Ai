<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AI-based COVID-19 Diagnosis System</title>
    <link rel="shortcut icon" href="{{asset('admin/img/favicon1.ico')}}">
    <!-- <link rel="stylesheet" href="{{asset('front/css/components.css')}}"> -->
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/icons.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/responsee.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/owl.theme.css')}}">     
    <link rel="stylesheet" href="{{asset('front/css/template-style.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/progresscircle.css')}}">

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
        <div class="s-6 l-6">
          <a href="{{url('/')}}" class="logo">
            <!-- Logo White Version -->
            <img class="logo-white" src="{{asset('front/img/logo5.png')}}" alt="">
            <!-- Logo Dark Version -->
            <img class="logo-dark" src="{{asset('front/img/logo5.png')}}" alt="">
          </a>
        </div>
        <div class="top-nav s-6 l-6" style="height: 69px;">

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
                      <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" >
                      <label for="inputEmail">Email address</label>

                      @if ($errors->has('email'))
                      <span class="error">{{ $errors->first('email') }}</span>
                      @endif
                    </div>

                    <div class="form-label-group">
                      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">
                      <label for="inputPassword">Password</label>

                      @if ($errors->has('password'))
                      <span class="error">{{ $errors->first('password') }}</span>
                      @endif
                    </div>

                    <button class="btn btn-lg btn-dark btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Sign In</button>
                    <div class="text-center">Can't log in?
                      <a class="small" href="{{url('registration')}}" style="text-decoration: underline;">Click here for sign up an account</a>
                    </div>
                  </form>

            </div>
          </div>
        </div>
    </div>
    @yield('body')

    <footer>
        <!-- Main Footer -->
        @if(session('error'))
          <input type="hidden" id="error" value="{{session('error')}}">
        @endif
        @if(session('alert'))
          <input type="hidden" id="error" value="{{session('alert')}}">
        @endif
        @if(session('success'))
          <input type="hidden" id="error" value="{{session('success')}}">
        @endif
        <!-- Bottom Footer -->
      <section class="padding background-dark full-width">
        <div class="s-12 l-12 text-center">
          <p class="text-size-12">Copyright 2020, AI-based COVID-19 Diagnosis System.</p>
        </div>
      </section>
    </footer>
    <script src="{{asset('admin/js/jquery.min.js')}}"></script>
    <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
    <!-- <script type="text/javascript" src="{{asset('front/js/jquery-ui.min.js')}}"></script> -->
    <script type="text/javascript" src="{{asset('front/js/responsee.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/js/owl.carousel.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/js/template-scripts.js')}}"></script>

    <script type="text/javascript" src="{{asset('admin/js/notify.min.js')}}"></script>


    <script type="text/javascript">
      $(document).ready(function(){
          var getError = $("#error").val();
          $.notify(getError,"error");

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



  </body>
</html>
