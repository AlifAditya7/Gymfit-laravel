<!doctype html>
<html lang="en">
  <head>
  	<title>Sign Up</title>
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
					<h2 class="heading-section">Sign Up Account</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<form action="{{ route('register') }}" method="POST" class="signin-form">
							@csrf
		      		<div class="form-group">
		      			<input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="{{ __('Username') }}" name="name" value="{{ old('name') }}" autocomplete="name" autofocus required>
								@error('name')
										<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
										</span>
								@enderror
		      		</div>
							<div class="form-group">
		      			<input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('Email Address') }}" name="email" value="{{ old('email') }}" autocomplete="email" autofocus required>
								@error('email')
										<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
										</span>
								@enderror
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{ __('Password') }}" autocomplete="new-password" name="password" required>
	              @error('password')
										<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
										</span>
								@enderror
	            </div>
							<div class="form-group">
	              <input id="password-confirm" type="password" class="form-control" placeholder="{{ __('Password') }}" autocomplete="new-password" name="password_confirmation" required>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Sign Up</button>
	            </div>
	          </form>
	          <p class="w-100 text-center">&mdash; Have an account? &mdash;</p>
	          <div class="social d-flex text-center">
	          	<a href="{{ route('login') }}" class="px-2 py-2 mr-md-1 rounded"> Sign In</a>
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

