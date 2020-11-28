
@extends('user.layout')

@section('title', 'Profile')

@section('style')
<style>
    .tabcontent1 { display: none;}
    .tabcontent1 .active{display: block; display: show ;}
</style>
@endsection
@section('content')
 

<form id="target"  action="{{url('/profile',1)}}" method="post">

<div class="job-search-page5">
        


    </div>
<div class="maindiv-page5">



     <nav class="multiTabs">
        <div class="nav nav-tabs nav-fill navfor-header" id="nav-tab" role="tablist">
          <!-- <a class="nav-item nav-link show active" id="nav-home-tab" data-toggle="tab" href="#content1" data-trigger='content1'>Personal</a> -->
          <a class="nav-item nav-link show active items-nv" id="nav-home-tab1"  >Personal</a>
          <a class="nav-item nav-link " id="nav-home-tab2" >Experience</a>
          <a class="nav-item nav-link " id="nav-home-tab3" >Education</a>
          <a class="nav-item nav-link " id="nav-home-tab4" >Skills</a>
          <!-- <a class="nav-item nav-link " href="javascript:void(0)" data-trigger='content5'>Tab5</a> -->
        </div>
     </nav>






{{csrf_field()}}
      <div class="tab-content pt-5" id="nav-tabContent">
            <div class="tabcontent1 active bg-light" id="content1">
                <div class="container shadow bg-white  pl-5 pr-5 pb-5">
                                    
                                        <div class="form-group">
                                            <h6>First Name</h6>
                                            <input type="text" name="fname" class="form-control form-control-lg">
                                        </div>
                                        <div class="form-group">
                                            <h6>Last Name</h6>
                                            <input type="text" name="lname" class="form-control form-control-lg">
                                        </div>
                                       
                                        <div class="form-group">
                                            <h6>Email</h6>
                                            <input type="email" name="email" class="form-control form-control-lg" placeholder="xyz@gmail.com">
                                        </div>
                                        <div>
                                            <h6>Phone</h6>
                                        </div>
                                        <div class="form-group input-group">

                                            <div class="btn-group input-group-prepend">

                                                <input name="code" type="button"
                                                    class="btn btn-light dropdown-toggle dropdown-toggle-split"
                                                    data-toggle="dropdown">
                                                    <span class=""></span> +27
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">+92</a>
                                                    <a class="dropdown-item" href="#">+42</a>
                                                </div>
                                            </div>





                                            <input type="text" name="number" class="form-control form-control-lg" placeholder="1234567">
                                        </div>
                                        <div class="form-group">
                                            <h6>Current City</h6>
                                            <input name="city" type="text" class="form-control form-control-lg"
                                                placeholder="Tell us about your current city">
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <label class="form-check-label"><input name="outsideAf" type="checkbox" ></label>
                                                </div>
                                                <div class="col-md-10">
                                                    <span>Outside South Africa</span>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="mt-5">
                                            <h5>Upload Resume</h5>
                                        </div>

                                        <div class="row mt-4 mb-5">
                                            <div class="col-md-4">
                                                <button type="button" class="btn btn-success btn-lg btn-block">Upload
                                                    Resume</button>
                                            </div>
                                            <div class="col-md-4 text-center">
                                                <span class="text-weight-bolder">-or-</span>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="#">Copy-Paste your resume here</a>
                                            </div>
                                        </div>

                                        <div class="form-group mt-4">
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <label class="form-check-label"><input type="checkbox"></label>
                                                </div>
                                                <div class="col-md-10">
                                                    <span> I agreed to the Terms and Conditions and Privacy Policy
                                                        governing the use of website.com.I
                                                        hereby consent to receive calls and/or texts and/or WhatsApp
                                                        messages from website
                                                        and employers who use Indeed, including using automated call
                                                        technology or
                                                        recorded calls, at the telephone number provided above,
                                                        including if this number
                                                        is a wireless (cell phone) number.</span>
                                                </div>
                                            </div>


                                        </div>


                                    </form>

                                    

                                        <div class="container">
                                            <div class="container p-5">
                                              <div class="row">
                                                <div class="col-md-4">
                                                  
                                                </div>
                                                <div class="col-md-4">
                                                  <button type="button" id="btn-Next"  class="btn btn-danger btn-lg btn-block" onclick="next(2)">Next</button>
                                                </div>
                                              </div>
                                                
                                            </div>
                                            
                                        </div>



                                </div>
            </div>
            <!-- ###########################Personal End###########################3 -->
            <div class="tabcontent1 bg-light" id="content2">
                <div class="card shadow border-light mb-3">
                                    <div class="card-body p-5">
                                        <!-- <span class="save-card-header fontclassspan"><i class="fa fa-star-o mr-2"></i>save</span> -->
                                        <h4 class="card-title">Android Developer</h4>
                                        <span class="save-card-header"><a href="#" class="page5-anchertag"> <i
                                                    class="fa fa-pencil mr-2"></i> </a> <a href="#"
                                                class="page5-anchertag"> <i class="fa fa-trash-o"></i></a> </span>
                                        <h6 class="card-title  page5-span">Highapp Solutions Lahore</h6>
                                        <h6 class="card-title page5-span">October 2012 to Present</h6>

                                        <p class="card-text page5-span"> Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud
                                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </p>

                                        

                                            <div class="form-group p-5">




                                                <div>
                                                    <h5>Job Title</h5>
                                                </div>
                                                <div class="form-group input-group">

                                                    <select class="form-control form-control-lg">
                                                    <option>Level of Education</option>
                                                    </select>

                                                    
                                                </div>
                                                <div class="form-group">
                                                    <h5>Company</h5>
                                                    <input type="text" class="form-control form-control-lg" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <h5>Current City</h5>
                                                    <input type="text" class="form-control form-control-lg"
                                                        placeholder="Tell us about your current city">
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <label class="form-check-label"><input
                                                                    type="checkbox"></label>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <span>Outside South Africa</span>
                                                        </div>
                                                    </div>


                                                </div>
                                                <div>
                                                    <h5>Time Period</h5>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <label class="form-check-label"><input
                                                                    type="checkbox"></label>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <span>I currently go here</span>
                                                        </div>
                                                    </div>


                                                </div>

                                                <div>
                                                    <h5>From</h5>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-1">
                                                        
                                                    </div>
                                                    <div class="col-md-6">
                                                        <select class="form-control form-control-lg">
                                                        <option>Month</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select class="form-control form-control-lg">
                                                            <option>Year</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div>
                                                    <h5>To</h5>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-1">
                                                        
                                                    </div>
                                                    <div class="col-md-6">
                                                        <select class="form-control form-control-lg">
                                                        <option>Month</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select class="form-control form-control-lg">
                                                            <option>Year</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="pt-5 ">
                                                    <button class="btn btn-lg page5-savebtn text-center">Save</button>
                                                </div>

                                            </div>


                                         
                                         <div class="container">
                                            <div class="container p-5">
                                              <div class="row">
                                                <div class="col-md-4">
                                                  
                                                </div>
                                                <div class="col-md-4">
                                                  <button type="button" id="btn-Next"  class="btn btn-danger btn-lg btn-block" onclick="next(3)">Next</button>
                                                </div>
                                              </div>
                                                
                                            </div>
                                            
                                        </div>

                                    </div>

                                </div>
            </div>
            <!-- ########################### Experience End ############################ -->
            <div class="tabcontent1  bg-light" id="content3">
                <div class="card shadow border-light mb-3">
                                    <div class="card-body p-5">
                                        
                                        <h1 class="card-title">High School in Computer Science</h1>
                                        <span class="save-card-header"><a href="#" class="page5-anchertag"> <i
                                                    class="fa fa-pencil mr-2"></i> </a> <a href="#"
                                                class="page5-anchertag"> <i class="fa fa-trash-o"></i></a> </span>
                                        <h6 class="card-title page5-span">THINK Digital College - Virtual School in South Africa </h6>
                                        <h6 class="card-title  page5-span">- Pretoria, Gauteng</h6>
                                        <h6 class="card-title page5-span">October 2010 to September 2015</h6>
                                        <hr class="mt-4 mb-5">


                                          
                                            <div class="form-group">




                                                <div>
                                                    <h5>Level of Education</h5>
                                                </div>
                                                <div class="form-group input-group">

                                                    <select class="form-control form-control-lg">
                                                    <option>Level of Education</option>
                                                    </select>

                                                    
                                                </div>
                                                <div class="form-group">
                                                    <h5>School</h5>
                                                    <input type="text" class="form-control form-control-lg" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <h5>Field of Study</h5>
                                                    <p>e.g, Biology, Computer Science, Nursing</p>
                                                    <input type="text" class="form-control form-control-lg"
                                                        placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <h5>Current City</h5>
                                                    <input type="text" class="form-control form-control-lg"
                                                        placeholder="Tell us about your current city">
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <label class="form-check-label"><input
                                                                    type="checkbox"></label>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <span>Outside South Africa</span>
                                                        </div>
                                                    </div>


                                                </div>
                                                <div>
                                                    <h5>Time Period</h5>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <label class="form-check-label"><input
                                                                    type="checkbox"></label>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <span>I currently go here</span>
                                                        </div>
                                                    </div>


                                                </div>

                                                <div>
                                                    <h5>From</h5>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-1">
                                                        
                                                    </div>
                                                    <div class="col-md-6">
                                                        <select class="form-control form-control-lg">
                                                        <option>Month</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select class="form-control form-control-lg">
                                                            <option>Year</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div>
                                                    <h5>To</h5>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-1">
                                                        
                                                    </div>
                                                    <div class="col-md-6">
                                                        <select class="form-control form-control-lg">
                                                        <option>Month</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select class="form-control form-control-lg">
                                                            <option>Year</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="pt-5 ">
                                                    <button class="btn btn-lg page5-savebtn text-center">Save</button>
                                                </div>

                                            </div>














                                        


                                                <div class="container">
                                            <div class="container p-5">
                                              <div class="row">
                                                <div class="col-md-4">
                                                  
                                                </div>
                                                <div class="col-md-4">
                                                  <button type="button" id="btn-Next"  class="btn btn-danger btn-lg btn-block" onclick="next(4)">Next</button>
                                                </div>
                                              </div>
                                                
                                            </div>
                                            
                                        </div>


                                    

                                        

                                        

                                    </div>

                                </div>
                            </div>
            
            <!-- ###################### Education End ################################# -->
            <div class="tabcontent1  bg-light" id="content4">
                <div class="container">
                                <div class="card shadow border-light mb-3">
                                    <div class="card-body p-5">
                                        <h3 class="card-title">Recommendation: include 3-5 of your top skills to help
                                        you stand out.</h3>
                                                <div>
                                                    <h5 class="mt-5">Add a new skill</h5>
                                                    <p class="text-muted">e.g. Microsoft Office</p>
                                                </div>
                                                <div class="form-group input-group">

                                                    <select class="form-control form-control-lg">
                                                    <option>C++</option>
                                                    </select>

                                                    
                                                </div>


                                                <div class="mt-5 mb-3">
                                                    <hr>
                                                </div>



                                        <span class="save-card-header"><a href="#" class="page5-anchertag"> <i
                                                    class="fa fa-pencil mr-2"></i> </a> <a href="#"
                                                class="page5-anchertag"> <i class="fa fa-trash-o"></i></a> </span>
                                        <h6 class="card-title page5-span ">Adobe Photoshop </h6>
                                        <div class="mb-2" >
                                                    <hr>
                                        </div>
                                        <span class="save-card-header"><a href="#" class="page5-anchertag"> <i
                                                    class="fa fa-pencil mr-2"></i> </a> <a href="#"
                                                class="page5-anchertag"> <i class="fa fa-trash-o"></i></a> </span>
                                        <h6 class="card-title  page5-span">Adobe XD</h6>
                                    

                                        

                                        

                                    </div>
                                     <div class="container">
                                            <div class="container p-5">
                                              <div class="row">
                                                <div class="col-md-4">
                                                  
                                                </div>
                                                <div class="col-md-4">
                                                  <input type="submit" value="Submit"  class="btn btn-danger btn-lg btn-block"> 
                                                </div>
                                              </div>
                                                
                                            </div>
                                            
                                        </div>

                                </div>
                            </div>
            </div>
            <!-- #########################Skills End################################# -->

         
        </div>
     

</div>
</form> 
<script>
            var currentTab = 1;
           
            $(".tabcontent1").hide();
             
            function next(currentTab){
                if(currentTab < 5){
                    $(".tabcontent1").hide();
                    // currentTab++;
                    $("#content"+(currentTab)).show();
                     var check = ("#nav-home-tab"+currentTab);
                            
                           $(check).addClass("active");
                     
                      
                    
                                 }
                     
                  
            }
             
         
        </script>

@endsection
@section('script')
        

@endsection