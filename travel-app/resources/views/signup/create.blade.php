@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">User Page</div>
  <div class="card-body">
      
      <form action="{{ url('users') }}" method="post">
        {!! csrf_field() !!}
        <label>First Name</label></br>
        <input type="text" name="fname" id="fname" class="form-control"></br>
        <label>Last Name</label></br>
        <input type="text" name="lname" id="lname" class="form-control"></br>
        <label>Age</label></br>
        <input type="text" name="age" id="age" class="form-control"></br>
        <label>Sex</label></br>
        <input type="text" name="sex" id="sex" class="form-control"></br>
        <label>Contact No.</label></br>
        <input type="text" name="contactnum" id="contactnum" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" class="form-control"></br>
        <label>Password</label></br>
        <input type="text" name="password" id="password" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  </div>
</div>
 
@stop