@extends('home')
@section('User')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>

<div class="container mt-2">

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Bookings</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{route('booking.create')}}">Add Booking</a>
            </div>
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
            <th>Name</th>
            <th>Dates</th>
            <th width="280px">Action</th>
        </tr>
        
        <tr>
            @foreach($bookings as $bookings)
            <td>{{$bookings->id}}</td>
            <td>{{$bookings->name}}</td>
            <td>{{$bookings->dates}}</td>
            <td>
                <form action="{{route('booking.destroy', $bookings->id)}}" method="POST">
    
                    <a class="btn btn-primary" href="{{route('booking.edit', $bookings->id)}}">Edit</a>
   
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