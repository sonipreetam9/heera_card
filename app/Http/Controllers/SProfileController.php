<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AdminModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class SProfileController extends Controller
{
    public function profile()
    {
        $comp = AdminModel::first();
        return view('super_admin.profile', compact('comp'));
    }

    public function edit_profile($empTag)
    {
        $profile = AdminModel::where('id', $empTag)->firstOrFail();
        return view('super_admin.edit_profile', compact('profile'));
    }

    public function edit_profile_post(Request $request, $empTag)
    {
        // Validate email and password with confirmation and regex
        $request->validate([
            'email' => 'required|email',
            'password' => [
                'required',
                'string',
                'regex:/^[a-zA-Z0-9@.]+$/',
            ],
        ], [
            'password.regex' => 'Password can only contain letters, numbers, @, and .',
            'email.required' => 'Email is required.',
            'email.email' => 'Please enter a valid email address.',
        ]);

        try {
            $profile = AdminModel::findOrFail($empTag);
            $profile->email = $request->email;
            $profile->password = Hash::make($request->password); // Hash password
            $profile->in_hash = base64_encode($request->password); // Optional: for viewing
            $profile->save();



            Auth::guard('admin')->logout();



            return redirect()->route('super.login')->with('success', 'Profile updated successfully!');
        } catch (\Exception $e) {
            return redirect()->route('super.edit.profile', $empTag)->with('error', 'Update failed: ' . $e->getMessage());
        }
    }


}
