<div>
    {{-- In work, do what you enjoy. --}}

    <h1>{{ $title_hello }}</h1>
    
    <h1> {{ $title }} </h1>
    <p> {{ count($users) }} </p>

    <button wire:click="createNewUser">
        Create New User
    </button>
</div>
