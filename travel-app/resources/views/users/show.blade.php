@extends('layout')
@section('content')
 
 
<div class="card">
  <h3 class="card-header">User Page</h3>
  <div class="card-body">
        <div class="card-body">
        <p class="card-title">First Name: {{ $users->fname }}</p>
        <p class="card-text">Last Name: {{ $users->lname }}</p>
        <p class="card-text">Age: {{ $users->age }}</p>
        <p class="card-text">Gender: {{ $users->sex }}</p>
        <p class="card-text">Mobile Number: {{ $users->contactnum }}</p>
        <p class="card-text">Email Address: {{ $users->email }}</p>
  </div>
       
    </hr>
  
  </div>
</div>

@endsection