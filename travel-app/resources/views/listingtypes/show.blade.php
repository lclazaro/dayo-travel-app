@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Listing Type Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Unit Type : {{ $listingtypes->unit_type }}</h5>
        <p class="card-text">Unit Term : {{ $listingtypes->unit_term }}</p>
  </div>
       
    </hr>
  
  </div>
</div>

@endsection