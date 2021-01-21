@extends('employee.layout')

@section('title', 'Employee')

 
@section('content')
    <div class="container-fluid p-3 bg-light shadow">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="col-md-10">
                       <!--  <select class="custom-select bg-light" id="inputGroupSelect01" style="border: none;">
                            <option selected>Open and paused job(7)</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select> -->
                    </div>

                </div>
            </div>
        </div>

        <div class="container-fluid mt-3 pt-2">
            <div class="row">
                <div class="col-sm-5 row">
                    <div class="col-sm-6">

                        <div class="form-group bg-white shadow has-search1 p-2">
                          <!--
                            <button class="fa fa-search form-control-feedback"></button> 
                            <input type="text" class="form-control" placeholder="Job title search...">
                         -->   <form>
                        <div class="input-group">
                        <input name="title"  class="form-control" type="text" value="<?=isset($_GET['title'])?$_GET['title']:''?>"   placeholder="Job title search...">

                         <div class="input-group-btn">
                          <button id="b1" type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>

                            </div>
                            </div>
                        </form>
                        </div>

                    </div>
                    <div class="col-sm-6">
                        <div class="form-group bg-white shadow has-search1 p-2">
                            <form>
                        <div class="input-group">
                        <input name="location"  class="form-control" type="text" value="<?=isset($_GET['location'])?$_GET['location']:''?>"   placeholder="Job location search...">

                         <div class="input-group-btn">
                          <button id="b1" type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>

                            </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">

                </div>
                <div class="col-sm-5 row">
                    <div class="col-sm-6">
                         
                    </div>
                    <div class="col-sm-6">
                        <div class="p-2 bg-white shadow has-search1">
                            <form>
                        <div class="input-group">
                            <select name="order" class="custom-select text-muted selectcss" id="inputGroupSelect01"
                                style="border: none;">
                                <option  <?=(!empty($_GET['order']) && $_GET['order']=='DESC')?'selected':''?>  selected value="DESC">Descending</option>
                                
                                <option  <?=(!empty($_GET['order']) && $_GET['order']=='ASC')?'selected':''?>  value="ASC">Ascending</option>
                                 
                            </select>
                            <div class="input-group-btn">
                          <button id="b1" type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>

                            </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
                
            <!-- </div> -->
            </div>
        </div>

        <div class="container-fluid mt-5">
            <table class="table">
                <thead class="shadow bg-light" style="">
                    <tr>
                        <th scope="col"><input type="checkbox" name=""></th>
                        <th scope="col" style="font-size: 0.8em;">Job Title</th>
                        <th colspan="5" scope="col" style="font-size: 0.8em;">Candidates</th>
                        <th scope="col" style="font-size: 0.8em;">Sponsorship Status</th>
                        <th scope="col" style="font-size: 0.8em;">Job Status</th>
                        <th scope="col" style="font-size: 0.8em;">Actions</th>

                    </tr>
                </thead>
                <tbody class="bg-white shadow">
                    @foreach($jobs as $job)
                    <tr>
                        <td><input type="checkbox" name=""></td>
                        <td style="font-size: 0.8em;">{{$job->job_title}}<br><span
                                class="text-muted">{{$job->city}}</span><br><span class="text-muted">Created: {{$job->created_at}}</span> </td>
                          <td style="font-size: 0.8em;"><span>{{ \App\Models\SubmitCv::where('company_id',session()->get('emply')->id)->where('job_register_id',$job->id)->count()}} Active</span><br> <span
                                style=" color: red;"><a  href="{{url('/employee/candidates',$job->id)}}">Candidates</a></span></td>
                        <td style="font-size: 0.8em; text-align: center;"><span>{{ \App\Models\SubmitCv::where('company_id',session()->get('emply')->id)->where('job_register_id',$job->id)->where('status','active')->count()}}  </span><br><span
                                style=" color: red;">Awaiting</span> </td>

                        <td style="font-size: 0.8em; text-align: center;" ><span >{{ \App\Models\SubmitCv::where('company_id',session()->get('emply')->id)->where('job_register_id',$job->id)->where('status','reviewed')->count()}} </span><br> <span
                                style=" color: red;">Reviewed</span></td>
                        <td style="font-size: 0.8em; text-align: center;"><span>{{ \App\Models\SubmitCv::where('company_id',session()->get('emply')->id)->where('job_register_id',$job->id)->where('status','contacting')->count()}} </span><br> <span
                                style=" color: red;">Contacting</span></td>
                        <td style="font-size: 0.8em; text-align: center; "><span>{{ \App\Models\SubmitCv::where('company_id',session()->get('emply')->id)->where('job_register_id',$job->id)->where('status','hired')->count()}} - {{$job->total_hire}} </span><br> <span
                                style=" color: red;">Hired</span></td>
                       


                        <td style="font-size: 0.8em;">Free Post-<br><span style=" color: red;">Sponsor
                                Job</span><br><span class="text-muted">Get more candidates by sponsoring</span><br><a
                                href="#">Learn More</a> </td>



                        <td class="p-4" style="font-size: 0.8em;">
                            <select data-id="{{$job->id}}" class=" custom-select status" id="status" 
                                style="border: 1px solid black; border-radius: 10px; padding-left: 2.375rem;">
                                <option <?=($job->job_status==Null || $job->job_status=='open')?'selected':''?> value="open"  selected>Open</option>
                                <option <?=($job->job_status=='pause')?'selected':''?>  value="pause">Paused</option>
                                <option <?=($job->job_status=='close')?'selected':''?>  value="close">Close</option>
                                
                            </select>
        
        </td>
        <td class="p-4" style="font-size: 0.8em;"><select onchange="location.href='jobs/view/<?=$job->id?>'" class="custom-select" id="inputGroupSelect01"
                style="border: 1px solid black; border-radius: 10px; padding-left: 2.375rem;">
                <option selected>Actions</option>
                <option value="1"> View job detail </option>
                <!-- <option value="2">Edit job</option> -->
               
            </select>
    
    </td>
    </tr>
    @endforeach
     
    </tbody>
    </table>
            {{$jobs->appends($_GET)->render("pagination::bootstrap-4")}}

    </div>

    <div class="container-fluid bg-white  mt-5 pt-2 pb-1 pl-4">
        <h6 style="font-weight: bold; color: red;">Share</h6>
    </div>
    <div class="container-fluid" style="border-top: 1px solid lightgray">
        <div class="row">
            <div class="col-md-9 p-4 bg-white">
                <h6 style="font-size: 0.8em;" class="text-muted">Advertise your jobs in your social networks</h6>

                <div class="row">
                    <div class="col-md-9">
                        <input style="font-size: 0.8em; background-color: white;"
                            class="text-muted form-control form-control-lg" type="text" name=""
                            placeholder="https://www.google.com" readonly>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-block"
                            style="background-color: #2ec9fd; border-radius: 8px; color: white;">Copy Link</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 p-4 bg-light">
                <h6 style="font-size: 0.8em;" class="text-muted mt-4 pl-4">Share your jobs in your social networks</h6>
            </div>
        </div>



    </div>
 
    </div>
@endsection
    @section('script')
 <script>
$(document).ready(function(){
 
$(".status").change(function(){
  
    var id = $(this).data('id');
var selectedVal = $(this).val();
  data = {status:$(this).val(), "_token": "{{ csrf_token() }}",id:id};
console.log(data);
 
$.ajax({
type: "POST",
url: "{{url('employee/job/status')}}",
data: data,
cache: false,
success: function(data){
  location.reload();
 
}

});


});


 


 });
</script>
    @endsection
