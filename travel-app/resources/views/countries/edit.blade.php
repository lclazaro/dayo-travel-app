@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('users/' .$users->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$users->id}}" id="id" />
        <label>First Name</label></br>
        <input type="text" name="fname" id="fname" value="{{$users->fname}}" class="form-control"></br>
        <label>Last Name</label></br>
        <input type="text" name="lname" id="lname" value="{{$users->lname}}" class="form-control"></br>
        <label>Age</label></br>
        <input type="text" name="age" id="age" value="{{$users->age}}" class="form-control"></br>
        <label>Sex</label></br>
        <input type="text" name="sex" id="sex" value="{{$users->sex}}" class="form-control"></br>
        <label>Contact No.</label></br>
        <input type="text" name="contactnum" id="contactnum" value="{{$users->contactnum}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" value="{{$users->email}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop