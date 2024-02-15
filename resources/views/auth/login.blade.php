<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?php echo url('login-form-20'); ?>/css/style.css">

	</head>
	<body class="img js-fullheight">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Log in Account</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Have an account?</h3>
		      	<form action="{{ route('login') }}" method="POST" class="signin-form">
							@csrf
		      		<div class="form-group">
		      			<input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('Email Address') }}" name="email" value="{{ old('email') }}" autocomplete="email" autofocus required>
								@error('email')
										<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
										</span>
								@enderror
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{ __('Password') }}" autocomplete="current-password" name="password" required>
	              @error('password')
										<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
										</span>
								@enderror
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">{{ __('Remember Me') }}
									  <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									@if (Route::has('password.request'))
										<a class="btn" style="color: #fff" href="{{ route('password.request') }}">
											{{ __('Forgot Password?') }}
										</a>
									@endif
								</div>
	            </div>
	          </form>
	          <p class="w-100 text-center">&mdash; Create An Account &mdash;</p>
	          <div class="social d-flex text-center">
	          	<a href="{{ route('register') }}" class="px-2 py-2 mr-md-1 rounded"> Sign Up</a>
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="<?php echo url('login-form-20'); ?>/js/jquery.min.js"></script>
  <script src="<?php echo url('login-form-20'); ?>/js/popper.js"></script>
  <script src="<?php echo url('login-form-20'); ?>/js/bootstrap.min.js"></script>
  <script src="<?php echo url('login-form-20'); ?>/js/main.js"></script>

	</body>
</html>

