@extends('home')
@section('User')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    
    </style>
</head>
<body>

<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <h2>Edit Booking Form</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('booking.index') }}" enctype="multipart/form-data"> Back</a>
            </div>
        </div>
    </div>
   
    @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
    @endif
 
    <form action="{{ route('booking.update', $booking->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')


        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="name"><strong>Name:</strong></label>
                    <input type="text" name="user_name" value="{{ $user->name }}" class="form-control" placeholder="Enter Name">
                    @error('name')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
   
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="email"><strong>Email:</strong></label>
                    <input type="text" name="email" value="{{ $user->email }}" class="form-control" placeholder="Enter Email">
                    @error('email')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="password"><strong>Password:</strong></label>
                    <input type="text" name="password" value="{{ $user->password }}" class="form-control" placeholder="Enter Password">
                    @error('email')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

            
        <button type="submit" class="btn btn-primary ml-3">Submit</button>
          
    </form>
</div>
@endsection
</body>
</html>