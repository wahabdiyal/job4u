   
@extends('user.layout')

@section('title', 'Edit User')

@section('style')
 <style>
   
</style>
 
@endsection
 
@section('content')


   <div class="job-search-page5">
        


    </div>
<div class="maindiv-page5">



    <nav class="multiTabs">
        <div class="nav nav-tabs nav-fill navfor-header" id="nav-tab" role="tablist">
          <!-- <a class="nav-item nav-link show active" id="nav-home-tab" data-toggle="tab" href="#content1" data-trigger='content1'>Personal</a> -->
          <a href="{{url('user/personal',$user->id)}}"  class="nav-item nav-link   items-nv" id="nav-home-tab1"  >Personal</a>
           <a href="{{url('user/experience',$user->id)}}" class="nav-item nav-link show active" id="nav-home-tab2" >Experience</a>
          <a href="{{url('user/education',$user->id)}}" class="nav-item nav-link " id="nav-home-tab3" >Education</a>
          <a href="{{url('user/skill',$user->id)}}"  class="nav-item nav-link " id="nav-home-tab4" >Skills</a>
          <!-- <a class="nav-item nav-link " href="javascript:void(0)" data-trigger='content5'>Tab5</a> -->
        </div>
      </nav>








      <div class="tab-content pt-5" id="nav-tabContent">
            
            <!-- ###########################Personal End###########################3 -->
             <div class="tabcontent1 bg-light" id="content2">
                <div class="card shadow border-light mb-3">
                                    <div class="card-body p-5">
                                         
                                    <div id="pa-dev">
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
                            <span class="font-weight-bold">{{$experience->job_title}} &nbsp; <a style="float: right; margin-right: 10px;" href="{{url('user/experience/del')}}/<?=$experience->id?>" onclick="return confirm('Are you sure?')">X</a></span><br>
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
                                        <!-- <div class="exp">
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
 
                                       </div> -->

                                       
                                       
                                    </div>

                                        <form id="resetform" action="{{url('user/experience',$user->id)}}" method="post">
                                            <div class="form-group p-5">

                                                {{csrf_field()}}


                                                <div>
                                                    <h5>Job Title</h5>
                                                </div>
                                                <div class="form-group input-group">

                                                    <input required type="text" name="title" id="title" class="form-control form-control-lg" placeholder="Job Title">
                                                     

                                                    
                                                </div>
                                                <div class="form-group">
                                                    <h5>Company</h5>
                                                    <input required type="text" name="company" id="company" class="form-control form-control-lg" placeholder="Company">
                                                </div>
                                                <div class="form-group">
                                                    <h5>Current City</h5>
                                                    <input required type="text" name="city" id="city" class="form-control form-control-lg"
                                                        placeholder="Tell us about your current city">
                                                </div>
                                                <div class="form-group input-group">

                                                    <textarea required name="detail" id="detail" placeholder="Add your Skills only example:PHP,CSS....." class="form-control form-control-lg"></textarea>
                                                     

                                                    
                                                </div>
                                                 
                                                <div>
                                                    <h5>Time Period</h5>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <label class="form-check-label"><input
                                                                    type="checkbox" name='current'></label>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <span>I currently go here</span>
                                                        </div>
                                                    </div>


                                                </div>



                                                <div>
                                                <div>
                                                    <h5>From</h5>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-1">
                                                        
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input required name="from" id="from" type="date" class="form-control form-control-lg">
                                                         
                                                    </div>
                                                    <div class="col-md-4">
                                                       
                                                    </div>
                                                </div>

                                                <div>
                                                    <h5>To</h5>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-1">
                                                        
                                                    </div>
                                                     <div class="col-md-6">
                                                        <input required name="to" id="to" type="date" class="form-control form-control-lg">
                                                         
                                                    </div>
                                                    <div class="col-md-4">
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                                <div class="pt-5 ">
                                                    <button type="submit"   class="btn btn-lg page5-savebtn text-center">Save</button>
                                                </div>

                                            </div>


                                        </form>
                                         <div class="container">
                                            <div class="container p-5">
                                              <div class="row">
                                                <div class="col-md-4">
                                                  
                                                </div>
                                                <div class="col-md-4">
                                                  <button type="button" id="btn-Next"  class="btn btn-danger btn-lg btn-block" onclick='next()'>Next</button>
                                                </div>
                                              </div>
                                                
                                            </div>
                                            
                                        </div>

                                    </div>

                                </div>
            </div>
            <!-- ########################### Experience End ############################ -->
           

          
        </div>
     

</div>

@endsection
@section('script')

<script>
    function next() {
      location.href ="{{url('user/education')}}/<?=$user->id?>";
        
    }
</script>
@endsection