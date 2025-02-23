@foreach ($users as $user)
    <p>This is user {{ $user->id }}</p>
    <p>This is user {{ $user->name }}</p>
    
@endforeach
{{$users->links()}}
