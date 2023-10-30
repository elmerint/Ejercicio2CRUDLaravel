<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 flex justify-center items center text-xl">
                    {{ __("Bienvenido!") }}
                </div>
                    <div class="flex justify-center items-center m-3">
                        <a href="{{ route('users.index') }}" class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded-md text-center flex items-center">
                            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M9 19l3 3m0 0l3-3m-3 3V10m0 11a9 9 0 110-18 9 9 0 010 18z"></path>
                            </svg>
                            Administrar Usuarios
                        </a>
                    </div>
            </div>
            
        </div>

</x-app-layout>