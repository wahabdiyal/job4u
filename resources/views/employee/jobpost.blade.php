@extends('employee.layout')

@section('title', 'Employee')

 
@section('content')
    <div class="container-fluid">
    <div class="row">
        
            
        <div class="col-md-12 bg-light">
            <form method="post" action="{{url('/employee/firstJobForm')}}">
                @csrf
            <section class=" bg-light p-5 justify-content-center">
        <section class=" justify-content-center">
            
        
        <section class="shadow bg-white  ">
            
                <div class="p-5 ">
                <div class="form-group">
                <h4 class="card-title" style="font-weight: bold;">Let's Get Started</h4>
                </div>
                <div class="form-group mt-5">
                    <h6 style="font-weight: bold;">Company name for this job<span class="ml-1" style="color: red;">*</span></h6>
                     <input type="text" class="form-control form-control-lg" value="{{session()->get('emply')->name}}" required>
                     <input type="hidden" name="company_id" value="{{session()->get('emply')->id}}" >
                </div>
                 <div class="form-group mt-2">
                                    <h6 style="font-weight: bold;">Job title<span class="ml-1" style="color: red;">*</span></h6>
                                    <input type="text" name="job_title" class="form-control form-control-lg" required>
                                </div>
                              <div class="form-group mt-5">
                                    <h6 style="font-weight: bold;">Industry<span class="ml-1"
                                            style="color: red;">*</span></h6>
                                           <input type="text" name="industry" class="form-control form-control-lg bg-white" required placeholder="Computer or Teacher.....">
                                </div>
                                <div class="form-group mt-2">
                                    <h6 style="font-weight: bold;">city<span class="ml-1" style="color: red;">*</span></h6>
                                    <input type="text" name="city" class="form-control form-control-lg" required>
                                </div>
                                  
                                <div>
                                    <h6 style="font-weight: bold;">Address: <span class="ml-1" style="font-weight: normal;">{{session()->get('emply')->address}}</span><a href="#"></a><i class="fa fa-pencil ml-4"></i></h6>
                                </div>
                                <div>
                                    <h6>Job posting will be displayed in: <span>English</span> <a href="#"><i class="fa fa-pencil ml-4"></i></a></h6>
                                </div>
                                   <div class="mt-5">
                                    <h6 style="font-weight: bold;">Does this job allow to work fully remote?</h6>
                                    <div class="input-group mb-3">
                                            <div class="input-group-prepend p-2" style="border: 1px solid lightgray;">
                                                    <div class="form-check bg-white text-center">
                                                        <input type="radio" class="form-check-input mt-2" id="radio2" name="remote" value="No" checked>
                                                    </div>
                                            </div>
                                            <input type="text" class="form-control form-control-lg bg-white"  placeholder="No" readonly>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend p-2" style="border: 1px solid lightgray;">
                                                <div class="form-check bg-white text-center">
                                                    <input type="radio" class="form-check-input mt-2" id="radio2" name="remote" value="Temporarily Due to COVID-19">
                                                </div>
                                        </div>
                                        <input type="text" class="form-control form-control-lg bg-white"  placeholder="Temporarily Due to COVID-19" readonly>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend p-2" style="border: 1px solid lightgray;">
                                                <div class="form-check bg-white text-center">
                                                    <input type="radio" class="form-check-input mt-2" id="radio2" name="remote" value="Yes">
                                                </div>
                                        </div>
                                        <input type="text" class="form-control form-control-lg bg-white"  placeholder="Yes" readonly>
                                    </div>
  
                                </div>
                                 <div class="form-group mt-5">
                                    <h6 style="font-weight: bold;">Job Skill<span class="ml-1"
                                            style="color: red;">*</span></h6>
                                           <input type="text" name="job_skill" class="form-control form-control-lg bg-white" required placeholder="Computer..">
                         </div>
                          <div class="form-group mt-5">
                                    <h6 style="font-weight: bold;">Total Hiring<span class="ml-1"
                                            style="color: red;">*</span></h6>
                                           <input type="text" pattern="^\d{1}-\d{0,20}" name="total_hire" class="form-control form-control-lg bg-white" required placeholder="1-10">
                         </div>
                            </div>
            
        </section>
        <section class=" bg-white shadow mt-5 p-2 mb-5">
            <div class="row p-3">
                
        
         <div class="col-md-3">
             <button type="button" class="btn btn-outline-danger btn-block">Back</button>
         </div>   
         <div class="col-md-6">
             
         </div>
         <div class="col-md-3 text-right">
            <button type="submit"  class="btn btn-danger btn-block">Continue</button>

         </div>
        </div>    
        </section>
        </section>
    </section> </form>
        </div>
       
        
    </div>
    
</div>
   
@endsection
