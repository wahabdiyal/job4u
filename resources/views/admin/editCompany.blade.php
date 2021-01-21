@extends('adminlte::page')

@section('title', 'Edit Company')

@section('content_header')
    <h1>Edit Company</h1>
@stop

@section('content')
<!--  

    "id" => 3
    "name" => "tdfdft company"
    "email" => "testdfdmpany@gmail.com"
    "password" => "adfadkls"
    "active_deactive" => "active"
    "registration_date" => "12/12/2020"
    "mobile_number" => "3343"
    "company_website" => "www.facebook.com"
    "company_size" => "10"
    "address" => "aldsj k fjk jfk fjk fjkf j"
    "company_type" => "business mangement"
    "detail" => "adklfklddklkldkldkldkldkldkldkl"
     -->
   <div class="card">
    <div class="card-header">
      <ul class="nav nav-tabs align-items-end card-header-tabs w-100">
                <li class="nav-item">
          <a class="nav-link" href="{{url('admin/company/requests')}}"><i class="fa fa-list mr-2"></i>Companies List</a>
        </li>
            <!--             <li class="nav-item">
          <a class="nav-link" href=""><i class="fa fa-plus mr-2"></i>Open New Company</a>
        </li> -->
                <li class="nav-item">
          <a class="nav-link active" href="#"><i class="fa fa-pencil mr-2"></i>Edit Company</a>
        </li>
      </ul>
    </div>
    <div class="card-body">
      <form method="POST" action="{{url('admin/company/edit',$company->id)}}" accept-charset="UTF-8">
      	{{csrf_field()}}
      <div class="row">
        <div style="flex: 50%;max-width: 50%;padding: 0 4px;" class="column">

    <div class="form-group row ">
        <label for="name" class="col-3 control-label text-right">Name</label>
        <div class="col-9">
            <input class="form-control" placeholder="Insert Name" name="name" type="text" value="{{$company->name}}" id="name">
            <div class="form-text text-muted">
                Company Name
            </div>
        </div>
    </div>
 
    <div class="form-group row ">
        <label for="delivery_fee" class="col-3 control-label text-right">Email</label>
        <div class="col-9">
            <input class="form-control" step="any" placeholder="Edit the delivery fee amount" name="email" type="text" value="{{$company->email}}" id="delivery_fee">
            <div class="form-text text-muted">
                Company Email
            </div>
        </div>
    </div>

   
    <div class="form-group row ">
        <label for="company_website" class="col-3 control-label text-right">Website</label>
        <div class="col-9">
            <input class="form-control" step="any" placeholder="25" name="company_website" type="text" id="company_website" value="{{$company->company_website}}">
             
        </div>
    </div>

    <!-- mobile_number Field -->
    <div class="form-group row ">
        <label for="mobile_number" class="col-3 control-label text-right">Mobile Number</label>
        <div class="col-9">
            <input class="form-control" step="any" placeholder="19" name="mobile_number" type="text" value="{{$company->mobile_number}}" id="mobile_number">
             
        </div>
    </div>

    
    <!-- Phone Field -->
    <div class="form-group row ">
        <label for="company_type" class="col-3 control-label text-right">Company type</label>
        <div class="col-9">
            <input class="form-control" placeholder="Company type" name="company_type" type="text" id="company_type" value="{{$company->company_type}}">
            
        </div>
    </div>

    <!-- Mobile Field -->
    <div class="form-group row ">
        <label for="company_size" class="col-3 control-label text-right"> Company size</label>
        <div class="col-9">
            <input class="form-control" placeholder=" company_size" name="company_size" type="text" id="company_size" value="{{$company->company_size}}">
             
        </div>
    </div>

    <!-- Address Field -->
    <div class="form-group row ">
        <label for="address" class="col-3 control-label text-right">Address</label>
        <div class="col-9">
            <input class="form-control" placeholder="Insert Address" name="address" type="text" value="{{$company->address}}">
             
        </div>
    </div>

    <!-- Latitude Field -->
    <div class="form-group row ">
        <label for="registration_date" class="col-3 control-label text-right">Registration Date</label>
        <div class="col-9">
            <input class="form-control" placeholder="Insert registration_date" name="registration_date" type="text" value="{{$company->registration_date}}" id="registration_date">
            
        </div>
    </div>
 
    <div class="form-group row ">
        <label for="company_number" class="col-3 control-label text-right">Company Number</label>
        <div class="col-9">
            <input class="form-control" placeholder=" company Number" name="company_number" type="text" value="{{$company->company_number}}" id="company_number">
             
        </div>
    </div>

    <div class="form-group row ">
        <label for="company_country" class="col-3 control-label text-right">Company Country</label>
        <div class="col-9">
            <input class="form-control" placeholder=" company Number" name="company_country" type="text" value="{{$company->company_country}}" id="company_country">
             
        </div>
    </div>

    <div class="form-group row ">
        <label for="detail" class="col-3 control-label text-right">Detail</label>
        <div class="col-9">
            <textarea id="detail" class="form-control" name="detail">{{$company->detail}}</textarea> 
             
        </div>
    </div>

    <div class="form-group row ">
        <label for="closed" class="col-3 control-label text-right">Status</label>
        <div class="checkbox icheck ml-5">
             <label class="form-check-label">
          <input type="checkbox" name="active_deactive" class="form-check-input"  @if($company->active_deactive == 'active') checked @endif >Active
        </label>

        </div>
    </div>

   

</div>
 

<!-- Submit Field -->
<div class="form-group col-12 text-right">
    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save Market</button>
    <a href="https://ecommerce.bazaaaar.com/public/markets" class="btn btn-default"><i class="fa fa-undo"></i> Cancel</a>
</div>
      </div>
      </form>
      <div class="clearfix"></div>
    </div>
  </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop