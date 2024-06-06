@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('countries/' .$countrys->country_code) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <label>Country Code</label></br>
        <input type="text" name="country_code" id="country_code" value="{{$countrys->country_code}}" class="form-control"></br>
        <label>Country Name</label></br>
        <input type="text" name="country_name" id="country_name" value="{{$countrys->country_name}}" class="form-control"></br>
        <label>Continent</label></br>
        <input type="text" name="continent" id="continent" value="{{$countrys->continent}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop