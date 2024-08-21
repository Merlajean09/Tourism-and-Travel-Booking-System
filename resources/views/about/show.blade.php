@extends('abouts.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Abouts Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $abouts->name }}</h5>
        <p class="card-text">Address : {{ $abouts->address }}</p>
        <p class="card-text">Description : {{ $abouts->description }}</p>
  </div>
       
    </hr>
  
  </div>
</div>