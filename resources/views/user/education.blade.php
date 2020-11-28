   
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
          <a href="{{url('user/personal',$user->id)}}"  class="nav-item nav-link  items-nv" id="nav-home-tab1"  >Personal</a>
           <a href="{{url('user/experience',$user->id)}}" class="nav-item nav-link " id="nav-home-tab2" >Experience</a>
          <a href="{{url('user/education',$user->id)}}" class="nav-item nav-link show active" id="nav-home-tab3" >Education</a>
          <a href="{{url('user/skill',$user->id)}}"  class="nav-item nav-link " id="nav-home-tab4" >Skills</a>
          <!-- <a class="nav-item nav-link " href="javascript:void(0)" data-trigger='content5'>Tab5</a> -->
        </div>
      </nav>








      <div class="tab-content pt-5" id="nav-tabContent">
            
            <div class="tabcontent1 active bg-light" id="content3">
                <div class="card shadow border-light mb-3">
                                    <div class="card-body p-5">
                                        
                                     @if(!$user->education->isEmpty())
              
                    <div class="col-md-12" style="margin-bottom:20px;">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Education</h5>
                            </div>
                             
                        </div>
                         @foreach($user->education as $education)
                        <div class="mt-3 bg-light pl-4 pt-2">
                            <a style="float: right; margin-right: 10px;" href="{{url('user/education/del')}}/<?=$education->id?>" onclick="return confirm('Are you sure?')">X</a>
                            <h6>{{$education->type}}</h6>
                            <span>{{$education->name}}</span><br>
                            <span>{{$education->location}}</span><br>
                            <span>{{$education->date_from}} to {{$education->date_to}}</span>
                        </div>
                         @endforeach
                        
                    </div>
             
                @endif

                                         <form action="{{url('user/education',$user->id)}}" method="post">
                                            <div class="form-group">
                                                {{csrf_field()}}



                                                <div>
                                                    <h5>Level of Education</h5>
                                                </div>
                                                <div class="form-group input-group">

                                                    <select required name="type" class="form-control form-control-lg">
                                                    <option>Level of Education</option>
                                                    <option>High School</option>
                                                    <option>College</option>
                                                    <option>University</option>
                                                    </select>

                                                    
                                                </div>
                                                <div class="form-group">
                                                    <h5>School</h5>
                                                    <input required name="name" type="text" class="form-control form-control-lg" placeholder="">
                                                </div>
                                                
                                                <div class="form-group">
                                                    <h5>Current City</h5>
                                                    <input type="text" required name="location" class="form-control form-control-lg"
                                                        placeholder="Tell us about your current location">
                                                </div>
                                                 
                                                <div>
                                                    <h5>Time Period</h5>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <label class="form-check-label"><input
                                                                    type="checkbox" name='current' ></label>
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
                                                        <input required name="date_from" id="from" type="date" class="form-control form-control-lg">
                                                         
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
                                                        <input required name="date_to" id="to" type="date" class="form-control form-control-lg">
                                                         
                                                    </div>
                                                    <div class="col-md-4">
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                                <div class="pt-5 ">
                                                    <button class="btn btn-lg page5-savebtn text-center">Save</button>
                                                </div>

                                            </div>














                                        <!-- </form> -->


                                                <div class="container">
                                            <div class="container p-5">
                                              <div class="row">
                                                <div class="col-md-4">
                                                  
                                                </div>
                                                <div class="col-md-4">
                                                  <button type="button" id="btn-Next"  class="btn btn-danger btn-lg btn-block" onclick="next()">Next</button>
                                                </div>
                                              </div>
                                                
                                            </div>
                                            
                                        </div>

                                        </form>
                                    

                                        

                                        

                                    </div>

                                </div>
                            </div>
            
            <!-- ###################### Education End ################################# -->
           

          
        </div>
     

</div>

@endsection
@section('script')

<script>
    function next() {
      location.href ="{{url('user/skill')}}/<?=$user->id?>";
        
    }
</script>
@endsection