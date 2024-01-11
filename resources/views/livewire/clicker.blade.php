<div>
    {{-- In work, do what you enjoy. --}}

    {{-- <h1>{{ $title_hello }}</h1>

    <h1> {{ $title }} </h1>
    <p> {{ count($users) }} </p>

    <button wire:click="createNewUser">
        Create New User
    </button> --}}

    <form wire:submit="createNewUser" action="">
        <input wire:model="name" type="text" placeholder="name">
        <input wire:model="email" type="email" placeholder="email">
        <input wire:model="password" type="password" placeholder="password">

        {{-- <button wire:click.prevent="createNewUser">Create</button> <!-- Another Way --> --}}
        <button>Create</button> <!-- Another Way -->
    </form>

    <hr>

    @foreach ($users as $user)
        <h3>{{ $user->name }}</h3>
        <p>{{ $user->email }}</p>
        <p>{{ $user->password }}</p>
    @endforeach
</div>
