    <header>
        <nav class="navbar navbar-expand-md navbar-light font-weight-bolder">
            <div class="container-fluid">
                <a href="{{url('/')}}" class="navbar-brand mr-4 "><img src="{{url('user/asserts/processed.png')}}"></a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="#" class="nav-item nav-link active-page1 mr-4 navlinks">Find jobs</a>
                        <a href="#" class="nav-item nav-link  mr-4 navlinks">Company Reviews</a>
                        <a href="#" class="nav-item nav-link navlinks ">Find Salaries</a>

                    </div>
                         @if(session()->get('user'))
               <div class="navbar-nav ml-auto">
                <div id="google_translate_element"></div>
                <a href="#" class="mr-5 mt-2  navlinks"><img src="{{url('user/asserts/notifacatin dot.png')}}"></a>
                <div class="dropdown">
                <a href="#"   id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  class="mr-4 mt-2 navlinks dropdown-toggle"><img src="{{url('user/asserts/profile 4.png')}}"> </a>
                 <div class="dropdown-menu dropdown-menu-right" style="width: 250px;" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="{{url('profile',session()->get('user')['id'])}}">Profile <i style="float: right;" class="fa fa-user text-muted"> </i></a>
                 <a class="dropdown-item" href="{{url('myjob',session()->get('user')['id'])}}">My Job<i style="float: right;" class="fa fa-briefcase text-muted"> </i></a>
                 <a class="dropdown-item" href="{{url('user/personal',session()->get('user')['id'])}}">Account<i style="float: right;" class="fa fa-list text-muted"> </i></a>
                  <a class="dropdown-item" href="{{url('logout')}}">Logout<i style="float: right;" class="fa fa-sign-out text-muted"> </i></a>
          
                 </div>
             </div>
                <a href="{{url('employee/jobs')}}" class="nav-item nav-link mt-1 navlinks">For Employeers</a>
                <!-- <a href="#" class="nav-item nav-link">French</a> -->
                 </div>
                         @else
                    <div class="navbar-nav ml-auto">
                         
                            
                            <a href="#" data-toggle="modal" data-target="#signup" data-dismiss="modal"
                            class="nav-item nav-link mr-4 mt-1 navlinks">Register</a>
                            
                            <a href="#" class="nav-item nav-link own-btn mr-4 shadow mt-1 navlinks" data-toggle="modal" data-target="#signin">Sign In</a>
                        <!-- <button type="button" class="shadow own-btn mr-3" data-toggle="modal" data-target="#signin">Sign
                            In</button> -->
                        <a href="{{url('employee/jobs')}}" class="nav-item nav-link mr-4 mt-1 navlinks">For Employeers</a>
                        <a href="#" class="nav-item nav-link mt-1 navlinks ">French</a>
                    </div>@endif
                </div>
            </div>
        </nav>

    </header>