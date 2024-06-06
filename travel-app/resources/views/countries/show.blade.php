@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Country Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Country Code : {{ $countrys->country_code }}</h5>
        <p class="card-text">Country Name : {{ $countrys->country_name }}</p>
        <p class="card-text">Continent : {{ $countrys->continent }}</p>
  </div>
       
    </hr>
  
  </div>
</div>

@endsection