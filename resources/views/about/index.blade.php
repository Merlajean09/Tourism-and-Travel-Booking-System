@extends('home')
@section('User')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>About</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{route('abouts.create')}}">Add Abouts</a>
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
            <th>Email</th>
            <th width="280px">Action</th>
        </tr>
        
        <tr>
            @foreach($abouts as $abouts)
            <td>{{$abouts->id}}</td>
            <td>{{$abouts->email}}</td>
            <td>
                <form action="{{route('abouts.destroy', $abouts->id)}}" method="POST">
    
                    <a class="btn btn-primary" href="{{route('abouts.edit', $abouts->id)}}">Edit</a>
   
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


@endsection