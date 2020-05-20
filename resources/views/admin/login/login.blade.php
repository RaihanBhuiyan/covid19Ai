
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link rel="stylesheet" href="{{asset('admin/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/font.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <link rel="stylesheet" href="{{asset('admin/css/style.default.css')}}" id="theme-stylesheet">
    <link rel="stylesheet" href="{{asset('admin/css/custom.css')}}">

    <link rel="shortcut icon" href="{{asset('admin/img/favicon.ico')}}">

  </head>
  <body>
    <div class="login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">

            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  @if(session('error'))
                      <strong style="color:red">Error!</strong> {{session('error')}}
                  @endif
                  @if(session('alert'))
                      <strong style="color:green">Alert!!!</strong> {{session('alert')}}
                  @endif
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

                    <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Sign In</button>
                    <div class="text-center">If you have an account?
                      <a class="small" href="{{url('registration')}}">Sign Up</a></div>
                  </form>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>




    <!-- JavaScript files-->
    <script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('admin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('admin/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admin/js/front.js')}}"></script>

  </body>
</html>
