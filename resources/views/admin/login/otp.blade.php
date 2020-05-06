<!DOCTYPE html>
<html>
<head>
<title>Registration Form</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('style.css')}}">

</head>
<body>
<div class="container-fluid">
  <div class="row no-gutter">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4">Type your OTP here!</h3>
              @if(session('success'))
                  <strong style="color:green">Success!!</strong> {{session('success')}}
              @endif
               <form action="{{url('Otp')}}" method="post" id="otp_form">
                 {{ csrf_field() }}
                <div class="form-label-group">
                  <input type="text" id="otp" name="otp" class="form-control" placeholder="otp" autofocus>
                  <label for="otp">Otp....</label>
                  <span class="text-danger" id="otp_error_message"></span>
                  <input type="hidden" id="uuid" name="uuid" class="form-control" value="{{$uuid}}">
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
