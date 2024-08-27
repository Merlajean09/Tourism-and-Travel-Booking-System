<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user = User::get();
        return view('user.index', compact('user')) ->with('i');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // User::create($request->all());
        // return view('user.index');
{
    // Validate the request data
    $request->validate([
        'name' => 'required|string|max:255',  // Name is required
        'email' => 'required|email',
        'role' => 'required',
    ]);
    // Create a new user
    $user = new User;
    $user->name = $request->name;
    $user->email = $request->email;
    $user->role = $request->role;
    $user->save();
    // Redirect back to the user list with a success message
    return redirect()->route('user.index')
        ->with('status', 'User created successfully');
}
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        return view('user.edit',compact('users'));
    }

    // Pass the $user variable to the view
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user):RedirectResponse
    {
        //
        $user->update($request->all());
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user): RedirectResponse
    {
        //
        $user->delete();
        return redirect()->route('user.index')->with('i');
    }
}