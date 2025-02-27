<x-bootstrapcss>
@foreach ($Students as $student)
    <p>{{$student->name}}</p>

@endforeach

<p class="text-success">this it the list of the student</p>

</x-bootstrapcss>