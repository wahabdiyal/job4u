
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
                                <select id="status" name="status" id="" style="border: none; color: #d9534f; font-size: 0.8em;">
                                <option <?=($job->cvstatus=='active')?'selected':''?> value="active" >Awaiting Review</option>
                                <option <?=($job->cvstatus=='reviewed')?'selected':''?> value="reviewed">Reviewed</option>
                                <option <?=($job->cvstatus=='contacting')?'selected':''?> value="contacting">Contacting</option>
                                <option <?=($job->cvstatus=='reject')?'selected':''?> value="reject">Reject</option>
                                <option <?=($job->cvstatus=='hired')?'selected':''?> value="hired">Hired</option>
                                
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

                        <div class="container-fluid  mt-3"  >
                             
                        <div class="mt-5">
             <div class="container mt-5 mb-5">
        <div class="">
             
     <div class="container mt-4" style="background-color: #2ec9fd;margin-bottom: 12px;padding-bottom: 31px;">
        <div class="col-md-12 " style="color: white;">
            <div class="row">
                <div class="col-md-1 mt-3">
                      @if(isset($user['image'])) 
                       <img  src="{{url('user/asserts',$user['image'])}}" alt="..." class="profile-rounded">

                    @else
                    <img  src="{{url('user/asserts/Group 135@2x.png')}}" alt="..." class="profile-rounded">
                     @endif
                </div>
                <div class="col-md-5 mt-3 ml-4">
                    <div class="row">
                        <h6>{{$user['name']}}</h6>
                    </div>
                    <div class="row mt-2">
                        <span class="font-weight-bold page-six-smalltext">Age: </span>
                        <span class="page-six-smalltext">&nbsp; <?php if(isset($user['age'])) echo$user['age'];else echo'<a href="#" class="edit">Null</a>'; ?>,</span>
                        <span class="font-weight-bold page-six-smalltext" style="margin-left: 12px;">Gender: </span>
                        <span class="page-six-smalltext">&nbsp; <?php if(isset($user['gender'])) echo$user['gender'];else echo'<a href="#" class="edit">Null</a>'; ?></span>
                    </div>
                    <div class="row mt-2">
                        <span class="font-weight-bold page-six-smalltext">Experience: </span>
                        <span class="page-six-smalltext">&nbsp;<?php if(isset($user['experience'])) echo$user['experience'];else echo'<a href="#" class="edit">Null</a>'; ?> </span>
                    </div>
                    <div class="row mt-2">
                        <span class="font-weight-bold page-six-smalltext">Industry: </span>
                        <span class="page-six-smalltext">&nbsp; <?php if(isset($user['skill'])) echo$user['skill'];else echo'<a href="#" class="edit">Null</a>'; ?></span>
                    </div>
                    <div class="row mt-2">
                        <span class="font-weight-bold page-six-smalltext">Mobile: </span>
                        <span class="page-six-smalltext">&nbsp; <?php if(isset($user['phone'])) echo$user['phone'];else echo'<a href="#" class="edit">Null</a>'; ?> </span>
                    </div>
                    <!-- <div class="row mt-2">
                        <span class="font-weight-bold page-six-smalltext">Current Salary: </span>
                        <span class="page-six-smalltext">&nbsp; 15,000 PKR</span>
                    </div>
                    <div class="row mt-2">
                        <span class="font-weight-bold page-six-smalltext">Expected Salary: </span>
                        <span class="page-six-smalltext">&nbsp; 20,000 PKR</span>
                    </div> -->

                </div>


                <div class="col-md-5 mt-3">
                    <div class="row mt-5">
                        <span class="font-weight-bold page-six-smalltext">Email: </span>
                        <span class="page-six-smalltext">&nbsp; <?php if(isset($user['email'])) echo$user['email'];else echo'<a href="#" class="edit">Null</a>'; ?> </span>
                    </div>
                    
                    <div class="row mt-2">
                        <span class="font-weight-bold page-six-smalltext">Current City: </span>
                        <span class="page-six-smalltext">&nbsp;<?php if(isset($user['city'])) echo$user['city'];else echo'<a href="#" class="edit">Null</a>'; ?> , <?php if(isset($user['country'])) echo$user['country'];else echo'<a href="#" class="edit">Null</a>'; ?></span>
                    </div>
                    <div class="row mt-2">
                        <span class="font-weight-bold page-six-smalltext">Address: </span>
                        <span class="page-six-smalltext">&nbsp;  <?php if(isset($user['address'])) echo$user['address'];else echo'<a href="#" class="edit">Null</a>'; ?> </span>
                    </div>
                    <div class="row mt-2">
                        <span class="font-weight-bold page-six-smalltext">Candidate Type: </span>
                        <span class="page-six-smalltext">&nbsp;  <?php if(isset($user['candidate_note'])) echo$user['candidate_note'];else echo'<a href="#" class="edit">Null</a>'; ?> </span>
                    </div>
                </div>
                <div class="col-md-1"></div>
                
            </div>
        </div>
    </div>
            <!-- ########################################## -->
          
            <div class="col-md-8">
                
                @if(isset($user->heading->body))
                <div class="container p-3 shadow">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Resume Headline</h5>
                            </div>
                            <div class="col-md-6 text-right">
                            </div>
                        </div>
                        <div class="mt-3">
                            <h6>{{$user->heading->body}}</h6>
                        </div>
                    </div>
                </div>
                @endif
                 
                @if(!$user->skills->isEmpty())
                <div class="container p-3 shadow mt-5">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Key Skills</h5>
                            </div>

                            <div class="col-md-6 text-right">
                            </div>

                        </div>
                        <div class="mt-3">
                            <div class="row">
                                <div class="col-md-6">
                                    
                                    <div class="border border-outline-secondary p-2">
                                        <div class="row">
                                        @foreach($user->skills as $skill)
                                             <span class="ml-2 mt-2 badge badge-success" style="background-color: lightgray;">{{$skill->body}}</span>

                                              @endforeach  
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @if(!$user->experiences->isEmpty())
                <div class="container p-3 shadow mt-5">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="font-weight-bold">Employment</h5>
                            </div>
                            <div class="col-md-6 text-right">
                               
                            </div>
                        </div>
                        @foreach($user->experiences as $experience)
                        <div class="mt-3 bg-light pl-4 pt-2">
                            <span class="font-weight-bold">{{$experience->job_title}} &nbsp; </span><br>
                            <span class="badge badge-success">{{$experience->current_company}}</span>
                            <span>{{$experience->company}}</span><br>
                            <span>{{$experience->date_from}}</span><br><span>{{$experience->date_to}}</span><br>
                            <p>{{$experience->city}}</p>
                                <span class="font-weight-bold">Top Key Skills: &nbsp;</span>
                                <span>{{$experience->skill}}</span>
                        </div>
                         @endforeach
                    </div>
                </div>
                @endif
                @if(isset($user->skill_detail->body))
                <div class="container p-3 shadow mt-5">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>IT Skills</h5>
                            </div>
                            <div class="col-md-6 text-right">
                            </div>
                        </div>
                        <div class="mt-3">
                            <p class="text-muted">{{$user->skill_detail->body}}</p>
                        </div>
                    </div>
                </div>
                @endif
                @if(!$user->education->isEmpty())
                <div class="container p-3 shadow mt-5">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Education</h5>
                            </div>
                            <div class="col-md-6 text-right">
                            </div>
                        </div>
                         @foreach($user->education as $education)
                        <div class="mt-3 bg-light pl-4 pt-2">
                            <h6>{{$education->type}}</h6>
                            <span>{{$education->name}}</span><br>
                            <span>{{$education->location}}</span><br>
                            <span>{{$education->date_from}} to {{$education->date_to}}</span>
                        </div>
                         @endforeach
                        
                    </div>
                </div>
                @endif
                @if(isset($user->summary->body))
                <div class="container p-3 shadow mt-5">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Summary</h5>
                            </div>
                            <div class="col-md-6 text-right">
                            </div>
                        </div>
                        <div class="mt-3">
                            <p class="text-muted">{{$user->summary->body}} </p>
                        </div>
                    </div>
                </div>
                @endif  
            </div>
        </div>
    </div>
                        </div>
                     </div>





                        
                         
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <!-- ############## Interview Schedule Buttton ########################### -->
                       <div class="text-center mt-3">
                           <span style="font-size: 4em;"><i class="fa fa-calendar-times-o"></i></span><br>

                           @if(!$schedule)
                           <div class="mt-3">
                               <span class="" style="font-size: 0.8em; font-weight: bold;">
                                    You haven't scheduled any interviews with
                                </span><span style="font-size: 0.8em; font-weight: bold;">{{$user->name}}</span><br>
                                <span class="" style="font-size: 0.8em;">
                                    Schedule interviews through Indeed to get email confirmation
                                    from candidates, enable reminders, and report no shows.
                                </span>
                           </div>
                           @else
                           <table class="table table-dark">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Start</th>
                                  <th scope="col">End</th>
                                  <th scope="col">Time</th>
                                  <th scope="col">Description</th>
                                   
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($schedule as $schedules)
                                <tr>
                                  <th scope="row">{{$loop->iteration}}</th>
                                  <td>{{$schedules->start_date}}</td>
                                  <td>{{$schedules->end_date}}</td>
                                  <td>{{$schedules->time}}</td>
                                  <td>{{$schedules->detail}}</td>
                                </tr>
                                 @endforeach
                              </tbody>
                            </table>
                           @endif

                           <div class="mt-5 mb-5">
                               <button data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" class="btn btn-danger p-3" style="border-radius: 40px;">Set up Interviews</button>
                           </div>   
                       </div>
                       <!-- ######################################################### -->
                        <div class="mt-3 pl-4 pr-4 collapse"  id="collapseExample">
                            <span class="text-muted" style="font-size: 0.8em; font-weight: bold;">
                                   (GMT+05:00) Pakistan Standard Time (Pakistan)
                                </span>
                                <form class="mt-4" action="{{url('/employee/schedule')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{$user->id}}">
                                    <input type="hidden" name="job_register_id" value="{{$job->id}}">
                                    <input type="hidden" name="company_id" value="{{session()->get('emply')->id}}">

                                    <div class="form-group">
                                        <label style="font-size: 0.8em; font-weight: bold;">Date</label>
                                        <div class="row mb-4">
                                            <div class="col-md-4">
                                                 <input class="form-control form-control-lg" type="date" name="start_date">
                                            </div>
                                            <div class="col-md-4">
                                                 <input class="form-control form-control-lg" type="date" name="end_date">
                                            </div>
                                            <div class="col-md-1 mt-2 text-center">
                                                <label style="font-size: 0.8em; font-weight: bold;">To</label>
                                            </div>
                                            <div class="col-md-3">
                                                
                                                <input type="time" name="time" style="padding: 12px; border: 1px solid lightgray;">
                                            </div>
                                        </div>
                                         <label style="font-size: 0.8em; font-weight: bold;">Interview Address</label>
                                        <div class="row mb-4">
                                           
                                            <div class="col-md-4">
                                                <input class="form-control form-control-lg" type="text" name="interview_address">
                                            </div>
                                        </div>
                                        <label style="font-size: 0.8em; font-weight: bold;">Interview Details</label>
                                        <div class="row mb-4">
                                           
                                            <div class="col-md-12">
                                                <input class="form-control form-control-lg" type="text" name="detail" placeholder="Include any additional information for the candidate here" style="font-size: 0.7em; height: 100px;">
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
    
    @section('script')
    <script>
$(document).ready(function(){
var selectedVal = $("#status option:selected").val();
$("#status").val(selectedVal);
console.log(selectedVal);
$("#status").change(function(){
    var id = {{$job->cvid}}
var selectedVal = $("#status option:selected").val();
  data = {status:$("#status").val(), "_token": "{{ csrf_token() }}",id:id};
console.log(data);
$.ajax({
type: "POST",
url: "{{url('employee/candidates/status')}}",
data: data,
cache: false,
success: function(data){
 

console.log(data);
 
}

});


}); });
</script>
    @endsection