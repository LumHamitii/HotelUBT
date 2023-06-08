<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function checkLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'role' => 'required|in:admin,manager',
        ]);

        $credentials = [
            'username' => $request->username,
            'password' => sha1($request->password),
        ];

        $role = $request->role;

        if ($role === 'admin') {
            $admin = Admin::where($credentials)->count();
            if ($admin > 0) {
                $adminData = Admin::where($credentials)->get();
                session(['adminData' => $adminData]);
                return redirect('admin');
            }
        } elseif ($role === 'manager') {
            // Add your logic for manager login here
            // Example:
            $manager = Manager::where($credentials)->count();

            if ($manager > 0) {
                $managerData = Manager::where($credentials)->get();
                session(['managerData' => $managerData]);
                return redirect('manager');
            }
        }

        return redirect()->back()->with('msg', 'Username or password is invalid');
    }

    public function logout()
    {
        session()->forget(['adminData', 'managerData']);
        return redirect('admin/login');
    }
}
