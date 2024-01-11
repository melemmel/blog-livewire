<div>
    {{-- In work, do what you enjoy. --}}

    {{-- <h1>{{ $title_hello }}</h1>

    <h1> {{ $title }} </h1>
    <p> {{ count($users) }} </p>

    <button wire:click="createNewUser">
        Create New User
    </button> --}}
    <div class="flex flex-col justify-center items-center mt-8">
        @if (session('message'))
            <div class="bg-green-500 text-white rounded-md p-4 shadow-md animate__animated animate__fadeIn">
                {{ session('message') }}
            </div>
        @endif
    </div>
    

    <div class="flex flex-col justify-center items-center mt-8">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-96" wire:submit.prevent="createNewUser"
            action="">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Name
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="name" type="text" placeholder="John Doe" wire:model="name">

                @error('name')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Email
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="email" type="email" placeholder="john@example.com" wire:model="email">

                @error('email')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Password
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="password" type="password" placeholder="********" wire:model="password">

                @error('password')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex items-center justify-between">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Create
                </button>
            </div>
        </form>
    </div>


    <hr class="mt-3">

    <div class="container mx-auto p-4">
        <div class="overflow-x-auto">
            <table class="table-auto min-w-full border border-collapse border-gray-300">
                <thead>
                    <tr>
                        <th class="px-4 py-2 bg-gray-800 text-white">Name</th>
                        <th class="px-4 py-2 bg-gray-800 text-white">Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">{{ $user->name }}</td>
                            <td class="border px-4 py-2">{{ $user->email }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{ $users->links() }}

</div>
