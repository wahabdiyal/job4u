@extends('adminlte::page')

@section('title', 'Show User')

@section('content_header')
<h1>User Detail</h1>
@stop

@section('content')
<div class="container mr-3">
    <div class="">

        <ul class="nav nav-tabs" id="custom-content-above-tab" role="tablist">
             
            <li class="nav-item">
                <a class="nav-link active" id="custom-content-above-profile-tab" data-toggle="pill"
                    href="#custom-content-above-profile" role="tab" aria-controls="custom-content-above-profile"
                    aria-selected="true">Active</a>
            </li>
             
        </ul>
        <div class="tab-custom-content">
            <p class="lead mb-0">User Detail</p>
        </div>
        <div class="tab-content" id="custom-content-above-tabContent">
             
            <div class="tab-pane fade active show" id="custom-content-above-profile" role="tabpanel"
                aria-labelledby="custom-content-above-profile-tab">
                <table class="data-table table table-striped table-bordered">
                    <thead>
                        <tr>
                             <th>id</th> 
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Skill</th>
                            <th>Experience</th>
                            <th>City</th>
                             <th>Industry</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody><?php $a = 1; ?>
                         @foreach($users as $user)
                        <tr>
                            <td>{{$a++}}</td>  
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone}}</td>
                            <td>{{$user->skill}}</td>
                            <td>{{$user->experience}}</td>
                           <td>{{$user->city}}</td>
                            <td><span class="badge badge-success">{{$user->industry}}</span></td>
                            <td>
                               <div class="btn-group">
                        
                        <a href="{{url('admin/user/del',$user->id)}}"> 
                        <button onclick="return confirm('Are you sure?')" type="button" class="btn btn-default"><i
                                                class="fa fa-trash"></i></button></a>
                      </div>
                            </td>
                          
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
               
        </div>
    </div>

</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
console.log('Hi!');

$(document).ready(function() {
    $('.table').dataTable();
});
</script>

@stop