
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('user/css/style2.css')}}">
    <link rel="stylesheet" href="{{url('user/css/mystyle.css')}}">
    <link rel="stylesheet" href="{{url('user/css/style3.css')}}">
    <!-- <link rel="stylesheet" href="{{url('dropzone/dropzone.min.css')}}"> -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
   @yield('css')

 	
 	@yield('style')

</head>
<body>
	@include('user.nav')

	@yield('nav')

	@yield('content')


	@include('user.footer')
 
    @yield('model')
	@include('user.models')
      @if($errors->any())
 
 <script>
     alert('{{$errors->first()}}');
 </script>
   
 @endif  
	 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @if(session()->get('user'))
     <script>
 $("#outsideofafrica").click(function(){
if ($('#outsideofafrica').is(":checked"))
{
    $('<input>').attr({
    type: 'hidden',
    id: 'location',
    name: 'checkbox',
    value: 'checked'
}).appendTo('#hidden');
}
});

  $("#upload").one( "click", function() {

    $('<input>').attr({
    type: 'file',
    id: 'file',
    name: 'cv'
    
}).appendTo('#upload');
});

// $(document).ready(function(){


// $("#btn-Next").click(function(){
 

// data = {fname:$("#fname").val(), "_token": "{{ csrf_token() }}", lname:$("#lname").val(), email:$("#email").val(), phone:$("#phone").val(), city:$("#city").val(), outsidelocation:$("#location").val()};
// console.log(data);
// $.ajax({
// type: "POST",
// url: "{{url('submituserdetail',session()->get('user')['id'])}}",
// data: data,
// cache: false,
// success: function(data){
// // alert(caseTermes);

// console.log(data);
 
// // var key = JSON.parse(data);
// // if(key.data != ''){
// // $.each(key.data, function(i, item) {
// // var id = item.id;
// // if (id && $('input[type="checkbox"]').prop('checked')==true) {
// // // alert(124);
// // $("#cmdReserver").prop('disabled',false);
// // }
// // });
// // }else{
// // alert("seats are not aviable");
// // $("#cmdReserver").prop('disabled',true);
// // }
// }

// });


// });
// });

// ////practice
 
</script>  
@endif
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- <script src="{{url('dropzone/dropzone.min.js')}}"></script> -->
    
    @yield('script')
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>
</html>
