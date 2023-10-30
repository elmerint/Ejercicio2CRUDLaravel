<x-app-layout>
    <div class="flex justify-center items-center h-screen">
        <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-md">
            <h1 class="text-2xl font-bold mb-4">Editar usuario</h1>

            <form action="{{ route('users.update', $user->id) }}" method="post">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="name" class="block text-gray-600 mb-2">Nombre</label>
                    <input type="text" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-indigo-500" id="name" name="name" value="{{ $user->name }}">
                    @error('name')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-600 mb-2">Correo electrónico</label>
                    <input type="email" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-indigo-500" id="email" name="email" value="{{ $user->email }}">
                    @error('email')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="w-full bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded focus:outline-none">Actualizar</button>
            </form>
        </div>
    </div>
</x-app-layout>