@extends('car.layout')
@section('content')
 @foreach ($users as $user) 
<div class="container">
    <div class="row">
        <div class="col-sm-6">  
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Name: {{$user['name']}}</h5>
                    <p class="card-text">Email: {{$user['email']}}</p>
                    <button class="btn btn-primary">Update</button>
                    <form method="POST" action="{{ url ('destroy', $user['id']) }}" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <button class="btn btn-success">View</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
