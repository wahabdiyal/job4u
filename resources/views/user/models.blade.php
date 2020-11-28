


      @if(session()->get('user') )
         
      <div class="modal fade" id="usercvupload" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">File</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="{{url('file/update',session()->get('user')['id'])}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="modal-body">
           
     
           <div class="form-group">
            <label for="selectedit" class="col-form-label">CV:</label>
            <input type="file" id="selectedit" name="resume" accept=".pdf,.doc"/>
           </div>
           
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
      </form>
    </div>
  </div>
      </div>
      @endif
    @if(session()->get('user') && isset($user))

 


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Skill</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="{{url('skill/update',session()->get('user')['id'])}}" method="post">
{{csrf_field()}}
      <div class="modal-body">
           
     
           <div class="form-group">
            <label for="selectedit" class="col-form-label">Skill:</label>

                 <select class="selectpicker" data-live-search="true" id="selectedit" name="abc[]" multiple>
                        @foreach($user->skills as $skill)
                      <option value="{{$skill->body}}" selected>{{$skill->body}}</option>
                      
                      @endforeach
                      <option value="nodejs">Node js</option>
                      <option value="ruby">Ruby</option>
                      <option value="python">Python</option>
                       
               </select>
           </div>
           
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="heading" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Heading</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="{{url('heading/update',session()->get('user')['id'])}}" method="post">
{{csrf_field()}}
      <div class="modal-body">
           
     
           <div class="form-group">
             <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Add Heading</span>
  </div>
  <input type="text" name="heading" maxlength="50" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
</div>
           </div>
           
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update Heading</button>
      </div>
      </form>
    </div>
  </div>
</div>




<div class="modal fade" id="itskill" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">IT Skill</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="{{url('skilldetail/update',session()->get('user')['id'])}}" method="post">
{{csrf_field()}}
      <div class="modal-body">
           
     
           <div class="form-group">
  <label for="itskill">Add Skill:</label>
  <textarea name='itskill' class="form-control" rows="5" id="itskill"></textarea>
</div>
           
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
      </form>
    </div>
  </div>
</div>




<div class="modal fade" id="summary" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Summary</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="{{url('summary/update',session()->get('user')['id'])}}" method="post">
{{csrf_field()}}
      <div class="modal-body">
           
     
           <div class="form-group">
  <label for="summary">Add Summary:</label>
  <textarea name='summary' class="form-control" rows="5" id="summary"></textarea>
</div>
           
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
      </form>
    </div>
  </div>
</div>



<div class="modal fade" id="eductionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Education</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  @foreach($user->education as $education)
                        <div class="mt-3 bg-light pl-4 pt-2">
                            <h6>{{$education->type}}</h6><span class="float-right mr-2 "><div class="btn-group">
  <button type="button" class="btn btn-info"><i class="fas fa-pencil"></i></button>
  
  <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
</div></span>
                            <span>{{$education->name}}</span><br>
                            <span>{{$education->location}}</span><br>
                            <span>{{$education->date_from}} to {{$education->date_to}}</span>
                        </div>
                         @endforeach
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="filecv" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">CV</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="{{url('file/update',session()->get('user')['id'])}}" enctype="multipart/form-data" method="post">
{{csrf_field()}}
      <div class="modal-body">
           
     
           <div class="form-group">
             <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Add File</span>
  </div>
  <input type="file" name="resume" accept=".pdf,.doc" class="form-control"  aria-label="Default" aria-describedby="inputGroup-sizing-default">
</div>
           </div>
           
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update File</button>
      </div>
      </form>
    </div>
  </div>
</div>
    @endif
    @if(!session()->get('user'))

        <!-- ############### Modal Sign in ################# -->
    <div class="modal fade bd-example-modal-lg" id="signin">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="container text-center mt-4 p-3">
                    <h3 class="text-weight-bolder">Login to your Jobs for u account</h3>
                </div>
                <div class="container">
                    <form class="p-3" action="{{url('login')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <h6>Email/Login id:</h6>
                            <input type="text" name="email" class="form-control form-control-lg">
                        </div>
                        <div class="form-group">
                            <h6>Password:</h6>
                            <input type="Password" name="password" class="form-control form-control-lg">
                        </div>

                        <a href="#">
                            <h6>Forgot Password?</h6>
                        </a>


                        <div class="row mt-4">
                            <div class="col-md-5 ">

                                <h6>New to Job For U?</h6>


                            </div>
                            <div class="col-md-4 text-left">
                                <a href="#" data-toggle="modal" data-target="#signup" data-dismiss="modal"
                                    style="color: red; font-weight: bolder;">Register for Free</a>
                            </div>
                            <div class="col-md-3 text-right">
                                <button class="btn btn-danger">Sign In</button>
                            </div>

                        </div>
                    </form>
                    
                        <div class="container pt-4 p-3">
                            <button class="btn btn-outline-secondary btn-lg btn-block round-boader">Sign in with
                                Gmail</button>
                        </div>

                    

                </div>

            </div>

        </div>
    </div>
 <!-- ############### Sign In Modal End ################## -->


    <!-- ################# Sign Up Modal Start############### -->

    <div class="modal fade bd-example-modal-lg" id="signup">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="container text-center mt-4 p-3">
                    <h3 class="text-weight-bolder">Create an Account (it's Free!)</h3>
                </div>
                <div class="container">
                    <form class="p-3" method="post" action="{{url('register')}}">
                        {{csrf_field()}}
                        <div class="form-group">
                            <h6>Email/Login id:</h6>
                            <input type="text" name="email" class="form-control form-control-lg">
                        </div>
                        <div class="form-group">
                            <h6>Password:</h6>
                            <input type="Password" name="password" class="form-control form-control-lg">
                        </div>
                        <div class="container mt-5">
                            <button type="submit" class="btn btn-danger btn-lg btn-block">Create Account</button>
                        </div>
                        <div class="container mt-4">
                            <div class="row">
                                <div class="col-md-3">

                                </div>
                                <div class="col-md-6 text-right">
                                    <p>Already a Member?</p>
                                </div>
                                <div class="col-md-3">
                                    <a href="#" data-toggle="modal" data-target="#signin" data-dismiss="modal">SIGN
                                        IN</a>
                                </div>
                            </div>

                        </div>





                        <div class="container pt-4 ">
                            <button class="btn btn-outline-secondary btn-lg btn-block round-boader">Sign in with
                                Gmail</button>
                        </div>

                    </form>

                </div>

            </div>

        </div>
    </div>
 
    <!-- ############# Sign Up Modal End ##################### -->
   @endif