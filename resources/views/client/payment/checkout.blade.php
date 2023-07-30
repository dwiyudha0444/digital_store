<!DOCTYPE html>
<html lang="en">
<head>
	<title>Payments</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="{{ config('midtrans.client_key') }}"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
  

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
				
					<span class="login100-form-title p-b-49">
						Payment Detail
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Name is reauired">
						<span class="label-input100">Nama</span>
						<input class="input100" type="text" value="{{ $order->nama }}" disabled>
						{{-- <span class="focus-input100" data-symbol="&#xf206;"></span> --}}
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate="No WhatsApp is required">
						<span class="label-input100">WhatsApp</span>
						<input class="input100" type="text" value="{{ $order->no_wa }}" disabled>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate="qty is required">
						<span class="label-input100">Qty</span>
						<input class="input100" type="text" value="{{ $order->qty }}" disabled>
					</div>

                    <div class="wrap-input100 validate-input m-b-23" data-validate="qty is required">
						<span class="label-input100">Total Harga</span>
						<input class="input100" type="text"  value="{{ $order->total_harga }}" disabled>
					</div>
					
					<div class="text-right p-t-8 p-b-31">
						
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" id="pay-button">
								Bayar Sekarang
							</button>
						</div>
					</div>

				
			</div>
		</div>
	</div>
	


	<div id="dropDownSelect1"></div>
	
    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function () {
          // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
          window.snap.pay('{{ $snapToken }}', {
            onSuccess: function(result){
              /* You may add your own implementation here */
              alert("payment success!"); console.log(result);
            },
            onPending: function(result){
              /* You may add your own implementation here */
              alert("wating your payment!"); console.log(result);
            },
            onError: function(result){
              /* You may add your own implementation here */
              alert("payment failed!"); console.log(result);
            },
            onClose: function(){
              /* You may add your own implementation here */
              alert('you closed the popup without finishing the payment');
            }
          })
        });
      </script>

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