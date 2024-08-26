@extends('home')
@section('User')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    
    </style>
</head>
<body>

<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <h2>Edit User Form</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('user.index') }}" enctype="multipart/form-data"> Back</a>
            </div>
        </div>
    </div>
   
    @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
    @endif
    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $user->name }}">
        <input type="email" name="email" value="{{ $user->email }}">
        <label for="role">Role:
            <select name="role" id="role">
                <option value="admin">Admin</option>
                <option value="customer">Customer</option>
                <option value="agent">Agent</option>
                <option value="partner">Partner</option>
                </optgroup>
            </select>
        </label>
    </form>
        <button type="submit" class="pull-right btn btn-success">Update</button>

</form>
</div>
</body>
</html>
@endsection