<!DOCTYPE html>
<html lang="en">
<head>
	<title>Payments</title>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset('form_pay/images/icons/favicon.ico"')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('form_pay/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('form_pay/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('form_pay/fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('form_pay/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('form_pay/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('form_pay/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('form_pay/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('form_pay/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('form_pay/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('form_pay/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('form_pay/images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" method="POST" action="/checkout" enctype="multipart/form-data">
				@csrf
					<span class="login100-form-title p-b-49">
						Form
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Name is reauired">
						<span class="label-input100">Nama</span>
						<input class="input100" type="text" value="{{ $pro->name }}" name="nama_product" placeholder="Type your name">
						{{-- <span class="focus-input100" data-symbol="&#xf206;"></span> --}}
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Name is reauired">
						<span class="label-input100">Nama</span>
						<input class="input100" type="text" name="nama" placeholder="Type your name">
						{{-- <span class="focus-input100" data-symbol="&#xf206;"></span> --}}
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate="No WhatsApp is required">
						<span class="label-input100">No WhatsApp</span>
						<input class="input100" type="text" name="no_wa" placeholder="Type your No WhatsApp">
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate="qty is required">
						<span class="label-input100">Qty</span>
						<input class="input100" type="text" name="qty" placeholder="Type your qty">
					</div>
					
					<div class="text-right p-t-8 p-b-31">
						
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" class="login100-form-btn">
								Checkout
							</button>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="{{ asset('form_pay/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('form_pay/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('form_pay/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{ asset('form_pay/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('form_pay/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('form_pay/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{ asset('form_pay/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('form_pay/vendor/countdowntime/countdowntime.js')}}') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('form_pay/js/main.js')}}"></script>

</body>
</html>