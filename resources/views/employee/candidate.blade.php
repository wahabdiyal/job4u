
@extends('employee.layout')

@section('title', 'Employee')

 
@section('content')


        
    <div class="container-fluid p-4 bg-light">
        <div class="row">
            <div class="col-md-3">
                <h6 style="font-size: 0.8em; font-weight: bold">Back-end Developer for Wordpress - <span>Lahore</span></h6>
                <div class="">
                    <span class="fa fa-chevron-left" style="font-size: 0.8em; color: lightgray;"><a class="ml-3" style="color: #d9534f;">Back to active</a></span>
                </div>
                
                
            </div>
            <div class="col-md-6">
                
            </div>
            <div class="col-md-3 row p-4">
                 <div class="col-md-5 bg-white shadow">
                    <a style="color: #d9534f;  font-weight: bold;"><span class="fa fa-chevron-left mr-3" style="color: lightgray;"></span> Prev </a>
                </div>
                <div class="col-md-1">
                    
                </div>
                <div class="col-md-5 bg-white shadow">
                    <a style="color: #d9534f;  font-weight: bold;"> Next <span class="fa fa-chevron-right ml-3" style="color: lightgray;"></span></a>
                </div>
            </div>
        </div>

        <!-- ############################################################## -->

        <div class="row mt-1">
            <div class="col-md-2">
                
                <table class="table">
                    <thead class="bg-white shadow">
                        <tr>
                            <th scope="col" ><span class="text-muted" style="font-size: 0.8em; font-weight: normal;">25 Candidates</span><br>
                        <span class="text-muted" style="font-size: 0.8em; font-weight: normal;">13 of 25 Candidtes Reviewed</span></th>
                        </tr>
                    </thead>
                    <tbody class="bg-white shadow p-3">
                    <tr>
                        <td>
                        <a style="font-size: 0.8em; font-weight: bold; text-decoration: underline; color: black;" href="#">{{$user->name}}</a><br>
                        <span  style="font-size: 0.7em;">{{$user->city}}</span><br>
                        <input  type="checkbox" name="" class="mt-1">
                        <span style="font-size: 0.6em;" class="text-muted">{{$job->created_at}} | Awaiting Review</span>
                        </td>
                    </tr>
                    </tbody>
                </table>
                
                
            </div>
            
            <div class="col-md-8">
                <div class="card shadow border-light mb-3 ">
                    <div class="p-3">
                        <div class="card-body pt-1 pl-3 pr-3">
                            <span class="save-card-header fontclassspan" style="font-weight: bold;color: black;"><i class="fa fa-briefcase mr-2"></i>Interested? <div class="btn-group ml-2" role="group" aria-label="First group">
                            <button type="button" class="btn btn-outline-secondary"><i class="fa fa-check" style="font-size: 0.8em; color: black;"></i></button>
                           <button type="button" class="btn btn-outline-secondary"><i class="fa fa-question" style="font-size: 0.8em; color: black;"></i></button>
                           <button type="button" class="btn btn-outline-secondary"><i class="fa fa-times" style="font-size: 0.8em; color: black;"></i></button>
    
                        </div></span>



                            <h3 class="card-title" style="font-weight: bold;">{{$user->name}}</h3>

                            <h6 class="card-title 6 page3-span">{{$user->email}}</h6>
                            <h6 class="card-title 6 page3-span"><i class="fa fa-circle mr-3" style="font-size: 0.5em;"></i> {{$user->city}}</h6>
                            <h6 class="card-title 6 page3-span">Applied to {{$job->job_title}} - {{$job->city}}</h6>
                            <section class="row">
                                <section class="col-md-9">
                                    <span style="font-size: 0.8em;" class="mr-3">Status: </span>
                                <select  id="" style="border: none; color: #d9534f; font-size: 0.8em;">
                                <option selected >Awaiting Review</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                </select>
                                </section>
                                 <section class="col-md-3">
                                
                                <button type="button" class="btn btn-outline-secondary"><i class="fa fa-phone" style=" color: #d9534f;"></i></button>
                                <button type="button" class="btn btn-outline-secondary ml-2"><i class="fa fa-calendar" style=" color: #d9534f;"></i></button>
                                 <button type="button" class="btn"><i class="fa fa-circle" style="font-size: 0.5em;"></i><i class="fa fa-circle ml-1" style="font-size: 0.5em;"></i><i class="fa fa-circle ml-1" style="font-size: 0.5em;"></i></button>
                            </section>
                            </section>
                           
                            
                            
                             
                        </div> <!-- card body -->
                        </div>
                        <!-- ################################################ -->
    <section id="tabs">
       <div class="container">
        <!-- <h6 class="section-title h1">Tabs</h6> -->
        <div class="row">
            <div class="col-xs-12 " style="width: 100% !important;">
                <nav>
                    <div class="nav nav-tabs nav-fill text-center" id="nav-tab" role="tablist">
                        
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Application</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Interviews</a>
                       

                        
                    </div>
                </nav>
                <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="container-fluid pl-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <h6 class="card-title 6 " style="font-weight: bold;">Screen questions</h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10">
                                        <h6 class="card-title 6 page3-span" >{{$job->candidate}}?</h6>
                                        <span style="font-size: 0.8em;">Note: {{$job->candidate_note}}</span><span class="ml-1" style="font-size: 0.8em;"> </span>
                                    </div>
                                    <!-- <div class="col-md-2">
                                        <span class="p-2" style="background-color: lightgray;">1 Year</span>
                                    </div> -->
                            </div>
                        </div>
                                 <hr class="mt-4">
                        <div class="container mt-3">
                            <div class="row">
                                <div class="col-md-9 pl-4 pt-2">
                                    <span class="" style="font-size: 0.8em; font-weight: bold;">
                                    CV
                                </span>
                                </div>
                                <div class="col-md-3">
                                    <button class="btn btn-outline-danger">Download CV</button>
                                </div>
                                
                            </div>
                            
                        </div>
                        <div class="container-fluid  mt-3" style="height: 30px; background-color: lightgray;">
                            
                        </div>
                        <div class="mt-5">
                            
                        </div>
                    





                        
                         
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <!-- ############## Interview Schedule Buttton ########################### -->
                       <div class="text-center mt-3">
                           <span style="font-size: 4em;"><i class="fa fa-calendar-times-o"></i></span><br>
                           <div class="mt-3">
                               <span class="" style="font-size: 0.8em; font-weight: bold;">
                                    You haven't scheduled any interviews with
                                </span><span style="font-size: 0.8em; font-weight: bold;">Muhammad Amir</span><br>
                                <span class="" style="font-size: 0.8em;">
                                    Schedule interviews through Indeed to get email confirmation
                                    from candidates, enable reminders, and report no shows.
                                </span>
                           </div>
                           <div class="mt-5 mb-5">
                               <button class="btn btn-danger p-3" style="border-radius: 40px;">Set up Interviews</button>
                           </div>   
                       </div>
                       <!-- ######################################################### -->
                        <div class="mt-3 pl-4 pr-4">
                            <span class="text-muted" style="font-size: 0.8em; font-weight: bold;">
                                   (GMT+05:00) Pakistan Standard Time (Pakistan)
                                </span>
                                <form class="mt-4">
                                    <div class="form-group">
                                        <label style="font-size: 0.8em; font-weight: bold;">Date</label>
                                        <div class="row mb-4">
                                            <div class="col-md-4">
                                                 <input class="form-control form-control-lg" type="date" name="">
                                            </div>
                                            <div class="col-md-4">
                                                 <input class="form-control form-control-lg" type="date" name="">
                                            </div>
                                            <div class="col-md-1 mt-2 text-center">
                                                <label style="font-size: 0.8em; font-weight: bold;">To</label>
                                            </div>
                                            <div class="col-md-3">
                                                <select  id="" style="padding: 12px; border: 1px solid lightgray;">
                                                <option selected >3:30 pm</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                         <label style="font-size: 0.8em; font-weight: bold;">Interview Address</label>
                                        <div class="row mb-4">
                                           
                                            <div class="col-md-4">
                                                <input class="form-control form-control-lg" type="text" name="">
                                            </div>
                                        </div>
                                        <label style="font-size: 0.8em; font-weight: bold;">Interview Details</label>
                                        <div class="row mb-4">
                                           
                                            <div class="col-md-12">
                                                <input class="form-control form-control-lg" type="text" name="" placeholder="Include any additional information for the candidate here" style="font-size: 0.7em; height: 100px;">
                                            </div>
                                        </div>
                                        <div class="row mt-5 mb-4">
                                            <div class="col-md-1">
                                                
                                            </div>
                                            <div class="col-md-3">
                                                 <button class="btn btn-danger p-2" style="border-radius: 20px;">Send Invitation</button>
                                            </div>
                                            <div class="col-md-3">
                                                 <button class="btn btn-outline-danger p-2" style="border-radius: 20px;">Cancel</button>
                                            </div>
                                        </div>


                                       
                                        
                                            
                                    
                                    </div>
                                </form>
                        </div>




                       <!-- ############################################################ -->
                    </div>
                    
                </div>
            
            </div>
        </div>
       </div>
      </section>







                        <!-- ################################################## -->

                    </div> <!-- card end -->

                   






            </div>
           
            <div class="col-md-2">
                <div class="bg-white shadow text-center p-3 mb-4">
                    Advertising Banner
                </div>
                <div class="bg-white shadow text-center p-3 ">
                     Advertising Banner
                </div>
            </div>
        </div>




      </div>  


@endsection
    