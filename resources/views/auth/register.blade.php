

<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Doccure - Register</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="/admin/assets/img/favicon.png">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/admin/assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="/admin/assets/css/font-awesome.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="/admin/assets/css/style.css">
		
		<!--[if lt IE 9]>
			<script src="/admin/assets/js/html5shiv.min.js"></script>
			<script src="/admin/assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper login-body">
            <div class="login-wrapper">
            	<div class="container">
                	<div class="loginbox">
                    	<div class="login-left">
							<img class="img-fluid" src="/admin/assets/img/logo-white.png" alt="Logo">
                        </div>
                        <div class="login-right">
							<div class="login-right-wrap">
								<h1>Register</h1>
								<p class="account-subtitle">Access to our dashboard</p>
                                @if ($errors->any())
                                  @foreach ($errors->all() as $a )
                                  <ul>
                                      <li class="alert alert-danger">
                                          {{ $a }}
                                      </li>
                                  </ul>
                                      
                                  @endforeach
                                    
                                @endif
								
								<!-- Form -->
                        <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
									<div class="form-group">
										<input class="form-control" type="text" placeholder="Name" name="name" value="{{ old('name') }}">
									</div>
									<div class="form-group">
										<input class="form-control" type="text" placeholder="Email" name="email" value="{{ old('email') }}">
									</div>
									<div class="form-group">
										<input class="form-control" type="text" placeholder="Password" name="password" value="{{ old('password') }}">
									</div>
									<div class="form-group">
										<input class="form-control" type="text" placeholder="Confirm Password" name="password_confirmation">
									</div>
									<div class="form-group mb-0">
										<button class="btn btn-primary btn-block" type="submit">Register</button>
									</div>
								</form>
								<!-- /Form -->
								
								<div class="login-or">
									<span class="or-line"></span>
									<span class="span-or">or</span>
								</div>
								
								<!-- Social Login -->
								{{-- <div class="social-login">
									<span>Register with</span>
									<a href="#" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" class="google"><i class="fa fa-google"></i></a>
								</div> --}}
								<!-- /Social Login -->
								
								<div class="text-center dont-have">Already have an account? <a href="{{ route('login') }}">Login</a></div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="/admin/assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="/admin/assets/js/popper.min.js"></script>
        <script src="/admin/assets/js/bootstrap.min.js"></script>
		
		<!-- Custom JS -->
		<script src="/admin/assets/js/script.js"></script>
		
    </body>

</html>
