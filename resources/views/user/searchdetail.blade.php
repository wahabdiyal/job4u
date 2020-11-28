 
@extends('user.layout')

@section('title', 'Search')

@section('css')
    <link rel="stylesheet" href="{{url('user/css/blockbtclass.css')}}">
    <link rel="stylesheet" href="{{url('user/css/mystyle.css')}}">
  <style>
        #content2 {
            display: none;
        }

        .tabcontent1 {
            display: block;
            display: show;
        }
    </style>
@endsection
@section('content')
 
           
                <div class="job-search-page2">
                        
                </div>  

   <section class="section-page3">             
          <div class="container-fluid">
        <div class="row">

            <div class="col-md-8">
                 

                <div class="col-md-12">
                    <div class="card shadow border-light mb-3">
                        <div class="card-body">
                            <span class="save-card-header fontclassspan"><i class="fa fa-star-o mr-2"></i>save</span>
                            <h4 class="card-title">{{$search->job_title}}</h4>

                            <h6 class="card-title 6 page3-span">{{$search->company->name}}</h6>

                            <span class="card-link mt-6 page3-span"><i class="fa fa-briefcase text-muted"> </i> {{$search->experience}}</span>
                            <br>
                            <span class="card-link mt-6 page3-span"><i class="fa fa-diamond text-muted"> </i> {{$search->salery}}</span>
                            <br>
                            <span class="card-link mt-6 page3-span"><i class="fa fa-map-marker text-muted"> </i> {{$search->city}}</span>

                            <p class="card-text page3-span"><i class="fa fa-file-text-o"></i> <?php echo html_entity_decode(htmlspecialchars_decode ($search->job_description)); ?>
                            </p>
                             
                        </div>
                        <div class="card-footer">

                            @if(session()->get('user'))
                            <span class="save-card-header "><button type="button" data-toggle="modal" data-target="#profile-modal" class="btn btn-danger ml-2 page3-span">APPLY ON JOB FOR U</button></span>
                            @else
                            <span class="save-card-header "><button  data-toggle="modal" data-target="#signin" data-dismiss="modal" class="btn btn-danger ml-2 page3-span">LOGIN TO APPLY</button></span>
                            <span class="save-card-header"><button  data-toggle="modal" data-target="#signup" class="btn btn-outline-danger page3-span">REGISTER TO APPLY</button></span>


                            <span class="  text-muted pt-3 pr-4 page3-span">Today</span>
                            @endif
                            <span class="  text-muted pt-3 pr-4"><a href="#" class="page3-span">Save job</a></span>
                            <span class="  text-muted pt-3 pr-4">More...</span>

                        </div>
                    </div>

                </div>
                 <div class="col-md-12 " style="padding-top: 44px;">
                    <div class="card shadow border-light mb-3">
                     
                        <div class="card-body mb-3">
                            <h4 class="card-title">Job description</h4>
                            <ul>
                               <li><?php echo html_entity_decode(htmlspecialchars_decode ($search->job_description)); ?></li>
                            
                            </ul> 
                            <style>
                                td, th {
                                 
                                 text-align: left;
                                 padding: 8px;
                                }

                            </style>
                             <table class="ml-4">

                                <tr>
                                  <td style="color: gray;">Role User</td>
                                  <td>{{$search->experience}}</td>
                                </tr>
                                <tr>
                                  <td style="color: gray;">Industry Type</td>
                                  <td>{{$search->industry}}</td>
                                 
                                </tr>
                                <tr>
                                  <td style="color: gray;">Functional Area</td>
                                  <td>{{$search->area}}</td>
                                 
                                </tr>
                                <tr>
                                  <td style="color: gray;">Employment Type</td>
                                  <td>{{$search->employment_type}}</td>
                                 
                                </tr>
                                <tr>
                                  <td style="color: gray;">Candidate</td>
                                  <td>{{$search->candidate}}</td>
                                 
                                </tr>
                                    </table>

                            <h6 class="ml-4">Education:</h6>
                             <table class="ml-4">
                                <tr>
                                    <td>UG:</td>
                                    <td>{{$search->education}}</td>
                                </tr>
                                <tr>
                                    <td>PG:</td>
                                    <td>Any Postgraduate in Any Specialization</td>
                                </tr>
                                <tr>
                                    <td>Doctorate:</td>
                                    <td>Doctorate Not Required</td>
                                </tr>
                             </table>
                             <h6 class="ml-4">Skills</h6>
                             <div class="col-md-12" style="margin-top: 34px;">
                                @foreach($search->skill as $skill)
                                <button class="btn btn-outline-secondary round-boader mt-1">{{$skill->body}}</button>

                                @endforeach
                                <!-- <button class="btn btn-outline-secondary round-boader mt-1">UI/UX Development</button>
                                <button class="btn btn-outline-secondary round-boader mt-1">UI/UX Design</button>
                                <button class="btn btn-outline-secondary round-boader mt-1">UI/UX</button>
                                <button class="btn btn-outline-secondary round-boader mt-1">UI/UX Designer</button> -->
                             
                            </div>
                        </div>
                         
                    </div>

                </div>
                    <div class="col-md-12 " style="padding-top: 24px;">
                    <div class="card shadow border-light mb-3">
                     
                        <div class="card-body mb-3">
                            <h4 class="card-title">About Company</h4>
                            <h6>{{$search->company->name}}</h6>
                            <p>{{$search->company->address}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 " style="padding-top: 24px;">
                    <h3>Similar Jobs</h3>
                </div>
                <div class="col-md-12 " style="padding-top: 24px;">
                    <div class="card shadow border-light mb-3">
                     @foreach($companies as $company)
                        <div class="card-body mb-3 " style="border-color:gray;">
                            <h4 class="card-title">About Company</h4>
                            <h6>{{$company->name}}</h6>
                            <p><i class="fa fa-map-marker text-muted"> </i> {{$company->address}}</p>
                            <div class="save-card-header ">
                         <small class="text-muted">Posted {{ $company->jobdate }} Times ago</small>
                            </div>
                        </div>
                        @endforeach
                        <!-- <div class="card-body mb-3 " style="border-color:gray;">
                            <h4 class="card-title">About Company</h4>
                            <h6>HighApp Solution</h6>
                            <p><i class="fa fa-map-marker text-muted"> </i> 1st Floor, Aashiana Shopping Center, Block D 1 Gulberg III, Lahore, Punjab, Pakistan</p>
                            <div class="save-card-header ">
                         <small class="text-muted">Posted 2 days ago</small>
                            </div>
                        </div> -->
                       <!--  <div class="card-body mb-3 " style="border-color:gray;">
                            <h4 class="card-title">About Company</h4>
                            <h6>HighApp Solution</h6>
                            <p><i class="fa fa-map-marker text-muted"> </i> 1st Floor, Aashiana Shopping Center, Block D 1 Gulberg III, Lahore, Punjab, Pakistan</p>
                            <div class="save-card-header ">
                         <small class="text-muted">Posted 2 days ago</small>
                            </div>
                        </div> -->
                       <!--  <div class="card-body mb-3 " style="border-color:gray;">
                            <h4 class="card-title">About Company</h4>
                            <h6>HighApp Solution</h6>
                            <p><i class="fa fa-map-marker text-muted"> </i> 1st Floor, Aashiana Shopping Center, Block D 1 Gulberg III, Lahore, Punjab, Pakistan</p>
                            <div class="save-card-header ">
                         <small class="text-muted">Posted 2 days ago</small>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
             
                <div class="col-md-12">
                    @if(session()->get('user'))
                     <div class="card shadow border-light mb-3">
                        <div class="card-body mt-3">
                            <div class="row">
                            <div class="col-md-3 justify-content-center">
                                <img src="{{url('user/asserts/profile 4.png')}}" class="img-fluid rounded-circle bg-light w-60 mt-3">
                                <!-- <span class="rounded-circle-page4 mt-2"><img class="profile-img-page4" src="asserts/profile 4.png"></span> -->
                            </div>
                            <div class="col-md-9 profile-class-page4">
                                <h4 class="">{{session()->get('user')['name']}}</h4>
                                <p class="card-title text-muted ">{{session()->get('user')['skill']}}</p>
                                <p class="text-muted" style="font-size: 11px;">Profile last updated {{session()->get('user')['updated_at']}}</p>
                            </div>

                            </div>

                            <div class="row profile2-class-page4">
                                <div class="col-md-6">
                                    <span class="card-link mt-6 page3-span"><img src="{{url('user/asserts/mobile.png')}}"> {{session()->get('user')['phone'] }}</span>
                                </div>
                                <div class="col-md-6">
                                    <span class="card-link mt-6 page3-span"><img src="{{url('user/asserts/email.png')}}"> {{session()->get('user')['email']}}</span>
                                </div>
                            </div>
                            <div class="mt-3">
                               <a href="{{url('profile',session()->get('user')['id'])}}"> <button class="btn btn-danger btn-lg btn-block">Update Profile</button></a>
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="card shadow border-light mb-3">
                        <div class="card-header">
                            <h6 class="">Jobs you might be interested in</h6>
                             
                        </div>
                         @foreach($jobs as $job)
                        <div class="card-body">
                            <h6 class="card-title">{{$job->job_title}}</h6>
                            <p class="card-title">{{$job->name}}</p>

                             
                            <p class="card-text"><i class="fa fa-map-marker text-muted"> </i>{{$job->address}}

                            </p>
                            <div class="save-card-header ">
                         <small class="text-muted">Last updated {{ $job->created_at }} Times ago</small>
                            </div>
                        </div>
                        @endforeach
                        
                         
                    </div>

                </div>
            </div>

        </div>
    </div>

</section>

 
@endsection
@section('model')
@if(session()->get('user'))
    <div class="modal fade bd-example-modal-lg" id="profile-modal">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tabcontent1" id="content1">

                        <div class="card shadow border-light mb-3">
                            <div class="card-body">

                                <h4 class="card-title">{{$search->job_title}}</h4>

                                <h6>{{$search->company->name}}</h6>
                                <div class="row">
                                    <div class="col-md-8">
                                        <h6>Signed in as {{session()->get('user')['email']}} </h6>
                                    </div>
                                    <div class="col-md-3 text-left">
                                        <a href="{{url('logout')}}"> Sign Out</a>
                                    </div>
                                </div>
                                 <?php 
                                 if(!isset($userDetail)){
                                    $userDetail=session()->get('user');
                                 }


                                ?>

                                <h6 class="mt-2">Choose a resume to apply with:</h6>
                                <div class="container boader-secondary round-boader mt-5">
                                    <h4 class="card-title text-center">Online Resume Created</h4>
                                    <h6 class="mt-4 pl-4 pr-4">{{$userDetail->name}} </h6>
                                    <h6 class=" pl-4 pr-4">Signed in as {{$userDetail->email}} </h6>
                                    <h6 class=" pl-4 pr-4">{{$userDetail->phone}} </h6>
                                    <h6 class=" pl-4 pr-4">Pakistan</h6>
                                    <h6 class="mt-4 pl-4 pr-4">{{$userDetail->address}}</h6>
                                    <h6 class=" pl-4 pr-4"> {{$userDetail->key_skills}}</h6>
                                    <h6 class=" pl-4 pr-4">
                                     @foreach($userDetail->education as $education)
                                    <div class="mt-3 bg-light pl-4 pt-2">
                                        <h6>{{$education->type}}</h6>
                                        <span>{{$education->name}}</span><br>
                                        <span>{{$education->location}}</span><br>
                                        <span>{{$education->date_from}} to {{$education->date_to}}</span>
                                    </div>
                                     @endforeach</h6>

                                    <div class="container-fluid bg-light mt-5">
                                        <div class="row">
                                            <div class="col-md-6 text-right">
                                                <a href="#"> <img src="{{url('user/asserts/edit sign.png')}}"></a>
                                            </div>
                                            <div class="col-md-6">
                                                <a href="{{url('user/personal',session()->get('user')['id'])}}">
                                                    <h4 class="text-muted">Edit</h4>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="container boader-secondary round-boader mt-5 p-4">
                                     
                                    <input type="file" id="file1"  name="file1" style="display:none" />
                                    <a href="#" class="mb-3" id="CV-read-modal"></a><br>
                                    <button id="upfile1" class="btn btn-light btn-lg"> <img src="{{url('user/asserts/upload3.png')}}"
                                            class="img-fluid"> Upload New Resume</button>

                                    <!-- <div class="row">
                                        <div class="col-md-3  text-right">
                                            <img src="asserts/upload3.png" class="img-fluid">
                                        </div>
                                        <div class="col-md-9">
                                            <h5>Upload New Resume</h5>
                                        </div>
                                    </div> -->

                                </div>



                                <div class="row mt-5">
                                    <div class="col-md-1">
                                        <label class="form-check-label"><input type="checkbox"></label>
                                    </div>
                                    <div class="col-md-10">
                                        <h6>Notify me when similer jobs are available</h6>
                                        <p>By checking this box and clicking continue, you agree to our Terms, and you
                                            agree
                                            to receive similar jobs via email. You can change your consent settings at
                                            any
                                            time by unsubscribing or as detailed in our terms.</p>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-3">
                                        <button type="button" class="btn btn-danger" onclick="next(2)">Continue</button>

                                    </div>
                                    <div class="col-md-3">
                                        <button type="button" class="btn btn-outline-danger">Cancel</button>
                                    </div>
                                </div>



                            </div> <!-- card body -->

                        </div> <!-- card div -->
                    </div>
                    <div class="tabcontent1" id="content2">

                        <div class="card shadow border-light mb-3">
                            <div class="card-body">

                                <h4 class="card-title">UI/UX Designer</h4>

                                <h6 class="card-title">Highapp Solutions Lahore</h6>

                                <form class="mt-5">
                                    <div>
                                        <h6>How many years of Mobile App Designing experience do you have?</h6>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="" class="form-control form-control-lg">
                                    </div>
                                    <div>
                                        <h6>How many years of Screenshot Designs experience do you have?</h6>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="" class="form-control form-control-lg">
                                    </div>
                                    <div>
                                        <h6 class="">What is the highest level of education you have completed?</h6>

                                    </div>
                                    <div class="form-group input-group">

                                        <select class="form-control form-control-lg">
                                            <option>BSCS</option>
                                        </select>
                                    </div>

                                </form>

                                <div class="row mt-5">
                                    <div class="col-md-3">
                                        <button type="button" class="btn btn-danger" data-toggle="modal"
                                            data-target="#submit-modal" data-dismiss="modal">Continue</button>

                                    </div>
                                    <div class="col-md-3">
                                        <button type="button" class="btn btn-outline-danger">Back</button>
                                    </div>
                                </div>



                            </div> <!-- card body -->

                        </div> <!-- card div -->





                    </div>












                </div>
            </div> <!-- modal content div -->

        </div> <!-- modal dialog div -->

    </div> <!-- modal div -->




    <!-- ############# Profile Modal End ##################### -->

    



    <!-- ############# Submit Modal Start ############################ -->
    <div class="modal fade bd-example-modal-lg " id="submit-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="container p-5">
                    <span class="rounded-circle-modal"></span>
                    <div class="contaner p-5 text-center mt-5">
                        <h4>Your Application Has Been Submited</h4>
                    </div>
                    <div class="container mt-4">
                        <button class="btn btn-danger btn-lg btn-block">Continue</button>
                    </div>
                    <div class="mt-3 text-center">
                        <a href="#" style="color: red;"> Cancel</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- ############# Submit Modal End ############################## -->
@endif

    <script>


        var currentTab = 1;

        // $(".tabcontent1").hide();

        function next(currentTab) {
            if (currentTab < 3) {
                console.log("Enter in function");
                $("#content1").hide();
                // currentTab++;
                $("#content" + (currentTab)).show();
            }


        }




    </script>




@endsection
@section('script')
@if(session()->get('user'))
<script>
    $("#upfile1").click(function () {
    $("#file1").trigger('click');
});
</script>
@endif
@endsection