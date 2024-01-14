<div>
    <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com -->
    <div wire:poll.keep-alive.10s class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full text-left text-sm font-light">
                        <thead class="border-b bg-white font-medium dark:border-neutral-500 dark:bg-neutral-600">
                            <tr>
                                <th scope="col" class="px-6 py-4">#</th>
                                <th scope="col" class="px-6 py-4">Name</th>
                                <th scope="col" class="px-6 py-4">Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr class="border-b bg-neutral-100 dark:border-neutral-500 dark:bg-neutral-700">
                                    <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $user->id }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $user->name }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $user->email }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="my-2">
                        <!-- Pagination goes here -->
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
