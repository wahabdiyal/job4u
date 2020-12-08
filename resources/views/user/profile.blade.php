
@extends('user.layout')

@section('title', 'Profile')

@section('style')
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

@endsection
@section('content')
<div >
 
 <div class="container mt-4" style="background-color: #2ec9fd;">
        <div class="col-md-12 " style="color: white;">
            <div class="row">
                <div class="col-md-1 mt-3">
                    
                    <!-- <span class="profile-rounded"> -->
                        <img  onclick="jQuery('#ele1').show().print().hide()" src="{{url('user/asserts/Group 135@2x.png')}}" alt="..." class="profile-rounded">
                    <!-- </span> -->
                </div>
                <div class="col-md-3 mt-3">
                    <div class="row">
                        <h6>{{$user['name']}}</h6>
                    </div>
                    <div class="row mt-2">
                        <span class="font-weight-bold page-six-smalltext">Age: </span>
                        <span class="page-six-smalltext">&nbsp; <?php if(isset($user['age'])) echo$user['age'];else echo'<a href="#" class="edit">🖍</a>'; ?>,</span>
                        <span class="font-weight-bold page-six-smalltext" style="margin-left: 12px;">Gender: </span>
                        <span class="page-six-smalltext">&nbsp; <?php if(isset($user['gender'])) echo$user['gender'];else echo'<a href="#" class="edit">🖍</a>'; ?></span>
                    </div>
                    <div class="row mt-2">
                        <span class="font-weight-bold page-six-smalltext">Experience: </span>
                        <span class="page-six-smalltext">&nbsp;<?php if(isset($user['experience'])) echo$user['experience'];else echo'<a href="#" class="edit">🖍</a>'; ?> </span>
                    </div>
                    <div class="row mt-2">
                        <span class="font-weight-bold page-six-smalltext">Industry: </span>
                        <span class="page-six-smalltext">&nbsp; <?php if(isset($user['skill'])) echo$user['skill'];else echo'<a href="#" class="edit">🖍</a>'; ?></span>
                    </div>
                    <div class="row mt-2">
                        <span class="font-weight-bold page-six-smalltext">Mobile: </span>
                        <span class="page-six-smalltext">&nbsp; <?php if(isset($user['phone'])) echo$user['phone'];else echo'<a href="#" class="edit">🖍</a>'; ?> </span>
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


                <div class="col-md-3 mt-3">
                    <div class="row mt-5">
                        <span class="font-weight-bold page-six-smalltext">Email: </span>
                        <span class="page-six-smalltext">&nbsp; <?php if(isset($user['email'])) echo$user['email'];else echo'<a href="#" class="edit">🖍</a>'; ?> </span>
                    </div>
                    
                    <div class="row mt-2">
                        <span class="font-weight-bold page-six-smalltext">Current City: </span>
                        <span class="page-six-smalltext">&nbsp;<?php if(isset($user['city'])) echo$user['city'];else echo'<a href="#" class="edit">🖍</a>'; ?> , <?php if(isset($user['country'])) echo$user['country'];else echo'<a href="#" class="edit">🖍</a>'; ?></span>
                    </div>
                    <div class="row mt-2">
                        <span class="font-weight-bold page-six-smalltext">Address: </span>
                        <span class="page-six-smalltext">&nbsp;  <?php if(isset($user['address'])) echo$user['address'];else echo'<a href="#" class="edit">🖍</a>'; ?> </span>
                    </div>
                    <div class="row mt-2">
                        <span class="font-weight-bold page-six-smalltext">Candidate Type: </span>
                        <span class="page-six-smalltext">&nbsp;  <?php if(isset($user['candidate_note'])) echo$user['candidate_note'];else echo'<a href="#" class="edit">🖍</a>'; ?> </span>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-4 mt-4 shadaow mb-3 p-2 border-round">

                    <div class="container pr-5 pl-3 ">
                        <h6>
                            Upload Resume
                        </h6>
                        <p class="page-six-smalltext">Resume is the most important document
                            recruiters look for. Recruiters generally
                            do not look at profiles without resumes.</p>
                    </div>
                    <div class="container pr-5 pl-5 pt-2 text-center">
                        <button  data-toggle="modal" data-target="#filecv" class="btn btn-light">Upload Resume</button>
                    </div>
                    <div class="container pr-5 pl-5 mt-3">
                        <span style="font-size: 10px;">Supported Formats: doc, docx, rtf, pdf, upto 2 MB
                        </span>
                    </div>

                </div>
            </div>
        </div>
    </div>
 
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 shadow ">
                <h5 class="mt-3 font-weight-bold">Quick Links</h5>
                <hr class="mt-3">

                <div class="row">
                    <div class="col-md-6">
                        <span>CV Headline</span>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href=""   data-toggle="modal" data-target="#heading">Add</a>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <span>Key Skills</span>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="#">Add</a>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <span>Employment</span>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="#">Add</a>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <span>It Skills</span>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="#">Update</a>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <span>Education</span>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="#">Update</a>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <span>Summary</span>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="#">Add</a>
                    </div>
                </div>


            </div>


            <!-- ########################################## -->
            <div class="col-md-1">

            </div>
            <div class="col-md-8">
                
                @if(isset($user->heading->body))
                <div class="container p-3 shadow">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Resume Headline</h5>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href=""  data-toggle="modal" data-target="#heading">Add Resume Headline</a>
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
                                <a href="" data-toggle="modal" data-target="#exampleModal">Add Skills</a>
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
                                <a href="#">Add Employment</a>
                            </div>
                        </div>
                        @foreach($user->experiences as $experience)
                        <div class="mt-3 bg-light pl-4 pt-2">
                            <span class="font-weight-bold">{{$experience->job_title}} &nbsp; <a href="#"><i class="fa fa-pencil"></i> </a></span><br>
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
                                <a href=""   data-toggle="modal" data-target="#itskill">Add Details</a>
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
                                <a href=""   data-toggle="modal" data-target="#eductionModal" >Add Education</a>
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
                                <a href=""   data-toggle="modal" data-target="#summary">Add Summary</a>
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

<div id="ele1" style="display: none;">
 
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



@endsection
@section('script')

  <!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
 
 <script>
     $('.edit').click(function(){
   window.location.href="{{url('user/personal',$user['id'])}}";
    });
 	$('#selectedit').selectpicker();

 </script>

   <script src="https://doersguild.github.io/jQuery.print/jQuery.print.js"></script>
     <script type='text/javascript'>
        
        jQuery(function($) { 'use strict';
            $("#ele2").find('.print-link').on('click', function() {
                alert('hllel');
                    $('#ele2').show();
                //Print ele2 with default options
                $.print("#ele2");
            });
            $("#ele4").find('button').on('click', function() {
                alert('hllel');
                
                $("#ele4").print({
                    //Use Global styles
                    globalStyles : false,
                    //Add link with attrbute media=print
                    mediaPrint : false,
                    //Custom stylesheet
                    stylesheet : "http://fonts.googleapis.com/css?family=Inconsolata",
                    //Print in a hidden iframe
                    iframe : false,
                    //Don't print this
                    noPrintSelector : ".avoid-this",
                    //Add this at top
                    prepend : "Hello!!!<br/>",
                    //Add this on bottom
                    append : "<span><br/>Buh Bye!</span>",
                    //Log to console when printing is done via a deffered callback
                    deferred: $.Deferred().done(function() { console.log('Printing done', arguments); })
                });
            });
            // Fork https://github.com/sathvikp/jQuery.print for the full list of options
        });
        //]]>
        </script>
@endsection