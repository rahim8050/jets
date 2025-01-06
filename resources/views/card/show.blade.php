<div>
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->
    <div class="card">
        <div class="card-header">
            <h2>{{ $card->title }}</h2>
        </div>
        <div class="card-body">
            <p>{{ $card->description }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('card.edit', $card) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('card.destroy', $card) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</div>