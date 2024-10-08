@extends('home')
@section('User')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>

<div class="container mt-2">

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Users</h2>
            </div>

            <!-- <a href="{{route('user.create')}}">Add User</a> -->
        </div>
        <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{route('user.create')}}">Add User</a>
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
            <th>Email</th>
            <th>Role</th>
        </tr>
        
        <tr>
            @foreach($user as $users)
            <td>{{$users->id}}</td>
            <td>{{$users->name}}</td>
            <td>{{$users->email}}</td>
            <td>{{$users->role}}</td>
            <td>
                <form action="{{route('user.destroy', $users->id)}}" method="POST">
    
                    <a class="btn btn-primary" href="{{route('user.edit', $users->id)}}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                    <select name="roles" id="roles">
                        <option value="admin">Admin</option>
                        <option value="customer">Customer</option>
                        </optgroup>
                    </select>
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