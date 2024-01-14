<div class="mt-5">
    @if (session('message'))
        <span class="text-green-500 text-xs">{{ session('message') }}</span>
    @endif
    <form wire:submit.prevent="create" class="w-full max-w-lg">
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-name">
                    Name
                </label>
                <input wire:model="name"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    id="grid-first-name" type="text" placeholder="Name">
                @error('name')
                    <p class="text-red-500 text-xs italic">{{ $message }}.</p>
                @enderror
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-email">
                    Email
                </label>
                <input wire:model="email"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-last-name" type="text" placeholder="Email">

                @error('email')
                    <p class="text-red-500 text-xs italic">{{ $message }}.</p>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                    Password
                </label>
                <input wire:model="password"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-password" type="password" placeholder="******************">

                @error('password')
                    <p class="text-red-500 text-xs italic">{{ $message }}.</p>
                @enderror
            </div>
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-file">
                    Profile Picture
                </label>
                <input wire:model="image"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-file" type="file" accept="image/png, image/jpeg">

                @error('image')
                    <p class="text-red-500 text-xs italic">{{ $message }}.</p>
                @enderror

                @if ($image)
                    <img class="rounded w-10 h-10 mt-5 block" src="{{ $image->temporaryUrl() }}" alt="">
                @endif
                {{-- 
                <div wire:loading wire:target="image">
                    <span class="text-green-500">Uploading ...</span>
                </div> --}}

                <div wire:loading.delay.longest>
                    <span class="text-green-500">Sending ...</span>
                </div>
            </div>
        </div>
        <button wire:loading.class="bg-teal-500" wire:loading.attr="disabled" type="submit"
            class="px-4 py-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600">Create
            +</button>
    </form>
</div>
