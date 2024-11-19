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
        'role' => 'required|string|max:255',
    ]);

    // Find the row by ID and update it
    $row = YourModel::find($id);
    if ($row) {
        $row->name = $validatedData['name'];
        $row->email = $validatedData['email'];
        $row->role = $validatedData['role'];
        $row->save();

        return response()->json(['success' => true, 'name' => $row->name, 'email' => $row->email, 'role' => $row->role]);
    }

    return response()->json(['success' => false, 'message' => 'Row not found.']);
}
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }

    public function showUsersByRole($role)
{
    $columns = ['id','name', 'email', 'created_at']; // Define columns to display
    $data = User::role($role)->get(); // Retrieve users with the specified role

    return view('admin.dashboard', compact('data', 'columns', 'role'));
}
}