@extends('admin.layout.app')
@section('admintitle') Change-Password @endsection
@section('maindashboard')
{{-- 
    <!-- Preloader -->
    <div id="preloader">
        <div class="preloader-load"></div>
    </div>
    <!-- Preloader --> --}}

    <!-- ======================================
    ******* Page Wrapper Area Start **********
    ======================================= -->
    <div class="main-content">
        <div class="container ">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-md-8 col-lg-5">
                    <!-- Middle Box -->
                    <div class="middle-box">
                        <div class="card">
                            <div class="card-body p-4">

                                <!-- Logo -->
                                <h4 class="font-24 mb-1">Change Password.</h4>
                                {{-- <p class="mb-30">Sign in to your account to continue.</p> --}}
                               @if(Session('success'))
                               <div class="alert alert-success mb-3">{{session('success')}}</div>
                               @endif
                               @if(Session('error'))
                               <div class="alert alert-danger mb-3">{{session('error')}}</div>
                               @endif
                                <form action="{{route('password.change-password-post')}}" method="POST" id="passwordForm">
                                    @csrf
                                    <div class="form-group">
                                        <label class="float-left" for="emailaddress">Old Password</label>
                                        <input class="form-control" type="password" id="emailaddress"  name="old_password" placeholder="Enter your old password">
                                        @if ($errors->has('old_password'))
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $errors->first('old_password') }}.</strong>
                                        </span>
                                         @endif
                                    </div>

                                    <div class="form-group">
                                        <label class="float-left" for="password">New Password</label>
                                        <input class="form-control" type="password"  name="new_password"  id="password" placeholder="Enter your new password">
                                        <span id="passwordError" class="error text-danger"></span>
                                        @if ($errors->has('new_password'))
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $errors->first('new_password') }}.</strong>
                                            </span>
                                    @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="float-left" for="password">Confirm Password</label>
                                        <input class="form-control" type="password"  name="confirm_password"   placeholder="Enter your confirm password">
                                        @if ($errors->has('confirm_password'))
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $errors->first('confirm_password') }}.</strong>
                                            </span>
                                    @endif
                                    </div>
                                    

                                    <div class="form-group mb-0">
                                        <button class="btn btn-primary btn-block" name="submit" type="submit"> Submit </button>
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

    <script>
        document.getElementById('password').addEventListener('input', function() {
            const password = this.value;
            const errorElement = document.getElementById('passwordError');

            if (password.length < 8) {
                errorElement.textContent = 'Password must be at least 8 characters long.';
            } else if (!password.includes('@')) {
                errorElement.textContent = 'Password must contain an @ sign.';
            } else {
                errorElement.textContent = '';
            }
        });

        document.getElementById('passwordForm').addEventListener('submit', function(event) {
            const password = document.getElementById('password').value;
            const errorElement = document.getElementById('passwordError');

            if (password.length < 8 || !password.includes('@')) {
                event.preventDefault();
                errorElement.textContent = 'Password must be at least 8 characters long and contain an @ sign.';
            }
        });
    </script>
@endsection