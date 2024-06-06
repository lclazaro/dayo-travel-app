@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Listing Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">UID : {{ $listings->uid }}</h5>
        <p class="card-text">List ID : {{ $listings->list_id }}</p>
        <p class="card-text">Name : {{ $listings->list_name }}</p>
        <p class="card-text">Unit Type : {{ $listings->unit_type }}</p>
        <p class="card-text">Barangay : {{ $listings->barangay }}</p>
        <p class="card-text">City : {{ $listings->city }}</p>
        <p class="card-text">Province : {{ $listings->province }}</p>
        <p class="card-text">Region : {{ $listings->region }}</p>
        <p class="card-text">Country Code : {{ $listings->country_code }}</p>      </div>
       
    </hr>
  
  </div>
</div>

@endsection