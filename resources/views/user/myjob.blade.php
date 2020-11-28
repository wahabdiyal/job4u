@extends('user.layout')

@section('title', 'My Job')

@section('css')
<link rel="stylesheet" href="{{url('user/css/blockbtclass.css')}}">
<link rel="stylesheet" href="{{url('user/css/mystyle.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@section('content')
<div class="container">
<ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" style="color: #2cc7ff !important" data-toggle="tab" href="#home">Saved</a>
    </li>
     
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
      <h3>My Job </h3>

      @foreach($searchs as $search)
            <div class="col-md-12 mt-3">
                <div class="card     mb-3">
                    
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
                            {{$search->job_description}}.
                        </p>
                        
                    </div>
                    <div class="card-footer">

                        <span class=""><a href="{{url('searchdetail',$search->id)}}"><button
                                    class="btn btn-danger ">Apply</button></a></span>
 						<span class="save-card-header text-muted  pr-4 fontclassspan"><a
                                    class="btn btn-danger " href="{{url('delSaveJob',$search->job_id)}}" onclick="return confirm('Are you sure?')">Delete</a></span>
                    </div>
                </div>

            </div>

            @endforeach
             {{$searchs->render("pagination::bootstrap-4")}}
    </div>
     
  </div>
</div>


@endsection