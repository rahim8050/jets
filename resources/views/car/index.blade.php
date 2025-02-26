@extends('car.layout')
@section('content')
 @foreach ($users as $user) 
<div class="container">
    <div class="row">
        <div class="col-sm-6">  
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title
                    ">Name: {{$user['name']}}</h5>
                    <p class="card-text">Email: {{$user['email']}}</p>
                    <button class="btn btn-primary">Update</button>
                    <button class="btn btn-danger">Delete</button>
                    <button class="btn btn-success">View</button>
        </div>
    </div>
</div>
@endforeach



{{-- @foreach ($users as $user)
{{-- <p>{{$user['name']}} <button>update</button></p>
<p>{{$user['email']}} <button>update</button> </p> --}}
{{-- <table>
    <th>users in this organasation</th>
</table> --}} 
{{-- <p>{{$user['password']}}</p>
<p>{{$user['phone']}}</p>
<p>{{$user['address']}}</p>
<p>{{$user['city']}}</p>
<p>{{$user['state']}}</p>
<p>{{$user['zip']}}</p>
<p>{{$user['country']}}</p> --}}
    
{{-- @endforeach   --}}

@endsection
   