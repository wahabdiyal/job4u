            @extends('user.layout')

@section('title', 'Edit User')

@section('style')
 <style>
    .tabcontent1 { display: none;}
    .tabcontent1 .active{display: block; display: show ;}
</style>
 
@endsection
 
@section('content')
  <div class="job-search-page5">
        


    </div>

            <div class="maindiv-page5">



    <nav class="multiTabs">
        <div class="nav nav-tabs nav-fill navfor-header" id="nav-tab" role="tablist">
          <!-- <a class="nav-item nav-link show active" id="nav-home-tab" data-toggle="tab" href="#content1" data-trigger='content1'>Personal</a> -->
          <a href="{{url('user/personal',$user->id)}}"  class="nav-item nav-link show active items-nv" id="nav-home-tab1"  >Personal</a>
           <a href="{{url('user/experience',$user->id)}}" class="nav-item nav-link " id="nav-home-tab2" >Experience</a>
          <a href="{{url('user/education',$user->id)}}" class="nav-item nav-link " id="nav-home-tab3" >Education</a>
          <a href="{{url('user/skill',$user->id)}}"  class="nav-item nav-link " id="nav-home-tab4" >Skills</a>
          <!-- <a class="nav-item nav-link " href="javascript:void(0)" data-trigger='content5'>Tab5</a> -->
        </div>
      </nav>








      <div class="tab-content pt-5" id="nav-tabContent">
            <div class="tabcontent1 active bg-light" id="content1">
                <div class="container shadow bg-white pb-5">
                                    <form class="pl-5 pr-5 pb-5" method="post" action="{{url('user/personal',$user->id)}}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <h6>First Name</h6>
                                            <input type="text" name="fname" id="fname" value="{{$user->name}}" class="form-control form-control-lg">
                                        </div>
                                          
                                        <div class="form-group">
                                            <h6>Last Name</h6>
                                            <input type="text" name="lname" id="lname" class="form-control form-control-lg" value="{{$user->lname}}">
                                        </div>
                                         <div class="form-group">
                                            <h6>Address</h6>
                                            <textarea  name="address"  class="form-control form-control-lg"  >{{$user->address}}</textarea>
                                        </div>

                                        @if(!$user->gender)
                                        <div class="form-group">
                                            <h6>Gender:</h6>
                                        <div class="form-check">
                                             <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="male" checked>
                                             <label class="form-check-label" for="exampleRadios1">
                                             Male
                                             </label>
                                            </div>
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="female">
                                            <label class="form-check-label" for="exampleRadios2">
                                             Female
                                            </label>
                                            </div>
                                        </div>
                                        @endif


                                        <div class="form-group">
                                            <h6>Age</h6>
                                            <input type="number" required  name="age" id="age" class="form-control form-control-lg" value="{{$user->age}}" placeholder="Age" >
                                        </div>

                                        <div id="hidden">
                                            
                                        </div>
                                       
                                        <div class="form-group">
                                            <h6>Email</h6>
                                            <input type="email" name="email" id="email" class="form-control form-control-lg" value="{{$user->email}}" placeholder="xyz@gmail.com" disabled>
                                        </div>
                                        <div>
                                            <h6>Phone</h6>
                                        </div>
                                        <div class="form-group input-group">

                                            <div class="btn-group input-group-prepend">

                                                <button type="button"
                                                    class="btn btn-light dropdown-toggle dropdown-toggle-split"
                                                    data-toggle="dropdown">
                                                    <span class=""></span> +27
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item " href="#">+92</a>
                                                    <a class="dropdown-item" href="#">+42</a>
                                                </div>
                                            </div>





                                            <input type="text" name="phone" id="phone" class="form-control form-control-lg" placeholder="1234567" value="{{$user->phone}}">
                                        </div>
                                        <div class="form-group">
                                            <h6>Current City</h6>
                                            <input type="text" name="city" id="city" class="form-control form-control-lg" value="{{$user->city}}"
                                                placeholder="Tell us about your current city">
                                        </div>
                                         <div class="form-group">
                                            <h6>Current Country</h6>
                                            <input type="text" name="country" id="country" class="form-control form-control-lg" value="{{$user->country}}"
                                                placeholder="Tell us about your current country">
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <input id="outsideofafrica"  name="outsideofafrica" type="checkbox" >
                                                </div>
                                                <div class="col-md-10">
                                                    <span>Outside South Africa</span>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="mt-5">
                                            <h5>Upload Resume</h5>
                                        </div>

                                        <div class="row mt-4 mb-5">
                                            <div class="col-md-4">
                                                <button type="button" id="upload" class="btn btn-success btn-lg btn-block">Upload
                                                    Resume</button>
                                            </div>
                                            <div class="col-md-4 text-center">
                                                <span class="text-weight-bolder">-or-</span>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="#">Copy-Paste your resume here</a>
                                            </div>
                                        </div>

                                        <div class="form-group mt-4">
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <label class="form-check-label"><input type="checkbox"></label>
                                                </div>
                                                <div class="col-md-10">
                                                    <span> I agreed to the Terms and Conditions and Privacy Policy
                                                        governing the use of website.com.I
                                                        hereby consent to receive calls and/or texts and/or WhatsApp
                                                        messages from website
                                                        and employers who use Job for u, including using automated call
                                                        technology or
                                                        recorded calls, at the telephone number provided above,
                                                        including if this number
                                                        is a wireless (cell phone) number.</span>
                                                </div>
                                            </div>


                                        </div>

                                         

                                        <div class="container">
                                            <div class="container p-5">
                                              <div class="row">
                                                <div class="col-md-4">
                                                  
                                                </div>
                                                <div class="col-md-4">
                                                  <button type="submit" id="btn-Next"  class="btn btn-danger btn-lg btn-block" >Next</button>
                                                </div>
                                              </div>
                                                
                                            </div>
                                            
                                        </div>
                                            </form>
                                </div>
            </div>
            <!-- ###########################Personal End###########################3 -->
            
          
        </div>
            



            



            


            </div>
@endsection

@section('script')

@endsection