<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from coderthemes.com/minton_html/layouts/default/auth-login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Jul 2022 02:21:24 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Log In </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('web/assets/images/favicon.ico')}}">

		<!-- App css -->
		<link href="{{asset('web/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bs-stylesheet" />
		<link href="{{asset('web/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-stylesheet" />

		<!-- icons -->
		<link href="{{asset('web/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

    </head>

    <body class="loading auth-fluid-pages pb-0">

        <div class="auth-fluid">
            <!-- Auth fluid right content -->
            <div class="auth-fluid-right">
                <div class="auth-user-testimonial">
                    <h3 class="mb-3 text-white">Very elegant & impressive!</h3>
                    <p class="lead fw-normal"><i class="mdi mdi-format-quote-open"></i> I've been using this theme for a while and I must say that whenever I am looking for a design - I refer to this theme for specifics & implementation. With wide arrays of components, designs, charts - I would highly recommend this theme for anyone using it for dashboard or project management usage.. <i class="mdi mdi-format-quote-close"></i>
                    </p>
                    <h5 class="text-white">
                        - Admin User
                    </h5>
                </div> <!-- end auth-user-testimonial-->
            </div>
            <!-- end Auth fluid right content -->

            <!--Auth fluid left content -->
            <div class="auth-fluid-form-box">
                <div class="align-items-center d-flex h-100">
                    <div class="card-body">

                        <!-- Logo -->
                        <div class="auth-brand text-center text-lg-start">
                            <div class="auth-logo">
                                <a href="index.html" class="logo logo-dark text-center">
                                    <span class="logo-lg">
                                        <img src="{{asset('web/assets/images/logo-dark.png')}}" alt="" height="22">
                                    </span>
                                </a>

                                <a href="index.html" class="logo logo-light text-center">
                                    <span class="logo-lg">
                                        <img src="{{asset('web/assets/images/logo-light.png')}}" alt="" height="22">
                                    </span>
                                </a>
                            </div>
                        </div>

                        <!-- title-->
                        <h4 class="mt-0">Sign In</h4>
                        <p class="text-muted mb-4">Enter your email address and password to access admin panel.</p>

                        <!-- form -->
                        <form action="{{route('login')}}" method="POST" >
                            @csrf
                            <div class="mb-2">
                                <label for="emailaddress" class="form-label">Email address</label>
                                <input class="form-control" type="email" id="emailaddress" required="" name="email" placeholder="Enter your email" value="{{old('email')}}">
                                @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <a href="auth-recoverpw-2.html" class="text-muted float-end"><small>Forgot your password?</small></a>
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password">
                                    <div class="input-group-text" data-password="false">
                                        <span class="password-eye"></span>
                                    </div>
                                </div>
                                @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="checkbox-signin" name="remember">
                                    <label class="form-check-label" for="checkbox-signin">
                                        Remember me
                                    </label>
                                </div>
                            </div>
                            <div class="d-grid text-center">
                                <button class="btn btn-primary" type="submit">Log In </button>
                            </div>
                            <!-- social-->
                            <div class="text-center mt-4">
                                <h5 class="mt-0 text-muted">Sign in with</h5>
                                <ul class="social-list list-inline mt-3 mb-0">
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-purple text-purple"><i class="mdi mdi-facebook"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </form>
                        <!-- end form-->

                        <!-- Footer-->
                        <footer class="footer footer-alt">
                            <p class="text-muted">Don't have an account? <a href="auth-register-2.html" class="text-primary fw-medium ms-1">Sign Up</a></p>
                        </footer>

                    </div> <!-- end .card-body -->
                </div> <!-- end .align-items-center.d-flex.h-100-->
            </div>
            <!-- end auth-fluid-form-box-->
        </div>
        <!-- end auth-fluid-->

         <!-- Vendor js -->
         <script src="{{asset('web/assets/js/vendor.min.js')}}"></script>


        <!-- App js -->
        <script src="{{asset('web/assets/js/app.min.js')}}"></script>

    </body>

</html>
