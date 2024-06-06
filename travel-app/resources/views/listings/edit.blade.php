@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('listings/' .$listings->list_id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="uid" id="uid" value="{{$listings->uid}}" id="uid" />
        <input type="hidden" name="list_id" id="list_id" value="{{$listings->list_id}}" id="list_id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$listings->list_name}}" class="form-control"></br>
        <label>Unit Type</label></br>
        <input type="text" name="unit_type" id="unit_type" value="{{$listings->unit_type}}" class="form-control"></br>
        <label>Barangay</label></br>
        <input type="text" name="barangay" id="barangay" value="{{$listings->barangay}}" class="form-control"></br>
        <label>City</label></br>
        <input type="text" name="city" id="city" value="{{$listings->city}}" class="form-control"></br>
        <label>Province</label></br>
        <input type="text" name="province" id="province" value="{{$listings->province}}" class="form-control"></br>
        <label>Region</label></br>
        <input type="text" name="region" id="region" value="{{$listings->region}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop