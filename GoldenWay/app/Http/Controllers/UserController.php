<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    // public function update(Request $request, User $user)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email',
    //     ]);

    //     $user->update($request->all());
    //     return redirect()->route('users.index')->with('success', 'User updated successfully.');
    // }

    public function update(Request $request, User $user)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        
    ]);

    $user->update($validatedData);

    return response()->json([
        'success' => true,
        'name' => $user->name,
        'email' => $user->email,
        
    ]);
}

    
    // public function destroy(User $user)
    // {
    //     if (!$user) {
    //         return redirect()->route('users.index')->with('error', 'User not found.');
    //     }
    
    //     $user->delete();
    //     return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    // }
   
    public function destroy($id)
    {
        // Find the user by ID
        $user = User::find($id);
    
        if (!$user) {
            return response()->json(['success' => false, 'message' => 'User not found'], 404);
        }
    
        try {
            $user->delete(); // Delete the user from the database
            return response()->json(['success' => true, 'message' => 'User deleted successfully']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Failed to delete user']);
        }
    }
    

    public function showUsersByRole($role)
{
    $columns = ['id','name', 'email', 'created_at']; // Define columns to display
    $data = User::role($role)->get(); // Retrieve users with the specified role

    return view('admin.dashboard', compact('data', 'columns', 'role'));
}
}


