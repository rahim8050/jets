<x-bootstrapcss>
    <div class="container">
    <div class="row">
      
@foreach ($Students as $student)
    
<div class="col-sm-6">
   
<div class="card shadow-sm mb-4">
    {{-- <img src="https://placehold.co/600x400" class="card-img-top" alt="Sample Image"> --}}
    <div class="card-body">
        <h5 class="card-title text-primary">students Details</h5>
        <p class="card-text text-muted">
            {{$student->name}}
        </p>
        <p class="card-text text-muted">
            {{$student->email}}
        </p>
        <p class="card-text text-muted">
            {{$student->phone}}     
        </p>
        <p class="card-text text-muted">
            {{$student->address}}
        </p>
        <p class="card-text text-muted">
            {{$student->course}}
        </p>
        
        <p class="card-text text-muted">
            {{$student->created_at}}
        </p>
        <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
                <button type="button" class="btn  btn-primary">Edit</button>
              
            </div>
            <div class="btn-group">
              
                <button type="button" class="btn  btn-outline-secondary">View Details</button>
            </div>
            <div class="btn-group">
              
                <button type="button" class="btn  btn-outline-secondary">View Details</button>
            </div>
            <small class="text-body-secondary">class of 2025</small>
        </div>
    </div>
</div>
</div>




{{-- <p class="text-success">this it the list of the student</p> --}}
@endforeach
</div>

</x-bootstrapcss>