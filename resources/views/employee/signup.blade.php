<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/etc/regform/colorlib-regform-5/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Nov 2020 12:43:30 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Colorlib Templates">
<meta name="author" content="Colorlib">
<meta name="keywords" content="Colorlib Templates">

<title>Register Company</title>

<link href="{{url('employee/signup/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
<link href="{{url('employee/signup/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

<link href="{{url('employee/signup/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
<link href="{{url('employee/signup/vendor/datepicker/daterangepicker.css')}}" rel="stylesheet" media="all">

<link href="{{url('employee/signup/css/main.css')}}" rel="stylesheet" media="all">
</head>
<body>
<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
<div class="wrapper wrapper--w790">
<div class="card card-5">
<div class="card-heading">
<h2 class="title">Company Registration Form</h2>
</div>

<div class="card-body">
<form method="POST">
    @csrf
<div class="form-row m-b-55">
<div class="name">Name</div>
<div class="value">
<div class="row row-space">
<div class="col-2">
<div class="input-group-desc">
<input class="input--style-5" type="text" name="name">
<label class="label--desc">Company Name</label>
</div>
</div>
<div class="col-2">
<div class="input-group-desc">
<input class="input--style-5" type="text" name="company_type" placeholder="IT..">
<label class="label--desc">Company Type</label>
</div>
</div>
</div>
</div>
</div>
<div class="form-row">
<div class="name">Company web</div>
<div class="value">
<div class="input-group">
<input class="input--style-5" type="text" name="company" placeholder="www.?.com">
</div>
</div>
</div>
<div class="form-row">
<div class="name">Password</div>
<div class="value">
<div class="input-group">
<input class="input--style-5" type="email" name="email">
</div>
</div>
</div>


<div class="form-row">
<div class="name">Re-Password</div>
<div class="value">
<div class="input-group">

  <input name="password" class="input--style-5" id="password" type="password" />
</div>
</div>
</div>


<div class="form-row">
<div class="name">Email</div>
<div class="value">
<div class="input-group">
  <input type="password" class="input--style-5" name="confirm_password" id="confirm_password" />
  <label class="label--desc" id='message'></label>
</div>
</div>
</div>


 
<div class="form-row">
<div class="name">Address</div>
<div class="value">
<div class="input-group">
<textarea class="input--style-5" name="address"></textarea>
</div>
</div>
</div>
<div class="form-row m-b-55">
<div class="name">Phone</div>
<div class="value">
<div class="row row-refine">
<div class="col-3">
<div class="input-group-desc">
<input class="input--style-5" type="text" name="area_code">
<label class="label--desc">Area Code</label>
</div>
</div>
<div class="col-9">
<div class="input-group-desc">
<input class="input--style-5" type="text" name="mobile_number">
<label class="label--desc">Phone Number</label>
</div>
</div>
</div>
</div>
</div>
<div class="form-row">
<div class="name">Company Number</div>
<div class="value">
<div class="input-group">
<div class="rs-select2 js-select-simple select--no-search">
<select id="select" name="subject">
<option disabled="disabled" selected="selected">Choose option</option>
<option>Pakistan</option>
<option>India</option>
<option>South Africa</option>
</select>
<div class="select-dropdown"></div>
</div>
</div>
</div>
</div>
<div class="form-row" id="company_number" style="display:none;">
<div class="name">Company Number</div>
<div class="value">
<div class="input-group">
<input class="input--style-5" id="c" maxlength="14"  type="text" name="company_number">
</div>
</div>
</div>
<div class="form-row">
<div class="name">About Company</div>
<div class="value">
<div class="input-group">
<textarea class="input--style-5" name="detail"></textarea>
</div>
</div>
</div>
<div class="form-row p-t-20">
<label class="label label--block">Are you an existing customer?</label>
<div class="p-t-15">
<label class="radio-container m-r-55">Yes
<input type="radio" checked="checked" name="exist">
<span class="checkmark"></span>
</label>
<label class="radio-container">No
<input type="radio" name="exist">
<span class="checkmark"></span>
</label>
</div>
</div>
<div>
<button class="btn btn--radius-2 btn--red" id="submit" type="submit">Register</button>
</div>
</form>
</div>
</div>
</div>
</div>

<script src="{{url('employee/signup/vendor/jquery/jquery.min.js')}}"></script>
<script>
    $('#select').change(function(){
     // if($('#select option:selected').text() == "Pakistan"){
        $('#c').attr("placeholder", $('#select option:selected').text());
        $('#company_number').show();
     // }
     // else{
     //    $('#company_number').hide();
     // }
 });
    $('#password, #confirm_password').on('keyup', function () {
  if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html('Matching').css('color', 'green');
     
  } else 
   
    $('#message').html('Not Matching').css('color', 'red');
     
});
</script>
<script src="{{url('employee/signup/vendor/select2/select2.min.js')}}"></script>
<script src="{{url('employee/signup/vendor/datepicker/moment.min.js')}}"></script>
<script src="{{url('employee/signup/vendor/datepicker/daterangepicker.js')}}"></script>

<script src="{{url('employee/signup/js/global.js')}}"></script>


</body>

<!-- Mirrored from colorlib.com/etc/regform/colorlib-regform-5/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Nov 2020 12:43:32 GMT -->
</html>
