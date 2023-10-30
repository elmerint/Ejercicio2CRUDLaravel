<x-app-layout>
    <div class="flex justify-center items-center h-screen">
        <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-md">
            <h1 class="text-2xl font-bold mb-4">Crear usuario</h1>

            <form action="{{ route('users.store') }}" method="post">
                @csrf

                <div class="mb-4">
                    <label for="name" class="block text-gray-600">Nombre</label>
                    <input type="text" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-indigo-500" id="name" name="name" value="{{ old('name') }}">
                    @error('name')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-600">Correo electrónico</label>
                    <input type="email" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-indigo-500" id="email" name="email" value="{{ old('email') }}">
                    @error('email')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-gray-600">Contraseña</label>
                    <input type="password" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-indigo-500" id="password" name="password">
                    @error('password')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="block text-gray-600">Confirmar contraseña</label>
                    <input type="password" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-indigo-500" id="password_confirmation" name="password_confirmation">
                </div>

                <button type="submit" class="w-full bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded focus:outline-none">Crear</button>
            </form>
        </div>
    </div>
</x-app-layout>