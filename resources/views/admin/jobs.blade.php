
@extends('adminlte::page')

@section('title', 'Job Detail')
 
@section('content_header')
<h1>Company detail page</h1>
@stop
 
@section('content')

 <div class="card">
    <div class="card-header d-print-none">
      <ul class="nav nav-tabs align-items-end card-header-tabs w-100">
        <li class="nav-item">
          <a class="nav-link active" href="{{url('admin/jobs')}}"><i class="fa fa-list mr-2"></i>Job List</a>
        </li>
         
        <div class="ml-auto d-inline-flex">
           
        </div>
      </ul>
    </div>
    <div class="card-body">
      
       <table class="data-table table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Job Title</th>
                            <th>Job Skill</th>
                            <th>Experience</th>
                            <th>Salary</th>
                            <th>City</th>

                            <th>Industry</th>
                              <th>Payment Status</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($jobs as $job)

                            <tr><td>{{$loop->iteration}}</td> 
                             <td>{{$job->job_title}}</td>
                            <td>{{$job->job_skill}} </td>
                            <td> {{$job->experience}}</td>
                            <td> {{$job->salary}}</td>
                            <td> {{$job->city}}</td>
                            <td> {{$job->industry}}</td>

                            
                            <td> {{$job->payment_status}}</td>
                            <td><div class="form-group">
                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                      <input type="checkbox" class="custom-control-input" disabled <?=($job->job_status=='Active')?"checked":""?> id="checked{{$job->id}}">
                      <label class="custom-control-label" for="checked{{$job->id}}"> </label>
                    </div>
                  </div></td>
                            <td>
                               <div class="btn-group">
                       <a href="{{url('admin/jobdetail',$job->id)}}"> <button type="button" class="btn btn-default"><i class="fa fa-eye"></i></button></a>
                        
                        <a href=""> 
                        <button onclick="return confirm('Are you sure?')" type="button" class="btn btn-default"><i
                                                class="fa fa-trash"></i></button></a>
                      </div>
                            </td></tr>
                            @endforeach
                             
                    </tbody>
                </table>

 
    </div>
  </div>

@stop

@section('css')
 
@stop

@section('js')
<script>
console.log('Hi!');

$(document).ready(function() {
    $('.table').dataTable();
});
</script>

@stop