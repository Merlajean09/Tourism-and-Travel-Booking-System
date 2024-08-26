@extends('home')
@section('Destination')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Destination</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>

<div class="container mt-2">

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Destinations</h2>
            </div>
        </div>
        <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{route('destination.create')}}">Your Destination </a>
            </div>
    </div> 
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>name</th>
            <th>Description</th>
            <th>Location</th>
        </tr>
        
        <tr>
            @foreach($destination as $destinations)
            <td>{{$destinations->id}}</td>
            <td>{{$destinations->name}}</td>
            <td>{{$destinations->description}}</td>
            <td>{{$destinations->location}}</td>
            <td>
                <form action="{{route('destination.destroy', $destinations->id)}}" method="POST">
    
                    <a class="btn btn-primary" href="{{route('destination.edit', $destinations->id)}}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('home') }}" enctype="multipart/form-data"> Back</a>
            </div>
</body>
</html>
@endsection