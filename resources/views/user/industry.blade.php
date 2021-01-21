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
                        @foreach($industries as $industry)
                       
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-10 shadow p-2">
                                    <div class="row">
                                        <div class="col-md-3 pt-3 pb-3 ">
                                            <img src="{{$industry->image}}" class="img-fluid">
                                        </div>
                                        <div class="col-md-9 pt-3 classforh5">
                                            <h5>{{ucfirst($industry->name)}}</h5>
                                            <a href="{{url('search')}}?job={{$industry->name}}&location="> {{\App\Models\JobRegister::where('industry',$industry->name)->count()}} Jobs</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">

                                </div>
                            </div>
                        </div>
                          
                        @endforeach
                    </div>
                </div>
                 



                <div class="col-md-12 p-3 mt-5 mb-5  ">
                       
                </div>
                 
            </div>
            <!-- 2nd main colom -->
            

        </div>

    </div>
@endsection