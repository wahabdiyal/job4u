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
          <a class="nav-link active" href="#"><i class="fa fa-pencil mr-2"></i>Edit Market</a>
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
                Insert Name
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

    <!-- delivery_range Field -->
    <div class="form-group row ">
        <label for="delivery_range" class="col-3 control-label text-right">Delivery Range</label>
        <div class="col-9">
            <input class="form-control" step="any" placeholder="25" name="delivery_range" type="number" id="delivery_range">
            <div class="form-text text-muted">
                Enter the delivery range of the market
            </div>
        </div>
    </div>

    <!-- default_tax Field -->
    <div class="form-group row ">
        <label for="default_tax" class="col-3 control-label text-right">Default Tax of the market</label>
        <div class="col-9">
            <input class="form-control" step="any" placeholder="19" name="default_tax" type="number" value="15" id="default_tax">
            <div class="form-text text-muted">
                Enter the default tax to overwrite the default tax
            </div>
        </div>
    </div>

    
    <!-- Phone Field -->
    <div class="form-group row ">
        <label for="phone" class="col-3 control-label text-right">Phone</label>
        <div class="col-9">
            <input class="form-control" placeholder="Insert Phone" name="phone" type="text" id="phone">
            <div class="form-text text-muted">
                Insert Phone
            </div>
        </div>
    </div>

    <!-- Mobile Field -->
    <div class="form-group row ">
        <label for="mobile" class="col-3 control-label text-right">Mobile</label>
        <div class="col-9">
            <input class="form-control" placeholder="Insert Mobile" name="mobile" type="text" id="mobile">
            <div class="form-text text-muted">
                Insert Mobile
            </div>
        </div>
    </div>

    <!-- Address Field -->
    <div class="form-group row ">
        <label for="address" class="col-3 control-label text-right">Address</label>
        <div class="col-9">
            <input class="form-control" placeholder="Insert Address" name="address" type="text" value="183-189 Mosihoa St, Monise, Katlehong, 1434" id="address">
            <div class="form-text text-muted">
                Insert Address
            </div>
        </div>
    </div>

    <!-- Latitude Field -->
    <div class="form-group row ">
        <label for="latitude" class="col-3 control-label text-right">Latitude</label>
        <div class="col-9">
            <input class="form-control" placeholder="Insert Latitude" name="latitude" type="text" value="26.357946" id="latitude">
            <div class="form-text text-muted">
                Insert Latitude
            </div>
        </div>
    </div>

    <!-- Longitude Field -->
    <div class="form-group row ">
        <label for="longitude" class="col-3 control-label text-right">Longitude</label>
        <div class="col-9">
            <input class="form-control" placeholder="Insert Longitude" name="longitude" type="text" value="28.161182" id="longitude">
            <div class="form-text text-muted">
                Insert Longitude
            </div>
        </div>
    </div>
    <!-- 'Boolean closed Field' -->
    <div class="form-group row ">
        <label for="closed" class="col-3 control-label text-right">Closed market</label>
        <div class="checkbox icheck ml-5">
             <label class="form-check-label">
          <input type="checkbox" class="form-check-input"  checked>Active
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