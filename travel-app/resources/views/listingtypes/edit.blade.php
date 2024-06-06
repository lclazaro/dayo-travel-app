@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('listingtypes/' .$listingtypes->unit_type) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="unit_type" id="unit_type" value="{{$listingtypes->unit_type}}" id="id" />
        <label>Unit Term</label></br>
        <input type="text" name="unit_term" id="unit_term" value="{{$listingtypes->unit_term}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop