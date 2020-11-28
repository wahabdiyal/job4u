@extends('user.layout')

@section('title', 'Search')

@section('css')
<link rel="stylesheet" href="{{url('user/css/blockbtclass.css')}}">
<link rel="stylesheet" href="{{url('user/css/mystyle.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@section('content')



<div class="job-search-page2">

</div>


<!-- #######################Section###################### -->
<div class="col-xs-12">

    <section class="search-sec">
        <div class="container">
            <form action="{{url('search')}}" method="get">
                <div class="row">
                    <div class="col-md-12 col-xs-12">


                        <div class="input-group">
                            <input type="text" value="<?=isset($_GET['job']) ?$_GET['job']:'' ?>" name="job"
                                class="form-control search-slt" placeholder="Keywords or Company">
                            <input type="text" value="<?=isset($_GET['location']) ?$_GET['location']:'' ?>"
                                name="location" class="form-control search-slt" placeholder="Enter Your Location">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-danger">Find Job</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>

<!-- Button Drop Down Menue -->

<div class="container">
    <div class="row">

        <span class="font-weight-bold mr-5 pt-2 refinespan">Refine</span>
        <div class="col-md-2">


            <div class="btn-group buttondropdown" role="group">
                <button id="btnGroupDrop1" type="button"
                    class="<?=(isset($_GET['jt'])) ?'active':'' ?> btn btn-light dropdown-toggle" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <?=(isset($_GET['jt'])) ?$_GET['jt']:'Job Type' ?> </button>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <a class="dropdown-item"
                        href="{{url('search')}}?job={{$_GET['job']}}&location={{$_GET['location']}}&jt=part-time">Part-Time</a>
                    <a class="dropdown-item"
                        href="{{url('search')}}?job={{$_GET['job']}}&location={{$_GET['location']}}&jt=full-time">Full-Time</a>
                    <a class="dropdown-item"
                        href="{{url('search')}}?job={{$_GET['job']}}&location={{$_GET['location']}}&jt=contract">Contract</a>
                    <a class="dropdown-item"
                        href="{{url('search')}}?job={{$_GET['job']}}&location={{$_GET['location']}}&jt=permanent">Permanent</a>
                </div>

            </div>
        </div> <!-- colom div -->

        <div class="col-md-2">
            <div class="btn-group buttondropdown" role="group">
                <button id="btnGroupDrop1" type="button"
                    class="<?=(isset($_GET['education'])) ?'active':'' ?> btn btn-light dropdown-toggle"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?=(isset($_GET['education'])) ?$_GET['education']:'Education' ?> </button>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <a class="dropdown-item"
                        href="{{url('search')}}?job={{$_GET['job']}}&location={{$_GET['location']}}&education=matric">Matric</a>
                    <a class="dropdown-item"
                        href="{{url('search')}}?job={{$_GET['job']}}&location={{$_GET['location']}}&education=intermediate">Intermediate</a>
                    <a class="dropdown-item"
                        href="{{url('search')}}?job={{$_GET['job']}}&location={{$_GET['location']}}&education=bs">BS\BA</a>

                </div>

            </div>

        </div>
        <div class="col-md-2">
            <style>
            #myInputw3 {
                box-sizing: border-box;
                background-image: url('searchicon.png');
                background-position: 14px 12px;
                background-repeat: no-repeat;
                font-size: 16px;
                padding: 14px 20px 12px 45px;
                border: none;
                border-bottom: 1px solid #ddd;
            }

            #myInputw3:focus {
                outline: 3px solid #ddd;
            }



            .dropdown-contentw3 {
                display: none;
                margin-top: 56px;
                position: absolute;
                background-color: #f6f6f6;
                min-width: 230px;
                overflow: auto;
                border: 1px solid #ddd;
                z-index: 1;
            }

            .dropdown-contentw3 a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }

            .dropdownw3 a:hover {
                background-color: #ddd;
            }

            .showw3 {
                display: block;
            }
            </style>

            <div class="btn-group buttondropdown" role="group">
                <button type="button"
                    class="<?=(isset($_GET['company'])) ?'active':'' ?> dropbtnw3 btn btn-light dropdown-toggle"
                    onclick="myFunction()">
                    <?=(isset($_GET['company'])) ?\App\Models\Company::find($_GET['company'])->name:'Company' ?>
                </button>

                <div id="myDropdownw3" class="dropdown-contentw3" style=" width: 110px;height: 110px;overflow: auto;">
                    <input type="text" placeholder="Search.." id="myInputw3" onkeyup="filterFunction()">
                    @foreach($companies as $company)
                    <a class="dropdown-item"
                        href="{{url('search')}}?job={{$_GET['job']}}&location={{$_GET['location']}}&company={{$company->id}}">{{$company->name}}</a>
                    @endforeach

                </div>
            </div>
        </div> <!-- colom div -->
        <script>
      
        function myFunction() {
            document.getElementById("myDropdownw3").classList.toggle("showw3");
        }

        function filterFunction() {
            var input, filter, ul, li, a, i;
            input = document.getElementById("myInputw3");
            filter = input.value.toUpperCase();
            div = document.getElementById("myDropdownw3");
            a = div.getElementsByTagName("a");
            for (i = 0; i < a.length; i++) {
                txtValue = a[i].textContent || a[i].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    a[i].style.display = "";
                } else {
                    a[i].style.display = "none";
                }
            }
        }
        </script>



    </div> <!-- row close -->
</div> <!-- container close -->

 

<div class="container mt-5">
    <div class="row">

        <!-- button drop down end -->

        <!-- start Cards -->

        <div class="col-md-8">
            <div class="col-md-12 mt-4 mb-2">
                <a href="#" class="text-danger">
                    Upload your CV
                </a>and easily apply to jobs from any device!
            </div>
            <div class="col-md-12">
                <span class="text-muted">{{ $searchs->firstItem() }} -
                    {{ $searchs->lastItem() }} of {{$searchs->total()}}
                    @if(isset($_GET['job']))<?=empty(!$_GET['job']) ?$_GET['job']:'' ?> Jobs In
                    <?=empty(!$_GET['location']) ?$_GET['location']:'All around' ?>@endif</span>
            </div>
            @foreach($searchs as $search)
            <div class="col-md-12 mt-3">
                <div class="card shadow border-light mb-3">
                    <div class="card-header">
                        <span class="bacic-header-color fontclassspan">New</span>
                        <span class="save-card-header fontclassspan"><i class="fa fa-star-o mr-2"></i>save</span>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">{{$search->job_title}}</h4>
                        <h6 class="card-title"><?php (isset($search->company['name'])) ?$search->company['name']:''; ?>
                        </h6>
                        <span class="card-link fontclassspan"><img src="{{url('user/asserts/bag.png')}}">
                            {{$search->experience}} Yrs</span>
                        <span class="card-link fontclassspan"><img src="{{url('user/asserts/bag.png')}}">
                            {{$search->salery}}</span>
                        <span class="card-link fontclassspan"><img src="{{url('user/asserts/MAP 3')}}.png">
                            {{$search->city}}</span>
                        <p class="card-text mt-2 fontclassspan"><img src="{{url('user/asserts/Job Description')}}.png">
                            <?php echo html_entity_decode(htmlspecialchars_decode ($search->job_description)); ?>.
                        </p>
                        <span class="card-link fontclassspan">Photoshop</span>
                        <span class="card-link fontclassspan">Illustrator</span>
                        <span class="card-link fontclassspan">Graphic designer</span>
                        <span class="card-link fontclassspan">Adobe XD</span>
                    </div>
                    <div class="card-footer">

                        <span class=""><a href="{{url('searchdetail',$search->id)}}"><button
                                    class="btn btn-danger ">Apply</button></a></span>

                        <span class="save-card-header text-muted pt-3 pr-4 fontclassspan">More...</span>
                        @if(session()->get('user'))
                        <span class="save-card-header text-muted pt-3 pr-4 fontclassspan"><a href="{{url('addSaveJob',session()->get('user')['id'])}}/{{$search->id}}">Save
                                job</a></span>@endif
                        <span class="save-card-header text-muted pt-3 pr-4 fontclassspan">Today</span>

                    </div>
                </div>

            </div>

            @endforeach

            {{$searchs->appends($_GET)->render("pagination::bootstrap-4")}}

        </div>


 
        <div class="col-md-4">
            <div class="col-md-12">
                <div class="col-md-12 mt-4 mb-2">
                    See 16 jobs in feature companies
                </div>
            </div>
            <div class="col-md-12 mt-5">
                <div class="row">
                    <div class="col-md-6">
                        <button type="button" class="btn"><img src="{{url('user/asserts/buttonlogo1.png')}}"
                                class="img-fluid"></button>
                    </div>
                    <div class="col-md-6">
                        <button type="button" class="btn"><img src="{{url('user/asserts/buttonlogo1.png')}}"
                                class="img-fluid"></button>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <button type="button" class="btn"><img src="{{url('user/asserts/buttonlogo.png')}}"
                                class="img-fluid"></button>
                    </div>
                    <div class="col-md-6">
                        <button type="button" class="btn"><img src="{{url('user/asserts/buttonlogo.png')}}"
                                class="img-fluid"></button>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <button type="button" class="btn"><img src="{{url('user/asserts/buttonlogo2.png')}}"
                                class="img-fluid"></button>
                    </div>
                    <div class="col-md-6">
                        <button type="button" class="btn"><img src="{{url('user/asserts/buttonlogo2.png')}}"
                                class="img-fluid"></button>
                    </div>
                </div>
            </div>


            <!--  <div class="col-md-12 mt-5">
                    <button type="button" class="btn"><img src="{{url('user/asserts/buttonlogo.png')}}"></button>
                    <button type="button" class="btn btn-secondary">Secondary</button>
                    <button type="button" class="btn btn-success">Success</button>
                    <button type="button" class="btn btn-info">Info</button>
                    <button type="button" class="btn btn-warning">Warning</button>
                    <button type="button" class="btn btn-danger">Danger</button>
                </div> -->
            <div class="col-md-12">
                <div class="col-md-12 mt-4 mb-2">
                    <h5 style="font-size: 16px;">Get relevant jobs in your inbox</h5>
                </div>
                <div class="col-md-12 mt-4 mb-2 " style="text-align: center;">
                    <button class="btn btn-outline-danger">Create a job Alert</button>
                </div>
            </div>
        </div>

    </div>
</div>


@endsection
@section('script')

@endsection