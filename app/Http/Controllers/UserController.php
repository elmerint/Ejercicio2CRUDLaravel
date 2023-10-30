<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // Función para mostrar el formulario de registro
    public function register()
    {
        return view('auth.register');
    }

    // Función para procesar el registro de un nuevo usuario
    public function store(Request $request)
    {
        // Validación de datos del formulario de registro
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Crear un nuevo usuario en la base de datos
        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        return redirect('/dashboard'); // Redirige al panel de control
    }

    // Función para mostrar el formulario de inicio de sesión
    public function login()
    {
        return view('auth.login');
    }

    // Función para procesar el inicio de sesión
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect('/dashboard'); // Redirige al panel de control o a donde desees
        }

        return back()->withErrors(['loginError' => 'Credenciales incorrectas']);
    }

    // Función para mostrar la lista de usuarios
    public function indexUsers()
    {
        $users = User::all();
        return view('users.index',compact('users'));
    }

    public function create()
    {
        if (auth()->user()) {
            return view('users.create');
        } else {
            return redirect()->route('login');
        }
    }


    // Función para eliminar un usuario 
    public function destroyUser(User $user)
    {
       
        if ($user->id === Auth::id()) {
            return back()->withErrors(['deleteError' => 'No puedes eliminarte a ti mismo.']);
        }

        $user->delete();

        return redirect('users')->with('success', 'Usuario eliminado con éxito.');
    }
    public function edit($id) {
        $user = User::findOrFail($id);
        // return $user;
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
{
    // Obtener el usuario
    $user = User::findOrFail($id);

    // Actualizar los datos del usuario
    $user->name = $request->input('name');
    $user->email = $request->input('email');

    // Guardar los cambios
    $user->save();

    // Redireccionar al usuario
    return redirect('users');
}
}

