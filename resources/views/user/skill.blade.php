   
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
          <a href="{{url('user/experience',$user->id)}}"  class="nav-item nav-link " id="nav-home-tab2" >Experience</a>
          <a href="{{url('user/education',$user->id)}}"  class="nav-item nav-link " id="nav-home-tab3" >Education</a>
          <a href="{{url('user/skill',$user->id)}}"  class="nav-item nav-link show active" id="nav-home-tab4" >Skills</a>
          <!-- <a class="nav-item nav-link " href="javascript:void(0)" data-trigger='content5'>Tab5</a> -->
        </div>
      </nav>








      <div class="tab-content pt-5" id="nav-tabContent">
            
            <div class="tabcontent1 active bg-light" id="content4">
                <div class="container">
                                <div class="card shadow border-light mb-3">
                                    <div class="card-body p-5">
                                        <h3 class="card-title">Recommendation: include 3-5 of your top skills to help
                                        you stand out.</h3>
                                                <div>
                                                    <h5 class="mt-5">Add a new skill</h5>
                                                    <p class="text-muted">e.g. Microsoft Office</p>
                                                </div>
                                               <form action="{{url('user/skill',$user->id)}}" method="post">
                                                <div class="form-group input-group">
                                                    {{csrf_field()}}

                                                    <input required type="text" name="body" class="form-control form-control-lg">
                                                 
                                                </div>
                                                
                                                <div class="container p-5">
                                                 <div class="row">
                                                <div class="col-md-4">
                                                  
                                                </div>
                                                <div class="col-md-4">
                                                  <button type="submit" id="btn-Next"  class="btn btn-danger btn-lg btn-block">Submit</button>
                                                </div>
                                              </div>
                                                
                                            </div>
                                            
                                         

                                            </form>
                                                <div class="mt-5 mb-3">
                                                    <hr>
                                                </div>

                            @if(!$user->skills->isEmpty())
                            @foreach($user->skills as $skill)
                                <span class="save-card-header">  <a onclick="return confirm('Are you sure?')" href="{{url('user/skill/del',$skill->id)}}"
                                                class="page5-anchertag"> <i class="fa fa-trash-o"></i></a> </span>
                                        <h6 class="card-title page5-span ">{{$skill->body}}</h6>
                                        <div class="mb-2" >
                                                    <hr>
                                        </div>
                                                     
                                                     
                
                                                           @endforeach  
                                                    
                                                          @endif

                                        
                                       
                                    

                                        

                                        

                                    </div>
                                     
                                       
                                </div>
                            </div>
            </div>
            <!-- #########################Skills End################################# -->

          
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