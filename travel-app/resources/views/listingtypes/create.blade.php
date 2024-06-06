@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Listing Types Page</div>
  <div class="card-body">
      
      <form action="{{ url('listingtypes') }}" method="post">
        {!! csrf_field() !!}
        <label>Unit Type</label></br>
        <input type="text" name="unit_type" id="unit_type" class="form-control"></br>
        <label>Unit Term</label></br>
        <input type="text" name="unit_term" id="unit_term" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop