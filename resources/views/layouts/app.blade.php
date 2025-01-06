<div>
    <x-show class="card"></x-show>
    <x-show-layout>
        <x-slot name="title">
            {{ $card->title }}
        </x-slot>
        <x-slot name="description">
            {{ $card->description }}
        </x-slot>
        <x-slot name="footer">
            <a href="{{ route('card.edit', $card) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('card.destroy', $card) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </x-slot>
    </x-show-layout>
</div>