<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserListController extends Controller
{
    /**
     * Display user list
     */
    public function index()
    {
        $users = User::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.userlist.index', compact('users'));
    }

    /**
     * Show create form
     */
    public function create()
    {
        return view('admin.userlist.create');
    }

    /**
     * Store new user
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'status'   => 'required|boolean',
        ]);

        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => bcrypt($request->password),
            'status'   => $request->status,
        ]);

        return redirect()
            ->route('admin.userlist.index')
            ->with('success', 'User created successfully');
    }

    /**
     * Show edit form
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.userlist.edit', compact('user'));
    }

    /**
     * Update user
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name'   => 'required|string|max:255',
            'email'  => 'required|email|unique:users,email,' . $user->id,
            'status' => 'required|boolean',
        ]);

        $user->update([
            'name'   => $request->name,
            'email'  => $request->email,
            'status' => $request->status,
        ]);

        return redirect()
            ->route('admin.userlist.index')
            ->with('success', 'User updated successfully');
    }

    /**
     * Delete user
     */
    public function destroy($id)
    {
        User::findOrFail($id)->delete();

        return redirect()
            ->route('admin.userlist.index')
            ->with('success', 'User deleted successfully');
    }

    /**
     * Toggle user status (AJAX)
     */
    public function changeStatus(Request $request)
    {
        $user = User::findOrFail($request->id);
        $user->status = !$user->status;
        $user->save();

        return response()->json([
            'success' => true,
            'status'  => $user->status
        ]);
    }
}
