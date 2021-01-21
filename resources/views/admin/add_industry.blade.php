@extends('adminlte::page')

@section('title', 'Industry')

@section('content_header')
    <h1>Edit Company</h1>
@stop

@section('content')
 
   <div class="card">
    <div class="card-header">
      <ul class="nav nav-tabs align-items-end card-header-tabs w-100">
                <li class="nav-item">
                  
          <a class="nav-link active" href=" "><i class="fa fa-list mr-2"></i>Add Industry </a>
        </li>
           
      </ul>
    </div>
    <div class="card-body">
      <div class="card" style="width: auto;">
    <h3 class="card-title " style="padding: 22px;"><b>Add Industry</b></h3>
  <div class="card-body">
   
      <form method="POST" enctype="multipart/form-data"  action="" accept-charset="UTF-8">
      	@csrf
      <div class="row">
        <div style="flex: 50%;max-width: 50%;padding: 0 4px;" class="column">

    <div class="form-group row ">
        <label for="name" class="col-3 control-label text-right">Name</label>
        <div class="col-9">
            <input class="form-control" placeholder="Insert Name"  required name="name" type="text">
            <div class="form-text text-muted">
                Add Fields
            </div>
        </div>
    </div>
    <div class="form-group row ">
        <label for="name" class="col-3 control-label text-right">Image</label>
        <div class="col-9">
            <input class="form-control"   name="image" type="file" required >
             
        </div>
    </div>
 
    

   

</div>
 

<!-- Submit Field -->
<div class="form-group col-12 text-right">
    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save Market</button>
    <a href="{{url('admin/main')}}" class="btn btn-default"><i class="fa fa-undo"></i> Cancel</a>
</div>
      </div>
      </form>
  </div>
</div>
      <div class="clearfix">
          <table class="data-table table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>image</th>
                            <th>Updated at</th>
                            <th>Action</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php $a = 1; ?>
                         @foreach($industries as $industry)
                        <tr>

                            <td>{{$a++}}</td>
                            <td>{{$industry->name}}</td>
                            <td><img src="{{$industry->image}}" width="70" height="80"></td>
                           
                            <td>{{$industry->updated_at}}</td>
                            <td>
                             <a href="{{url('admin/delIndustry',$industry->id)}}"> 
                        <button onclick="return confirm('Are you sure?')" type="button" class="btn btn-danger" ><i
                                                class="fa fa-trash"></i></button></a></td>

                        </tr>
                         @endforeach
                    </tbody>
      </div>
    </div>
  </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

    <script>
        $(document).ready(function() {
        $('.table').dataTable();
        }); 
 </script>
@stop