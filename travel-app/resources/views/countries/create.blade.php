@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">User Page</div>
  <div class="card-body">
      
      <form action="{{ url('users') }}" method="post">
        {!! csrf_field() !!}
        <label>Country Code</label></br>
        <input type="text" name="country_code" id="country_code" class="form-control"></br>
        <label>Country Name</label></br>
        <input type="text" name="country_name" id="country_name" class="form-control"></br>
        <label>Continent</label></br>
        <input type="text" name="continent" id="continent" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop