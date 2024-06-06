@extends('layout')
@section('content')
 
 
<div class="card">
  <h3 class="card-header">User Page</h3>
  <div class="card-body">
        <div class="card-body">
<<<<<<< HEAD
        <p class="card-title">First Name: {{ $users->fname }}</p>
        <p class="card-text">Last Name: {{ $users->lname }}</p>
        <p class="card-text">Age: {{ $users->age }}</p>
        <p class="card-text">Gender: {{ $users->sex }}</p>
        <p class="card-text">Mobile Number: {{ $users->contactnum }}</p>
        <p class="card-text">Email Address: {{ $users->email }}</p>
=======
        <h5 class="card-title">First Name : {{ $users->fname }}</h5>
        <p class="card-text">Last Name : {{ $users->lname }}</p>
        <p class="card-text">Age : {{ $users->age }}</p>
        <p class="card-text">Sex : {{ $users->sex }}</p>
        <p class="card-text">Mobile : {{ $users->contactnum }}</p>
        <p class="card-text">Email : {{ $users->email }}</p>
>>>>>>> 5a2ccf8d63f4d39b41a5658f6946dcbd01757c3f
  </div>
       
    </hr>
  
  </div>
</div>

@endsection