@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
                <div id="google_translate_element"></div>

    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="container-fluid">
    	<div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$company}}</h3>

                <p>Companies</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{url('admin/company/request')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$job}}</h3>

                <p>Total Job</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{url('admin/jobs')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$user}}</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="{{url('admin/show_user')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>$65</h3>

                <p>Total Earning</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <div class="row">
          <div class="col-lg-12 col-12">
            <canvas id="jobGraph">
              
            </canvas>
          </div>

          <div class="col-lg-12 col-12">
            <canvas id="companyGraph">
              
            </canvas>
          </div>
          <div class="col-lg-12 col-12">
            <canvas id="ageGraph">
              
            </canvas>
          </div>
           <div class="col-lg-7 col-12 mt-4">
            <canvas id="genderGraph">
              
            </canvas>
          </div>
          <div class="col-lg-5 col-12 mt-4">
            <canvas id="candidateGraph">
              
            </canvas>
          </div>
        </div>
    </div>

@stop

@section('css')
    <!-- <link rel="stylesheet" href="/css/admin_custom.css"> -->
@stop

@section('js')
    <script> 

      $(document).ready(function() {
        $.ajax({
          url:"{{url('api/getJob')}}",
          method:"GET",
          success: function(abc) {
            var gender = abc['pic'];
            data=abc['job_bar'];
            var candidate = abc['candidate_note_bar'];
            var name=[];
            var total=[];
            for (var i in data) {
               name.push(data[i].name);
               total.push(data[i].total);
            } 

            var ctx = document.getElementById('jobGraph');
              var myChart = new Chart(ctx, {
              type: 'bar',
              data: {
                  labels: name,
                  datasets: [{
                      label: '# Job of Industry',
                      data: total,
                      backgroundColor: [
                          'rgba(255, 99, 132, 0.2)',
                          
                      ],
                      borderColor: [
                          'rgba(255, 99, 132, 1)',
                           
                      ],
                      borderWidth: 1
                  }]
                   } 
                });
            var a = document.getElementById('genderGraph');
             var myChart = new Chart(a, {
              type: 'doughnut',
                 data: {
                 labels: ['Male Users', 'Female Users'],
                  datasets: [{
                 backgroundColor: ['#f56954', '#00a65a'],
                 borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)'],
                 data: [gender['male'],gender['female']],
                 borderWidth: 1
               }]
             },options: {
                       maintainAspectRatio: true,
                       responsive: true,
                       cutoutPercentage: 80,
                       tooltips: {
                         callbacks: {
                           label: (tooltipItem, data) => {
                             var value = data.datasets[0].data[tooltipItem.index];
                             var total = data.datasets[0].data.reduce((a, b) => a + b, 0);
                             var pct = 100 / total * value;
                             var pctRounded = Math.round(pct * 10) / 10;
                             return value + ' (' + pctRounded + '%)';
                           }
                         }
                       }
                     }                   
                  });

             var cd = document.getElementById('candidateGraph');
              var myChart = new Chart(cd, {
              type: 'bar',
              data: {
                  labels: ["Student","Job Seeker","Handicap","Apprentice","Subsidized"],
                  datasets: [{
                      label: '# Candidate',
                      data:[candidate.Student,candidate.Job_Seeker,candidate.Handicap,candidate.Apprentice,candidate.Subsidized],
                      backgroundColor: [
                          'rgba(255, 99, 132, 0.2)',
                          
                      ],
                      borderColor: [
                          'rgba(255, 99, 132, 1)',
                           
                      ],
                      borderWidth: 1
                  }]
                   } 
                });


              var cd = document.getElementById('ageGraph');
              var myChart = new Chart(cd, {
              type: 'bar',
              data: {
                  labels: ["18-25","26-32","33-40","41-50","50+"],
                  datasets: [{
                      label: '# Candidate',
                      data:[candidate.Student,candidate.Job_Seeker,candidate.Handicap,candidate.Apprentice,candidate.Subsidized],
                      backgroundColor: [
                          'rgba(255, 99, 132, 0.2)',
                          
                      ],
                      borderColor: [
                          'rgba(255, 99, 132, 1)',
                           
                      ],
                      borderWidth: 1
                  }]
                   } 
                });



              data=abc['company_bar'];
            
            var name=[];
            var total=[];
            for (var i in data) {
               name.push(data[i].name);
               total.push(data[i].total);
            } 

            var ctx = document.getElementById('companyGraph');
              var myChart = new Chart(ctx, {
              type: 'bar',
              data: {
                  labels: name,
                  datasets: [{
                      label: '# Company of Industry',
                      data: total,
                      backgroundColor: [
                          'rgba(255, 99, 132, 0.2)',
                          
                      ],
                      borderColor: [
                          'rgba(255, 99, 132, 1)',
                           
                      ],
                      borderWidth: 1
                  }]
                   } 
                });

          }
        });
      });


     </script>
@stop