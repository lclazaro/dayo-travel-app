@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">User Page</div>
  <div class="card-body">
      
      <form action="{{ url('listings') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="list_name" id="list_name" class="form-control"></br>
        <label>Unit Type</label></br>
        <input type="text" name="unit_type" id="unit_type" class="form-control"></br>
        <label>Barangay</label></br>
        <input type="text" name="barangay" id="barangay" class="form-control"></br>
        <label>City</label></br>
        <input type="text" name="city" id="city" class="form-control"></br>
        <label>Province</label></br>
        <input type="text" name="province" id="province" class="form-control"></br>
        <label>Region</label></br>
        <input type="text" name="region" id="region" class="form-control"></br>
        <label>Country Code</label></br>
        <input type="text" name="country_code" id="country_code" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop