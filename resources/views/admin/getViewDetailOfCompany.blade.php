@extends('adminlte::page')

@section('title', 'Company Detail Page')

@section('content_header')
<h1>Company detail page</h1>
@stop
 
@section('content')
<div class="card">
    <div class="card-header d-print-none">
      <ul class="nav nav-tabs align-items-end card-header-tabs w-100">
        <li class="nav-item">
          <a class="nav-link" href="{{url('admin/company/requests')}}"><i class="fa fa-list mr-2"></i>Company List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#"><i class="fa fa-plus mr-2"></i>Request Detail</a>
        </li>
        <div class="ml-auto d-inline-flex">
           
        </div>
      </ul>
    </div>
    <div class="card-body">
      <div class="row">
        <!-- Id Field -->
<div class="form-group row col-md-4 col-sm-12">
    <label for="id" class="col-4 control-label">Company ID</label>
    <div class="col-8">
    <p>#{{$company->id}}</p>
  </div>

    <label for="order_client" class="col-4 control-label">Company</label>
    <div class="col-8">
    <p>{{$company->name}}</p>
  </div>

    <label for="order_client_phone" class="col-4 control-label">Phone Number</label>
    <div class="col-8">
    <p>{{$company->mobile_number}}</p>
  </div>

    <label for="delivery_address" class="col-4 control-label">Company Address</label>
    <div class="col-8">
    <p>{{$company->address}}</p>
  </div>

    <label for="order_date" class="col-4 control-label">Date of Request</label>
    <div class="col-8">
    <p>{{$company->created_at}}</p>
  </div>


</div>

<!-- Order Status Id Field -->
<div class="form-group row col-md-4 col-sm-12">
    <label for="order_status_id" class="col-4 control-label">Status</label>
    <div class="col-8">
    <p>{{$company->active_deactive}}</p>
  </div>

    <label for="active" class="col-4 control-label">Active</label>
    <div class="col-8">
          <p><span class="badge badge-success"> <?=($company->active_deactive=='active') ? 'Yes':'No' ?></span></p>
        </div>

    <label for="payment_method" class="col-4 control-label">Detail</label>
    <div class="col-8">
    <p>{{$company->detail}}</p>
  </div>

  <!--   <label for="payment_status" class="col-4 control-label">Payment Status</label>
    <div class="col-8">
    <p>Paid</p>
  </div> -->
    <label for="order_updated_date" class="col-4 control-label">Updated At</label>
    <div class="col-8">
        <p>{{  $company->updated_at }}</p>
    </div>

</div>

<!-- Id Field -->
<!-- <div class="form-group row col-md-4 col-sm-12">
    <label for="market" class="col-4 control-label">Market</label>
    <div class="col-8">
                    <p>Hafeez Center</p>
            </div>

    <label for="market_address" class="col-4 control-label">Address</label>
    <div class="col-8">
                    <p>74 Ghalib Rd, Block E1 Block E 1 Gulberg III, Lahore, Punjab, Pakistan</p>
            </div>

    <label for="market_phone" class="col-4 control-label">Phone</label>
    <div class="col-8">
                    <p>03001122333</p>
            </div>

    <label for="driver" class="col-4 control-label">Driver</label>
    <div class="col-8">
                    <p>Rizwan</p>
        
    </div>

    <label for="hint" class="col-4 control-label">Hint:</label>
    <div class="col-8">
        <p></p>
     </div>

     </div> -->

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