<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/etc/lf/Login_v2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Nov 2020 06:23:03 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>Employee Login </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="images/icons/favicon.ico" />

<link rel="stylesheet" type="text/css" href="{{url('employee/vendor/bootstrap/css/bootstrap.min.css')}}">

<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">

<link rel="stylesheet" type="text/css" href="{{url('employee/vendor/animate/animate.css')}}">

<link rel="stylesheet" type="text/css" href="{{url('employee/vendor/css-hamburgers/hamburgers.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{url('employee/vendor/animsition/css/animsition.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{url('employee/vendor/select2/select2.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{url('employee/vendor/daterangepicker/daterangepicker.css')}}">

<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
<div class="limiter">
<div class="container-login100">
<div class="wrap-login100">
<form class="login100-form validate-form" method="post" action="{{url('/employee/login')}}">
	@csrf
<span class="login100-form-title p-b-26">
<a class="login100-form-title" href="{{url('/')}}">JobForU</a>

</span>
<span class="login100-form-title p-b-48">
<i class="zmdi zmdi-disc-full"></i>
</span>
@if($errors->any())
<h5>{{$errors->first()}}</h5>
@endif
<div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
<input class="input100" type="text"   name="email">
<span class="focus-input100" data-placeholder="Email"></span>
</div>
<div class="wrap-input100 validate-input" data-validate="Enter password">
<span class="btn-show-pass">
<i class="zmdi zmdi-eye"></i>
</span>
<input class="input100" type="password"   name="pass">
<span class="focus-input100" data-placeholder="Password"></span>
</div>
<div class="container-login100-form-btn">
<div class="wrap-login100-form-btn">
<div class="login100-form-bgbtn"></div>
<button class="login100-form-btn">
Login
</button>
</div>
</div>
<div class="text-center p-t-115">
<span class="txt1">
Don’t have an account?
</span>
<a class="txt2" href="{{url('/employee/register')}}">
Sign Up
</a>
</div>
</form>
</div>
</div>
</div>
<div id="dropDownSelect1"></div>

<script src="{{url('employee/vendor/jquery/jquery-3.2.1.min.js')}}"></script>

<script src="{{url('employee/vendor/animsition/js/animsition.min.js')}}"></script>

<script src="{{url('employee/vendor/bootstrap/js/popper.js')}}"></script>
<script src="{{url('employee/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

<script src="{{url('employee/vendor/select2/select2.min.js')}}"></script>

<script src="{{url('employee/vendor/daterangepicker/moment.min.js')}}"></script>
<script src="{{url('employee/vendor/daterangepicker/daterangepicker.js')}}"></script>

<script src="{{url('employee/vendor/countdowntime/countdowntime.js')}}"></script>

<script src="{{url('employee/js/main.js')}}"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
</body>

<!-- Mirrored from colorlib.com/etc/lf/Login_v2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Nov 2020 06:23:07 GMT -->
</html>
