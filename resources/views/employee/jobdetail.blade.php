@extends('employee.layout')

@section('title', 'Job Detail')

 


@section('content')
 
           
                <div style="margin-top: 10px;
    height: 100px;">
                        
                </div>  

   <section class="section-page3">             
          <div class="container-fluid">
        <div class="row">

            <div class="col-md-8">
                 

                <div class="col-md-12">
                    <div class="card shadow border-light mb-3">
                        <div class="card-body">
                            <span class="save-card-header fontclassspan"><i class="fa fa-star-o mr-2"></i>save</span>
                            <h4 class="card-title">{{$search->job_title}}</h4>

                            <h6 class="card-title 6 page3-span">{{$search->company->name}}</h6>

                            <span class="card-link mt-6 page3-span"><i class="fa fa-briefcase text-muted"> </i> {{$search->experience}}</span>
                            <br>
                            <span class="card-link mt-6 page3-span"><i class="fa fa-diamond text-muted"> </i> {{$search->salery}}</span>
                            <br>
                            <span class="card-link mt-6 page3-span"><i class="fa fa-map-marker text-muted"> </i> {{$search->city}}</span>

                            <p class="card-text page3-span"><i class="fa fa-file-text-o"></i> <?php echo html_entity_decode(htmlspecialchars_decode ($search->job_description)); ?>
                            </p>
                             
                        </div>
                        
                    </div>

                </div>
                 <div class="col-md-12 " >
                    <div class="card shadow border-light mb-3">
                     
                        <div class="card-body mb-3">
                            <h4 class="card-title">Job description</h4>
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
                                <!-- <button class="btn btn-outline-secondary round-boader mt-1">UI/UX Development</button>
                                <button class="btn btn-outline-secondary round-boader mt-1">UI/UX Design</button>
                                <button class="btn btn-outline-secondary round-boader mt-1">UI/UX</button>
                                <button class="btn btn-outline-secondary round-boader mt-1">UI/UX Designer</button> -->
                             
                            </div>
                        </div>
                         
                    </div>

                </div>
                   
                 
                
            </div>
             

        </div>
    </div>

</section>

 
@endsection