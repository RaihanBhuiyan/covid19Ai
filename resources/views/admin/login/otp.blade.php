<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AI Based COVID-19 Diagnosis System</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{asset('admin/css/font-awesome.min.css')}}">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="{{asset('admin/css/font.css')}}">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('admin/css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('admin/css/custom.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('admin/img/covid192020.ico')}}">

  </head>
<body>

  <div class="login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>OTP</h1>
                  </div>
                  <p><b>A OTP sent to your mail.</b></p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  @if(session('error'))
                      <strong style="color:red">Error!</strong> {{session('error')}}
                  @endif
               <form action="{{url('Otp')}}" method="post" id="otp_form">
                 {{ csrf_field() }}
                <div class="form-label-group">
                  <input type="text" id="otp" name="otp" class="form-control" placeholder="Enter otp here....." autofocus>
                  <span class="text-danger" id="otp_error_message"></span>
                  <input type="hidden" id="uuid" name="uuid" class="form-control" value="{{$uuid}}">OTP
                  @if ($errors->has('otp'))
                  <span class="error">{{ $errors->first('otp') }}</span>
                  @endif
                  
                </div>
                <!-- <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Send</button> -->
                <input type="submit" name="btn" class="btn btn-primary" value="Send"  />
              </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>





<script src="{{asset('admin/js/jquery.min.js')}}"></script>
<script>
  $(function() {
      $("#otp_error_message").hide();
      var error_otp = false;

      $("#otp").focusout(function() {
        check_otp();
      });

      function check_otp() {
          var otp_length = $("#otp").val().length;
          if(otp_length == 6) {
            $("#otp_error_message").hide();
          } else {
              $("#otp_error_message").html("OTP should be 6 characters");
              $("#otp_error_message").show();
              error_otp = true;
          }
      }
      $("#otp_form").submit(function(){
          error_otp = false;
          check_otp();
          if(error_otp == false)
          {
            return true;
          } 
          else 
          {
              return false;
          }
      });
  })
</script>
</body>
</html>
