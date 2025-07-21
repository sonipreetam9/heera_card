<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Str;

class AuthController extends Controller
{
    public function login_page()
    {
        if (Auth::check()) {
            return redirect()->route('home.page');
        }
        return view('software.auth.login');
    }
    public function register_page()
    {
        return view('super_admin.add_branch');
    }
    public function check_login(Request $request)
    {
        // dd($request->all());
        // Validate input
        $request->validate([
            'branch_code' => 'required',
            'password' => ['required', 'string', 'regex:/^[a-zA-Z0-9]+$/'],
        ], [
            'password.regex' => 'Password must contain only letters and numbers.'
        ]);

        if (Auth::attempt(['branch_code' => $request->branch_code, 'password' => $request->password])) {
            return redirect()->route('dashboard')->with('success', 'Logged in successfully!');
        }

        return redirect()->back()->with('error', 'Invalid login credentials!');
    }


    public function logout(Request $request)
    {
        $user = Auth::user();



        Auth::logout();



        return redirect()->route('login')->with('success', 'सफलतापूर्वक लॉगआउट किया गया!');
    }

    public function register_post(Request $request)
    {
        // ✅ Validation
        $request->validate([
            'name' => ['required', 'regex:/^[a-zA-Z0-9\s]+$/'],
            'email' => 'required|email|',
            'phone' => 'required|numeric|digits:10',
            'city' => ['required', 'regex:/^[a-zA-Z\s]+$/'],
            'address' => 'required|string|min:5',
            'password' => [
                'required',
                'string',
                'min:6',
                'confirmed',
                'regex:/^[a-zA-Z0-9@.]+$/'
            ],
        ], [
            'name.required' => 'Branch name is required.',
            'name.regex' => 'Name can only contain letters, numbers, and spaces.',
            'email.required' => 'Email is required.',
            'email.email' => 'Enter a valid email address.',
            'phone.required' => 'Phone number is required.',
            'phone.numeric' => 'Phone must be numeric.',
            'phone.digits' => 'Phone must be exactly 10 digits.',
            'city.required' => 'City is required.',
            'city.regex' => 'City can only contain letters and spaces.',
            'address.required' => 'Address is required.',
            'address.min' => 'Address should be at least 5 characters.',
            'password.required' => 'Password is required.',
            'password.min' => 'Password must be at least 6 characters.',
            'password.regex' => 'Password can only contain letters, numbers, @, and .',
            'password.confirmed' => 'Passwords do not match.',
        ]);

        // ✅ Check if branch already exists
        $branch = User::where('email', $request->email)->first();
        if ($branch) {
            return redirect()->back()->with('error', 'Branch already exists!');
        }

        $emailUsername = explode('@', $request->email)[0];
        $branch_code = strtoupper(
                substr($request->name, 0, 4) .
                substr($emailUsername, 0, 4) .
                substr($request->city, 0, 4).
                substr($request->phone, 0, 4),
        );


        // ✅ Create user
        try {
            User::create([
                'branch_code' => $branch_code,
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'city' => $request->city,
                'address' => $request->address,
                'password' => Hash::make($request->password),
                'in_hash' => base64_encode($request->password),
            ]);

            return redirect()->back()->with('success', 'Branch registered successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }
    }
}
