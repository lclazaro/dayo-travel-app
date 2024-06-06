@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">User Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">First Name : {{ $users->fname }}</h5>
        <p class="card-text">Last Name : {{ $users->lname }}</p>
        <p class="card-text">Age : {{ $users->age }}</p>
        <p class="card-text">Sex : {{ $users->sex }}</p>
        <p class="card-text">Mobile : {{ $users->contactnum }}</p>
        <p class="card-text">Email : {{ $users->email }}</p>
  </div>
       
    </hr>
  
  </div>
</div>

@endsection