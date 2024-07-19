
<!doctype html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
     <title> Login | Vana Resort </title>
   @php 
      $footer = \App\Models\ContactDetail::find(1);
    @endphp 
    <!-- Favicon -->
     <link rel="icon" href="{{asset('web_assets/dynamics/slider/'.$footer->favicon)}}"> 

    <!-- Master Stylesheet [If you remove this CSS file, your file will be broken undoubtedly.] -->
    <link rel="stylesheet" href="{{asset('dash_assets/style.css')}}">

</head>

<body class="login-area">
{{-- 
    <!-- Preloader -->
    <div id="preloader">
        <div class="preloader-load"></div>
    </div>
    <!-- Preloader --> --}}

    <!-- ======================================
    ******* Page Wrapper Area Start **********
    ======================================= -->
    <div class="main-content- h-100vh">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-md-8 col-lg-5">
                    <!-- Middle Box -->
                    <div class="middle-box">
                        <div class="card">
                            <div class="card-body p-4">
                                <script>
                                    var msg = '{{Session::get('success')}}';
                                    var exist = '{{Session::has('success')}}';
                                    if(exist){
                                      alert(msg);
                                    }
                                    var msg1 = '{{Session::get('error')}}';
                                    var exist1 = '{{Session::has('error')}}';
                                    if(exist1){
                                      alert(msg1);
                                    }
                                  </script>
                                <!-- Logo -->
                                <h4 class="font-24 mb-1">Admin Login</h4>
                                <p class="mb-30">Sign in to your account to continue.</p>
                               {{-- @if(Session('success'))
                               <div class="alert alert-success mb-3">{{session('success')}}</div>
                               @endif
                               @if(Session('error'))
                               <div class="alert alert-danger mb-3">{{session('error')}}</div>
                               @endif --}}
                                <form action="{{route('admin.loginPost')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label class="float-left" for="emailaddress">Email address</label>
                                        <input class="form-control" type="email" id="emailaddress"  name="email" placeholder="Enter your email">
                                        @if ($errors->has('email'))
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $errors->first('email') }}.</strong>
                                        </span>
                                         @endif
                                    </div>

                                    <div class="form-group">
                                        <a href="forget-password.html" class="text-dark float-right"></a>
                                        <label class="float-left" for="password">Password</label>
                                        <input class="form-control" type="password"  name="password"  id="password" placeholder="Enter your password">
                                        @if ($errors->has('password'))
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $errors->first('password') }}.</strong>
                                            </span>
                                    @endif
                                    </div>
                                     <div class="form-group mb-0">
                                        <button class="btn btn-primary btn-block" name="submit" type="submit"> Log In </button>
                                    </div>

                                    {{-- <div class="text-center mt-15"><span class="mr-2 font-13 font-weight-bold">Don't have an account?</span><a class="font-13 font-weight-bold" href="register.html">Sign up</a></div> --}}

                                </form>

                                <!-- end card -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ======================================
    ********* Page Wrapper Area End ***********
    ======================================= -->

    <!-- Must needed plugins to the run this Template -->
    <script src="{{asset('dash_assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('dash_assets/js/popper.min.js')}}"></script>
    <script src="{{asset('dash_assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('dash_assets/js/bundle.js')}}"></script>

    <!-- Active JS -->
    <script src="{{asset('dash_assets/js/default-assets/active.js')}}"></script>

</body>
</html>