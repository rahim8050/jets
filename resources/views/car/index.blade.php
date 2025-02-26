@extends('car.layout')
@section('content')
 @foreach ($users as $user) 
<div class="container">
<div class="row">
    <div class="col-sm-4">
        <table class="table table-striped">
            <tr>
                <td>First Name</td>
                <td>{{$user['name']}}</td>
            </tr>
             <tr>
                 <td>LastName</td>
                <td>{{$user['email']}}</td>
            </tr> 
            
        </table>
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
   