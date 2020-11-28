@extends('user.layout')

@section('title', 'Home')

 
@section('content')
 
          <form action="{{url('search')}}" method="get">
          	 
       <div class="job-search">
        <div class="container pt-3">
            <div class="row">
             <div class="col-md-8 col-mw-12 input-group pt-5 p-3 inputhover">
                    <input class="form-control form-control-lg pl-3 pt-2" style="font-size: 13px;" type="text" name="job" placeholder="Jobtitle, Keywords or Company">
                    <input class="form-control form-control-lg pl-3 pt-2" style="font-size: 13px;" type="text" name="location" placeholder="Enter your location">
                    <div class="input-group-append inputhover">
                        <button type="submit" class="btn btn-danger form-control">Find Job</button>
                    </div>
                    
                </div>

                <div class="col-md-3 col-mw-6 bg-light mt-5 p-2 ml-3 up-res-con-search">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="#"><img src="{{url('user/asserts/upload.png')}}"></a>
                        </div>
                        <div class="col-md-8 searchdiv-resume">
                            <h6>New to JobForU?</h6>
                            <a href="#" data-toggle="modal" data-target="#usercvupload" data-dismiss="modal" class="btn-default p-2 pr-4 pl-4" style="font-size: 9px;">UPLOAD YOUR
                                RESUME</a>
                        </div>
                    </div>
                </div>

               


            </div>


        </div>
    </div>
                   </form>
                     
                           
                      
    

      <!-- Banner -->
      
     
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-8">
                <div class="col-md-12 shadow p-3">
                    <a href="#">
                        <img src="{{url('user/image/lgbanner.jpg')}}" class="img-fluid">
                    </a>

                </div>
                <div class="col-md-12 mt-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-10 shadow p-2">
                                    <div class="row">
                                        <div class="col-md-3 pt-3 pb-3 ">
                                            <img src="{{url('user/asserts/Group 22.png')}}" class="img-fluid">
                                        </div>
                                        <div class="col-md-9 pt-3 classforh5">
                                            <h5>Information Technology</h5>
                                            <a href="{{url('search')}}?job=computer&location=">{{$it}} Jobs</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">

                                </div>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-1">

                                </div>
                                <div class="col-md-9 shadow p-2">
                                    <div class="row">
                                        <div class="col-md-3 pt-3 pb-3">
                                            <img src="{{url('user/asserts/Group 24.png')}}" class="img-fluid">
                                        </div>
                                        <div class="col-md-9 pt-3 classforh5">
                                            <h5>Engineering</h5>
                                            <a href="#">{{$eng}} Jobs</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1">

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-2">

                                </div>
                                <div class="col-md-10 shadow p-2">
                                    <div class="row">
                                        <div class="col-md-3 pt-3 pb-3">
                                            <img src="{{url('user/asserts/Group 27.png')}}" class="img-fluid">
                                        </div>
                                        <div class="col-md-9 pt-3 classforh5">
                                            <h5>Banking & Finance</h5>
                                            <a href="#">{{$business}} Jobs</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        




                    </div>
                </div>
                <div class="col-sm-12 mt-5 ">
                    <div class="row">
                        <div class="col-md-4 ">
                            <div class="row">
                                <div class="col-md-10 shadow p-2">
                                    <div class="row">
                                        <div class="col-md-3 pt-3 pb-3">
                                            <img src="{{url('user/asserts/Group 42.png')}}" class="img-fluid">
                                        </div>
                                        <div class="col-md-9 pt-3 classforh5">
                                            <h5>SCM & Operations/BPO</h5>
                                            <a href="#">{{$bpo}} Jobs</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-1">

                                </div>
                                <div class="col-md-9 shadow p-2">
                                    <div class="row">
                                        <div class="col-md-3 pt-3 pb-3">
                                            <img src="{{url('user/asserts/sales.png')}}" class="img-fluid">
                                        </div>
                                        <div class="col-md-9 pt-3 classforh5">
                                            <h5>Sales & Marketing Jobs</h5>
                                            <a href="#">{{$sales_marketing}} Jobs</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1">

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="row">
                                <div class="col-md-2 ">

                                </div>
                                <div class="col-md-10 shadow p-2">
                                    <div class="row">
                                        <div class="col-md-3 pt-3 pb-3">
                                            <img src="{{url('user/asserts/Group 41.png')}}" class="img-fluid">
                                        </div>
                                        <div class="col-md-9 pt-3 classforh5">
                                            <h5>All Jobs</h5>
                                            <a href="{{url('search')}}?job=&location=">{{$total}} Jobs</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>



                <div class="col-md-12  p-3 mt-5 mb-5 shadow-sm bg-light rounded ">
                    <h6 id="h6id">Find jobs on the go</h6>
                    <div class="row">
                        <div class="col-md-6  p-3 mt-5 mb-5 ">
                            <div class="col-md-10 container-Go">
                                <span class="rounded-circle"></span>
                                <!-- <img class="rounded-circle" alt="100x100" src="https://placehold.it/100x100" data-holder-rendered="true"> -->

                                <h6>FIND JOBS ON THE GO</h6>
                                <p>The app name app is your new best friend. Killer jobs in your pocket.</p>

                            </div>
                        </div>
                        <div class="col-md-2">

                        </div>
                        <div class="col-md-4 pt-5 mb-5">
                            <img id="imgid" src="{{url('user/asserts/Group 106.png')}}" class="img-fluid">
                        </div>
                    </div>
                </div>
                @if(session()->get('user'))
                <div class="col-md-12  mb-5 ">
                    
                    <div class="row">
                        <div class="col-md-2">

                        </div>
                        <div class="col-md-6 mt-4">
                            <h4>Tell employee find your CV</h4>
                        </div>
                        
                        <div class="col-md-4 p-0">
                            
                            <button data-toggle="modal" data-target="#usercvupload" data-dismiss="modal" class="btn btn-danger btn-lg btn-block btn-pri">Upload your CV</button>
                        </div>
                    </div>
                    

                </div>
                @endif
            </div>
            <!-- 2nd main colom -->
            <div class="col-md-4">
                <div class="col-md-12 p-3 mb-3 shadow bg-white">
                    <a href="#">
                        <img src="{{url('user/image/smbanner.jpg')}}" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-12 shadow p-3 mt-5 bg-light nf-cnr">
                    <h5>Let Employeers to Find your Resume</h5>
                    <p>
                        Get notified about new jobs matching your
                        criteria.
                    </p>
                    <button class="btn btn-danger btn-large">Register For Free</button>
                </div>
                <div class="col-md-12  p-3 mb-3 shadow bg-light notifie-container">
                    <h5>Get notified about new jobs matching your
                        criteria.</h5>
                    <a href="#" class="stretched-link">Create a Job Alert Criteria</a>

                </div>
                <div class="col-md-12 p-3 mb-5 containerforbuttons">


                </div>

            </div>

        </div>

    </div>



@endsection
@section('script')
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyAziBA_sp3WvcF7xgf0qkNYmHlfu-NLqHk"></script>


<script>
	var searchInput = 'loaction';
	$(document).ready(function () {
    var autocomplete;
    autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
        types: ['geocode'],
    });
});
    </script>

@endsection
 