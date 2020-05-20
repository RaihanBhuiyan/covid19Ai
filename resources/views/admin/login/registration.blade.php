
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AI-based COVID-19 Diagnosis System</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/font.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <link rel="stylesheet" href="{{asset('admin/css/style.default.css')}}" id="theme-stylesheet">
    <link rel="stylesheet" href="{{asset('admin/css/custom.css')}}">

    <link rel="shortcut icon" href="{{asset('admin/img/favicon1.ico')}}">
    <style>
      .error_form {
        font-size: 15px;
        font-family: Arial;
        color: #F6871F;
      }
    </style>
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
                    <h1>Registration</h1>
                  </div>
                  <p><b>Please fill up this registraion form with your valid information for use this AI-based COVID-19 Diagnosis System </b></p>
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
                  <form id="register" action="{{url('post-registration')}}" method="POST" id="regForm">
                 {{ csrf_field() }}
                <div class="form-label-group">
                  <input type="text" id="ORGName" name="ORGName" class="form-control" placeholder="Org. name here" autofocus>
                  <label for="ORGName"></label>
                  <span class="error_form" id="username_error_message"></span>
                </div>
                <div class="form-label-group">
                  <input type="text" id="ContactNo" name="ContactNo" class="form-control" placeholder="Contact" autofocus>
                  <label for="ContactNo"></label>
                  <span class="error_form" id="contact_error_message"></span>

                </div>
                <div class="form-label-group">
                  <input type="text" id="address" name="address" class="form-control" placeholder="address here" autofocus>
                  <label for="address"></label>
                  <span class="error_form" id="address_error_message"></span>

                </div>
                <div class="form-label-group">
                  <input type="email" name="email" id="email" class="form-control" placeholder="Email address" >
                  <label for="inputEmail"></label>
                  <span class="error_form" id="email_error_message"></span>
                </div>

                <div class="form-label-group">
                  <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                  <label for="password"></label>
                  <span class="error_form" id="password_error_message"></span>
                </div>
                <div class="form-label-group">
                  <input type="password" name="Confirmpass" id="Confirmpass" class="form-control" placeholder="Confirm Password">
                  <label for="Confirmpass"></label>
                  <span class="error_form" id="retype_password_error_message"></span>
                </div>

                <button id="btn-submit" class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Sign Up</button>
                <div class="text-center">
                  <a class="small" href="{{url('/')}}">Go to home</a>
                </div>
              </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('admin/js/jquery.min.js')}}"></script>
  <script>
    $(function() {

        $("#username_error_message").hide();
        $("#contact_error_message").hide();
        $("#address_error_message").hide();
        $("#email_error_message").hide();
        $("#password_error_message").hide();
      	$("#retype_password_error_message").hide();

        var error_username = false;
        var error_contact = false;
        var error_address = false;
        var error_email = false;
        var error_password = false;
	      var error_retype_password = false;


        $("#ORGName").focusout(function() {
          check_username();
        });
        $("#ContactNo").focusout(function() {
          check_contact();
        });
        $("#address").focusout(function() {
          check_address();
        });
        $("#email").focusout(function() {
      		check_email();
      	});
        $("#password").focusout(function() {
		        check_password();
	       });

      	$("#Confirmpass").focusout(function() {
      		check_retype_password();
      	});

        function check_username() {
            var username_length = $("#ORGName").val().length;
            if(username_length < 5 || username_length > 20) {
              $("#username_error_message").html("Should be between 5-20 characters");
              $("#username_error_message").show();
              error_username = true;
            } else {
            $("#username_error_message").hide();
            }
        }
        function check_contact() {
            var pattern = new RegExp(/([1-9][0-9]*)|0/);
            var contact_length = $("#ContactNo").val().length;
            if(pattern.test($("#ContactNo").val()) && contact_length == 11) {
              $("#contact_error_message").hide();

            } else {
              $("#contact_error_message").html("Contact should be number & 11 digits");
              $("#contact_error_message").show();
              error_contact = true;
            }

        }

        function check_address() {
            var address_length = $("#address").val().length;
            if(address_length < 5 || address_length > 250) {
              $("#address_error_message").html("Address should be between 5-250 characters");
              $("#address_error_message").show();
              error_address = true;
            } else {
            $("#address_error_message").hide();
            }
        }


        function check_password() {
      		var password_length = $("#password").val().length;
      		if(password_length < 8) {
        			$("#password_error_message").html("At least 8 characters");
        			$("#password_error_message").show();
        			error_password = true;
      		} else {
      			$("#password_error_message").hide();
      		}
	     }

  	function check_retype_password() {
      		var password = $("#password").val();
      		var retype_password = $("#Confirmpass").val();
      		if(password !=  retype_password) {
      			$("#retype_password_error_message").html("Passwords don't match");
      			$("#retype_password_error_message").show();
      			error_retype_password = true;
      		} else {
      			$("#retype_password_error_message").hide();
      		}
  	}

    	function check_email() {
      		var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
      		if(pattern.test($("#email").val())) {
      			$("#email_error_message").hide();
      		} else {
      			$("#email_error_message").html("Invalid email address");
      			$("#email_error_message").show();
      			error_email = true;
      		}
    	}
        $("#register").submit(function() {

          error_username = false;
          error_contact = false;
          error_address = false;
          error_email = false;
          error_password = false;
          error_retype_password = false;

          check_username();
          check_contact();
          check_address();
          check_email();
          check_password();
          check_retype_password();

          if(error_username == false && error_contact == false && error_address == false && error_email == false && error_password == false && error_retype_password == false ) {
              return true;
          } else {
              return false;
          }
        });
  });

  </script>
  </body>
</html>
