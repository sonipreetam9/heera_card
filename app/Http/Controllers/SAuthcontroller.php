<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AdminModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Str;
class SAuthcontroller extends Controller
{
     public function login_page()
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->route('super.dashboard');
        }
        return view('super_admin.auth.login');
    }
    public function register_page()
    {

        if (Auth::guard('admin')->check()) {
            return redirect()->route('super.dashboard');
        }
        return view('super_admin.auth.register');
    }
    public function check_login(Request $request)
    {
        // Validate input
        $request->validate([
            'email' => 'required|email',
            'password' => ['required', 'string', 'regex:/^[a-zA-Z0-9]+$/'],
        ], [
            'password.regex' => 'Password must contain only letters and numbers.'
        ]);



        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {


            return redirect()->route('super.dashboard')->with('success', 'Logged in successfully!');
        }

        return redirect()->back()->with('error', 'Invalid login credentials!');
    }


    public function logout(Request $request)
    {




        
        Auth::guard('admin')->logout();



        return redirect()->route('super.login')->with('success', 'सफलतापूर्वक लॉगआउट किया गया!');
    }

    public function register_post(Request $request)
    {
        // Validate user input (Only letters and numbers allowed in password)


        $request->validate([

            'email' => 'required|email',

            'password' => [
                'required',
                'string',
                'confirmed',
                'regex:/^[a-zA-Z0-9@.]+$/'
            ],
        ], [

            'password.regex' => 'Password can only contain letters, numbers, @, and .',
            'password.confirmed' => 'Password confirmation does not match.',

            'email.required' => 'Email is required.',
            'email.email' => 'Please enter a valid email address.',
        ]);
        // dd($request->all());

        try {
            AdminModel::create([
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'in_hash' => base64_encode($request->password),
            ]);

            return redirect()->route('super.login')->with('success-register', 'Successfully registered plese Login!');

        } catch (\Exception $e) {
            return redirect()->route('super.register')->with('error', 'Registration failed: ' . $e->getMessage());
        }
    }
}
