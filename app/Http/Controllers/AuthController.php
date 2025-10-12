<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    // Show login page
    public function showLoginForm()
    {
        return view('authorized.login'); // Blade file in views/authorized/login.blade.php
    }

    // Handle login
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $username = trim($request->username);
        $password = trim($request->password);

        // Check admin
        $admin = DB::table('admin')->where('admin_user', $username)->first();
        if ($admin && Hash::check($password, $admin->admin_password)) {
            // Store session
            Session::put('user_id', $admin->admin_id);
            Session::put('user_role', 'admin');
            Session::put('username', $admin->admin_user);
            return redirect()->route('admin.dashboard');
        }

        // Check staff
        $staff = DB::table('staff')->where('staff_user', $username)->first();
        if ($staff && Hash::check($password, $staff->staff_password)) {
            // Store session
            Session::put('user_id', $staff->staff_id);
            Session::put('user_role', 'staff');
            Session::put('username', $staff->staff_user);
            return redirect()->route('staff.dashboard');
        }

        return back()->withErrors(['username' => 'Invalid username or password'])->withInput();
    }

    // Dashboard page
    public function dashboard()
    {
        if (!Session::has('user_id')) {
            return redirect()->route('login.form');
        }

        if (Session::get('user_role') === 'admin') {
            return redirect()->route('admin.dashboard');
        } elseif (Session::get('user_role') === 'staff') {
            return redirect()->route('staff.dashboard');
        }

        return redirect()->route('login.form');
    }

    public function logout(Request $request)
    {
        Session::flush(); // clears all session data
        return redirect()->route('login.form'); // redirect to login page
    }
}
