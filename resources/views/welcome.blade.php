<x-guest-layout>

<div class="container">
    <div class="flex justify-center">
        <div class="w-3/4">
            <div class="bg-white border rounded-lg p-8">
                <div class="text-xl font-semibold mb-4">Bienvenido</div>

                <div class="text-gray-600">
                    <p>Inica sesión, sino tienes cuenta elige register</p>
                </div>

                <div class="mt-6">
                    <a href="{{ route('login') }}" class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded-md mr-4">
                        Log in
                    </a>

                    <a href="{{ route('register') }}" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded-md">
                        Register
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


</x-guest-layout>
    