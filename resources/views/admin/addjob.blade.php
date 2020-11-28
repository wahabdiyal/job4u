@extends('adminlte::page')

@section('title', 'Add job')

@section('content_header')
    <h1>Add Job</h1>
@stop

@section('content')
<div class="container mb-4">
     <form method="post" action="{{route('comapany_add_job')}}">
      {{csrf_field()}}
  <div class="form-group">
    <label for="title">Title</label>
    <input type="email" class="form-control" id="title" name="title" placeholder="Enter Title">
  </div>
   <div class="form-group">
    <label for="skill">Skill</label>
    <input type="text" class="form-control" id="skill" name="skill" placeholder="Skill">
  </div>
    <div class="form-group">
    <label for="postingdate">Posting Date</label>
    <input type="text" class="form-control" id="postingdate" name="postingdate" placeholder="Posting Date">
  </div>
    <div class="form-group">
    <label for="city">City</label>
    <input type="text" class="form-control" id="city" name="city" placeholder="City">
  </div>
    <div class="form-group">
    <label for="disctrict">Disctrict</label>
    <input type="text" class="form-control" id="disctrict" name="disctrict" placeholder="Disctrict">
  </div>
    <div class="form-group">
    <label for="country">Country</label>
    <input type="text" class="form-control" id="country" name="country" placeholder="Country">
  </div>
      <div class="form-group">
    <label for="role_user">Role User</label>
    <input type="text" class="form-control" id="role_user" placeholder="Role User">
  </div>
      <div class="form-group">
    <label for="industry_type">Industry type</label>
    <input type="text" class="form-control" id="industry_type" name="industry_type" placeholder="Industry type">
  </div>
      <div class="form-group">
    <label for="functional_area">Functional area</label>
    <input type="text" class="form-control" id="functional_area" name='functional_area' placeholder="Functional area">
  </div>
      <div class="form-group">
    <label for="employment_type">Employment type</label>
    <input type="text" class="form-control" id="employment_type" name='employment_type' placeholder="Employment type">
  </div>

    <div class="form-group">
    <label for="">Role </label>
    <input type="email" class="form-control" id="" placeholder="">
  </div>
        <div class="form-group">
    <label for="">Email address</label>
    <input type="email" class="form-control" id="" placeholder="name@example.com">
  </div>
        <div class="form-group">
    <label for="">Email address</label>
    <input type="email" class="form-control" id="" placeholder="name@example.com">
  </div>
        <div class="form-group">
    <label for="">Email address</label>
    <input type="email" class="form-control" id="" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Example select</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Example multiple select</label>
    <select multiple class="form-control" id="exampleFormControlSelect2">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
   <button type="submit" class="btn btn-primary">Submit</button>

</form>
<div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop