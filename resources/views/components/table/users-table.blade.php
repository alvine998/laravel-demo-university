<div class="overflow-x-auto bg-white shadow-md rounded-lg">
    <table class="min-w-full border-collapse border border-gray-300">
        <thead class="bg-gray-100">
            <tr>
                <th class="border border-gray-300 px-4 py-2">ID</th>
                <th class="border border-gray-300 px-4 py-2">Nama</th>
                <th class="border border-gray-300 px-4 py-2">Email</th>
                <th class="border border-gray-300 px-4 py-2">Peran</th>
                <th class="border border-gray-300 px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr class="border-b hover:bg-gray-50">
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $user->id }}</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $user->name }}</td>
                <td class="border border-gray-300 px-4 py-2 text-center">{{ $user->email }}</td>
                <td class="border border-gray-300 px-4 py-2 text-center uppercase">{{ str_replace("_", " ", $user->role) }}</td>
                <td class="border border-gray-300 px-4 py-2 text-center">
                    <a href="{{ route('users.edit', $user) }}" class="text-blue-500 hover:underline">Edit</a> |
                    <form action="{{ route('users.destroy', $user) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:underline" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-4">
        {{ $users->links() }}
    </div>
</div>