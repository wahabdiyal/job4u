@extends('employee.layout')

@section('title', 'Employee')

 
@section('content')
 
<!-- ########################## -->
   <div class="container-fluid">
    <div class="row">
        
        <div class="col-md-12 bg-light">
        	<form action="{{url('/employee/firstJobForm2')}}" method="post">
            <section class=" bg-light p-5 justify-content-center">
        <section class=" justify-content-center">
            
        @csrf 
        <section class="shadow bg-white  ">
            
            <div class="p-5 ">
                <div class="form-group">
                <h4 class="card-title" style="font-weight: bold;">Job Details</h4>
                </div>
                <!-- ############ Job Detail Section ###################-->
                <section class=" bg-light shadow p-4"> 
                    <div>
                        <span >Job Titles: <span class="ml-1">{{session()->get('form1')['job_title']}}</span></span>
                    </div>
                    <div>
                        <span >Job Company Name: <span class="ml-1"> {{session()->get('emply')->name}}</span></span>
                    </div>
                    <div>
                        <span >Job Location: <span class="ml-1">{{session()->get('emply')->address}}</span></span>
                    </div>
                    
                </section>
                <!-- ######################################################## -->
                <div class="form-group mt-5">
                                    <h6 style="font-weight: bold;">What type of Employement is it?<span class="ml-1"
                                            style="color: red;">*</span></h6>
                                            <select name="employment_type" class="custom-select" id="inputGroupSelect01"
                                            style="border: 1px solid black;">
                                            <option selected value="part-time">Part-Time</option>
                                            <option value="full-time">Full-Time</option>
                                            <option value="internship">Internship</option>
                                            
                                        </select>
                                </div>
                                 <div class="form-group mt-5">
                                    <h6 style="font-weight: bold;">Type of candidates <span class="ml-1"
                                            style="color: red;">*</span></h6>
                                            <select class="custom-select" id="inputGroupSelect01"
                                            style="border: 1px solid black;" name="candidate">
                                            <option selected value="Job Seeker">Job seeker</option>
                                            <option value="Handicap">Handicap person</option>
                                            <option value="Trainer">Trainer</option>
                                            <option value="Student">Student</option>
                                            <option value="Apprentice">Apprentice</option>
                                            <option value="Subsidized Contract">Subsidized Contract</option>
                                        </select>
                                </div>
                                <div class="form-group mt-5">
                                    <h6 style="font-weight: bold;">Term contract of this job: <span class="ml-1"
                                            style="color: red;">*</span></h6>
                                            <select class="custom-select" id="team_contract"
                                            style="border: 1px solid black;" name="term_contract">
                                            <option selected value="CDD">CDD (Fixed Term)</option>
                                            <option value="CDI">CDI (No fixed Term contract)</option>
                                             
                                        </select>
                                </div>
                                <div class="mt-5">
                                    <h6 style="font-weight: bold;">Remote?</h6>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend p-2" style="border: 1px solid lightgray;">
                                            <div class="form-check bg-white text-center">
                                                <input type="radio" class="form-check-input mt-2" id="radio2"
                                                    name="remote" value="No" checked>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control form-control-lg bg-white"
                                            placeholder="No" readonly>
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend p-2" style="border: 1px solid lightgray;">
                                            <div class="form-check bg-white text-center">
                                                <input type="radio" class="form-check-input mt-2" id="radio2"
                                                    name="remote" value="Yes">
                                            </div>
                                        </div>
                                        <input type="text" class="form-control form-control-lg bg-white"
                                            placeholder="Yes" readonly>
                                    </div>
  
                                </div>
                               
                              
                               
                               
            </div>
        </section>


            <!-- ################Salary Section############################## -->
            <section class=" bg-white shadow mt-5 p-2 mb-5">
            <div class="row p-2">
                
                   <div class="p-5">
                        <div class="form-group mt-5">
                                    <h6 style="font-weight: bold;">Experience<span class="ml-1"
                                            style="color: red;">*</span></h6>
                                           <input type="text" name="experience" class="form-control form-control-lg bg-white" pattern="^\d{1}-\d{0,20}"  required placeholder="1-?">
                         </div>
                          <div class="">
                            <h4 class="card-title" style="font-weight: bold;">Salary</h4>
                          </div>
                          <div class=" mt-5">
                               <h6 style="font-weight: bold;">Compensation</h6>
                          </div>

                       


                          <div class="row mt-5">

                              <div class="col-md-4">
                                 <div class="input-group mb-3">
                                 <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1" style="background-color: white; border: 1px solid black; border-right: none;">PKR:</span>
                                            </div>
                                <input type="number"  name="start_salary"  class="form-control" placeholder="Example: 5,00,000" aria-label="Username" aria-describedby="basic-addon1" style="border: 1px solid black; border-left: none; ">
                                </div>
                              </div>
                              <div class="col-md-1 text-center">
                                  <label class="text-center mt-2">TO</label>
                              </div>
                              <div class="col-md-4">
                                  <div class="input-group mb-3">
                                 <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1" style="background-color: white; border: 1px solid black; border-right: none;">PKR</span>
                                            </div>
                                <input type="number" class="form-control" name="end_salary" placeholder="Example: 5,00,000" aria-label="Username" aria-describedby="basic-addon1" style="border: 1px solid black; border-left: none;">
                                </div>
                              </div>
                              <div class="col-md-3 input-group">
  
                                <select name="salary_type" class="custom-select" id="inputGroupSelect01" style="border: 1px solid black;">
                                  <option selected value="monthly">monthly</option>
                                  <option value="yearly">yearly</option>
                                  
                                 </select>
                                </div>


                          </div>

                    </div>  
                       

            </div>    
            </section>
            <!--  ###############################################################-->
            <section class=" bg-white shadow mt-5 p-2 mb-5">
                <div class="p-5 ">
                <div class="form-group">
                <h4 class="card-title" style="font-weight: bold;">Job Details</h4>
                </div>
                <div class="mt-5">
                    <h6 style="font-weight: bold;">Describe the responsibilities of this job, required work experience, skills, or education.</h6>
                     <textarea name="job_description"></textarea>
                </div> 
                </div>
                
            </section>







        <section class=" bg-white shadow mt-5 p-2 mb-5">
            <div class="row p-3">
                
        
         <div class="col-md-3">
             <button class="btn btn-outline-danger btn-block">Back</button>
         </div>   
         <div class="col-md-6">
             
         </div>
         <div class="col-md-3 text-right">
            <button type="submit" class="btn btn-danger btn-block">Continue</button>

         </div>
        </div>    
        </section>
        </section>
    </section>
</form>
        </div>
        
        
    </div>
    
</div>
@endsection

@section('script')
<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
  <script>
                        CKEDITOR.replace( 'job_description' );
                </script>

@endsection