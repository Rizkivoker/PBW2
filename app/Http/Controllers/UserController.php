<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view("user.daftarPengguna", compact("users"));
        // return view("user.daftarPengguna", ['user_uhuy' => $users]); (array)
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ("user.registrasi");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => ['required', 'string', 'max:100'],
            'fullname' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'address' => ['required', 'string', 'max:1000'],
            'birthdate' => ['required', 'date'],
            'phoneNumber' => ['required', 'string', 'max:20'],
            'Agama' => ['required', 'string', 'max:20' ],
            'Jenis_Kelamin' => ['required', 'numeric', 'max:4']
        ]);

        $user = User::create([
            'username' => $request->username,
            'fullname' => $request->fullname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'address' => $request->address,
            'birthdate' => $request->birthdate,
            'phoneNumber' => $request->phoneNumber,
            'Agama' => $request->Agama,
            'Jenis_Kelamin' => $request->Jenis_Kelamin //Muhammad Rizki Anshari 6706223168
        ]);
        return redirect()->route("user.daftarPengguna");
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view("user.infoPengguna", compact("user"));
        
    }

    /**P
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

