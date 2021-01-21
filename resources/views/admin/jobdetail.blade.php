@extends('adminlte::page')

@section('title', 'Job Detail')

@section('css')
    <link rel="stylesheet" href="{{url('user/css/mystyle.css')}}">
@stop
@section('content_header')
<h1>Job detail </h1>
@stop
 
@section('content')
            <div class="col-md-12 " style="padding-top: 44px;">
                    <div class="card shadow border-light mb-3">
                     
                        <div class="card-body mb-3">
                            <div style="float: right;"> <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                      <input type="checkbox" class="custom-control-input" <?=($search->job_status=='Active')?"checked":""?>  id="changeStatus">
                      <label class="custom-control-label" for="changeStatus"> </label>
                    </div></div>
                            <h4 class=" ">Job description</h4>
                            <ul>
                               <li><?php echo html_entity_decode(htmlspecialchars_decode ($search->job_description)); ?></li>
                            
                            </ul> 
                            <style>
                                td, th {
                                 
                                 text-align: left;
                                 padding: 8px;
                                }

                            </style>
                             <table class="ml-4">

                                <tr>
                                  <td style="color: gray;"> User Experience</td>
                                  <td>{{$search->experience}}</td>
                                </tr>
                                <tr>
                                  <td style="color: gray;">Industry Type</td>
                                  <td>{{$search->industry}}</td>
                                 
                                </tr>
                                 
                                <tr>
                                  <td style="color: gray;">Functional Area</td>
                                  <td>{{$search->area}}</td>
                                 
                                </tr>
                                <tr>
                                  <td style="color: gray;">Employment Type</td>
                                  <td>{{$search->employment_type}}</td>
                                 
                                </tr>
                                <tr>
                                  <td style="color: gray;">Candidate</td>
                                  <td>{{$search->candidate}}</td>
                                 
                                </tr>
                                    </table>

                            <h6 class="ml-4">Education:</h6>
                             <table class="ml-4">
                                <tr>
                                    <td>UG:</td>
                                    <td>{{$search->education}}</td>
                                </tr>
                                <tr>
                                    <td>PG:</td>
                                    <td>Any Postgraduate in Any Specialization</td>
                                </tr>
                                <tr>
                                    <td>Team Contract:</td>
                                    <td>@if($search->team_contact)
                                        @if($search->team_contact=='CDD')
                                        Fixed Term-{{$search->team_contact}}
                                        @else
                                        No fixed Term contract-{{$search->team_contact}}
                                        @endif
                                        @endif
                                    </td>
                                </tr>
                             </table>
                             <h6 class="ml-4">Skills</h6>
                             <div class="col-md-12" style="margin-top: 34px;">
                                @foreach($search->skill as $skill)
                                <button class="btn btn-outline-secondary round-boader mt-1">{{$skill->body}}</button>

                                @endforeach
                                    
                             
                            </div>
                        </div>
                         
                    </div>

                </div>
@stop

@section('css')
<link rel="stylesheet" href=" ">
@stop

@section('js')
<script>
$('#changeStatus').click(function() {
   if($('#changeStatus').is(':checked')) { 
    var id = {{$search->id}};
    data = {status:'Active', "_token": "{{ csrf_token() }}",id:id};
     console.log(data);
 
$.ajax({
type: "POST",
url: "{{url('admin/job/status')}}",
data: data,
cache: false,
success: function(data){
  location.reload();
     
 
 
}

});

} 
 if(!$('#changeStatus').is(':checked')) { 
    var id = {{$search->id}};
    data = {status:'Reject', "_token": "{{ csrf_token() }}",id:id};
     console.log(data);
 
$.ajax({
type: "POST",
url: "{{url('admin/job/status')}}",
data: data,
cache: false,
success: function(data){
  location.reload();
     
 
 
}

});

}

});
 
</script>

@stop