
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SIGN IN | </title>

    <!-- Bootstrap -->
    <script src="{{ url('public/vendors/jquery/dist/jquery.min.js') }}"></script>
    <link href="{{ url('public/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ url('public/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ url('public/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{ url('public/vendors/animate.css/animate.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ url('public/build/css/custom.min.css') }}" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">      
          <section class="login_content" >
            <form action="" method="post" >
                {{ csrf_field() }}
                <h1>Login Form</h1>
                <div>
                    <input type="text" class="form-control" name="name" placeholder="Username" required=""/>
                </div>
                <div>
                    <input type="email" class="form-control" name="email" placeholder="Email" required=""/>
                   <div class="text-danger"><b>{{ $errors->first('email') }}</b></div>
                </div>
                <div>
                  <input type="number" class="form-control" name="mobile" placeholder="Mobile" required="" />
                  <div class="text-danger"><b>{{ $errors->first('mobile') }}</b></div>
              </div>
                <div>
                    <input type="password" class="form-control" name="password" placeholder="Password" required="" />
                </div>
                
                <div class="col-12">
                    <button class="btn btn-primary w-100" type="submit">Sign in</button>
                </div>

              <div class="clearfix"></div>
            </form>
          </section>
        </div>

      </div>
    </div>
  </body>
</html>
