<x-app-layout>
    <div class="container">
        <div class="flex justify-center">
            <h1 class="text-2xl text-center m-4">Usuarios</h1>
        </div>
        <div class="flex justify-center items-center m-4">
            <a href="{{ route('users.create') }}" class="flex items-center bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded-md">
                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                Agregar usuario
            </a>
        </div>
        <div class="flex justify-center">
            <div class="flex justify-center">
                <div class="w-2/3">
                    <table class="min-w-full shadow-lg bg-white">
                        <thead>
                            <tr>
                                <th class="bg-indigo-500 text-white text-left py-2 px-4">Email</th>
                                <th class="bg-indigo-500 text-white text-left py-2 px-4">Nombre</th>
                                <th class="bg-indigo-500 text-white text-left py-2 px-4">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td class="bg-gray-200 py-2 px-4">{{ $user->email }}</td>
                                <td class="bg-gray-200 py-2 px-4">{{ $user->name }}</td>
                                <td class="bg-gray-200 py-2 px-4">
                                    @if ($user->id != auth()->user()->id)
                                    <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <div class="d-flex">
                                            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-md mx-1">
                                                Eliminar
                                            </button>

                                        </div>
                                    </form>
                                    @endif
                                    <a href="{{ route('users.edit', $user->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded mx-1">
                                        Editar
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>

        </div>


    </div>

    <!-- Agrega enlaces a los scripts de Bootstrap si es necesario -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0SQygK0xdyI5giv" crossorigin="anonymous"></script>
</x-app-layout>