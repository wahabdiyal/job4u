@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Companies</h1>
@stop

@section('content')
<div class="container mr-3">
    <div class="">

        <ul class="nav nav-tabs" id="custom-content-above-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link" id="custom-content-above-home-tab" data-toggle="pill"
                    href="#custom-content-above-home" role="tab" aria-controls="custom-content-above-home"
                    aria-selected="false">All</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" id="custom-content-above-profile-tab" data-toggle="pill"
                    href="#custom-content-above-profile" role="tab" aria-controls="custom-content-above-profile"
                    aria-selected="true">Active</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="custom-content-above-messages-tab" data-toggle="pill"
                    href="#custom-content-above-messages" role="tab" aria-controls="custom-content-above-messages"
                    aria-selected="false">Pending</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="custom-content-above-settings-tab" data-toggle="pill"
                    href="#custom-content-above-settings" role="tab" aria-controls="custom-content-above-settings"
                    aria-selected="false">Deactive</a>
            </li>
        </ul>
        <div class="tab-custom-content">
            <p class="lead mb-0">Company Request Detail</p>
        </div>
        <div class="tab-content" id="custom-content-above-tabContent">
            <div class="tab-pane fade" id="custom-content-above-home" role="tabpanel"
                aria-labelledby="custom-content-above-home-tab">
                <table class="data-table table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Website</th>
                            <th>Address</th>
                            <th>Type</th>
                            <th>Detail</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($companies as $company)
                        <tr>

                            <td>{{$company->id}}</td>
                            <td>{{$company->name}}</td>
                            <td>{{$company->email}}</td>
                            <td>{{$company->company_website}}</td>
                            <td>{{$company->address}}</td>
                            <td>{{$company->company_type}}</td>
                            <td>{{substr($company->detail,0,10)}}</td>
                            @if($company->active_deactive != 'active')
                            <td>
                              <a href="{{url('/admin/company/status',$company->id)}}"><button
                                        onclick="return confirm('Are you sure?')"
                                        class="btn btn-success">{{$company->active_deactive}}</button></a></td>
                                        @else
                                        <td>
                                     <a href="#"><button
                                         
                                        class="btn btn-primary">{{$company->active_deactive}}</button></a></td>
                                        @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade active show" id="custom-content-above-profile" role="tabpanel"
                aria-labelledby="custom-content-above-profile-tab">
                <table class="data-table table table-striped table-bordered">
                    <thead>
                        <tr>
                            <!-- <th>id</th> -->
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Website</th>
                            <th>Company Size</th>

                            <th>Type</th>

                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($companies as $company)
                        
                            @if($company->active_deactive =='active')
                            <tr><!-- <td>{{$company->id}}</td> -->
                            <td>{{$company->name}}</td>
                            <td>{{$company->email}}</td>
                            <td>{{$company->mobile_number}}</td>
                            <td>{{$company->company_website}}</td>
                            <td>{{$company->company_size}}</td>

                            <td>{{$company->company_type}}</td>
                            <td><span class="badge badge-success">{{$company->active_deactive}}</span></td>
                            <td>
                               <div class="btn-group">
                       <a href="{{url('admin/company/detail',$company->id)}}"> <button type="button" class="btn btn-default"><i class="fa fa-eye"></i></button></a>
                       <a href="{{url('admin/company/edit',$company->id)}}">
                        <button type="button" class="btn btn-default"><i class="fa fa-edit"></i></button></a>
                        <a href="{{url('admin/company/del',$company->id)}}"> 
                        <button onclick="return confirm('Are you sure?')" type="button" class="btn btn-default"><i
                                                class="fa fa-trash"></i></button></a>
                      </div>
                            </td></tr>
                            @endif
                        
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="custom-content-above-messages" role="tabpanel"
                aria-labelledby="custom-content-above-messages-tab">
                <table class="data-table table table-striped table-bordered">
                    <thead>
                        <tr>
                            <!-- <th>id</th> -->
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Website</th>
                            <th>Company Size</th>

                            <th>Type</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($companies as $company)
                       
                            @if($company->active_deactive =='pending')
                             <tr><!-- <td>{{$company->id}}</td> -->
                            <td>{{$company->name}}</td>
                            <td>{{$company->email}}</td>
                            <td>{{$company->mobile_number}}</td>
                            <td>{{$company->company_website}}</td>
                            <td>{{$company->company_size}}</td>

                            <td>{{$company->company_type}}</td>
                            <td><span class="badge badge-success">{{$company->active_deactive}}</span></td>
                            <td><div class="btn-group">
                        <a href="{{url('admin/company/detail',$company->id)}}"> <button type="button" class="btn btn-default"><i class="fa fa-eye"></i></button></a>
                        <a href="{{url('admin/company/edit',$company->id)}}">
                        <button type="button" class="btn btn-default"><i class="fa fa-edit"></i></button></a>
                       <a href="{{url('admin/company/del',$company->id)}}"> 
                        <button onclick="return confirm('Are you sure?')" type="button" class="btn btn-default"><i
                                                class="fa fa-trash"></i></button></a>
                      </div>
                               <!--  <div class="btn-group btn-group-sm">
                                    <a data-toggle="tooltip" data-placement="bottom" title="" href=""
                                        class="btn btn-link" data-original-title="View details">
                                        <i class="fa fa-eye"></i>
                                    </a>

                                    <a data-toggle="tooltip" data-placement="bottom" title="" href=""
                                        class="btn btn-link" data-original-title="Edit Order">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <form method="POST" action="#" accept-charset="UTF-8"><input name="_method"
                                            type="hidden" value="DELETE"><input name="_token" type="hidden"
                                            value="WFbHSGnfbDWmZnJS6LpHrfYcGZNrRbGDZk9yoauA">
                                        <button type="submit" class="btn btn-link text-danger"
                                            onclick="return confirm('Are you sure?')"><i
                                                class="fa fa-trash"></i></button>
                                    </form>
                                </div> -->
                            </td></tr>
                            @endif
                        
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="custom-content-above-settings" role="tabpanel"
                aria-labelledby="custom-content-above-settings-tab">
                <table class="data-table table table-striped table-bordered">
                    <thead>
                        <tr>
                            <!-- <th>id</th> -->
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Company Size</th>
                            <th>Address</th>
                            <th>Type</th>

                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($companies as $company)
                        
                            @if($company->active_deactive =='deactive')
                            <tr><!-- <td>{{$company->id}}</td> -->
                            <td>{{$company->name}}</td>
                            <td>{{$company->email}}</td>
                            <td>{{$company->mobile_number}}</td>
                            <td>{{$company->company_website}}</td>
                            <td>{{$company->company_size}}</td>

                            <td>{{$company->company_type}}</td>
                            <td><span class="badge badge-danger">{{$company->active_deactive}}</span></td>
                            <td>
                                 <div class="btn-group">
                        <a href="{{url('admin/company/detail',$company->id)}}"> <button type="button" class="btn btn-default"><i class="fa fa-eye"></i></button></a>
                        <a href="{{url('admin/company/edit',$company->id)}}">
                        <button type="button" class="btn btn-default"><i class="fa fa-edit"></i></button></a>
                         <a href="{{url('admin/company/del',$company->id)}}"> 
                        <button onclick="return confirm('Are you sure?')" type="button" class="btn btn-default"><i
                                                class="fa fa-trash"></i></button></a>
                      </div>
                            </td></tr>
                            @endif
                        
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@stop

@section('css')
 
@stop

@section('js')
<script>
 

$(document).ready(function() {
    $('.table').dataTable();
});
</script>

@stop