<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AdminModel;
use App\Models\EmployeeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Str;
class SSAuthcontroller extends Controller
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

            return redirect()->route('super.login')->with('success-register', 'Successfully registered please Login!');

        } catch (\Exception $e) {
            return redirect()->route('super.register')->with('error', 'Registration failed: ' . $e->getMessage());
        }
    }


    public function all_candidates()
    {
        $candidates = EmployeeModel::all();
        return view('super_admin.all_candidate', compact('candidates'));
    }

    public function edit_branch($branch_code)
    {
        $branch = User::where('branch_code', $branch_code)->first();
        if (!$branch) {
            return redirect()->back()->with('error', 'Branch not found!');
        }
        return view('super_admin.edit_branch', compact('branch'));
    }

    public function edit_branch_post(Request $request, $branch_code)
    {
        $branch = User::where('branch_code', $branch_code)->first();
        if (!$branch) {
            return redirect()->back()->with('error', 'Branch not found!');
        }

        // Optional: Add validation if needed

        $branch->name = $request->name;
        $branch->email = $request->email;
        $branch->phone = $request->phone;
        $branch->city = $request->city;
        $branch->address = $request->address;

        // ✅ Update password only if new one is provided
        if ($request->filled('password')) {
            $branch->password = Hash::make($request->password);
            $branch->in_hash = base64_encode($request->password);
        }

        $branch->save();

        return redirect()->back()->with('success', 'Branch updated successfully!');
    }

    public function edit_employee($empTag)
    {
        $employee = EmployeeModel::where('tag_id', $empTag)->first();
        if (!$employee) {
            return redirect()->back()->with('error', 'Client not found!');
        }
        return view('super_admin.edit_employee', compact('employee'));
    }


    public function edit_employee_post(Request $request, $empTag)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|digits:10',
            'address' => 'required|string|max:500',
            'city' => 'required|string|max:100',
            'age' => 'required|integer|min:1|max:120',
            'sex' => 'required|in:Male,Female,Other',
            'dob' => 'required|date|before:today',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,webp|max:2048',
        ]);

        // Handle image file
        $imagePath = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $fileName = time() . rand(999, 9999) . '.' . $ext;
            $uploadDir = public_path('uploads');

            // Ensure the directory exists
            if (!file_exists($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            $file->move($uploadDir, $fileName);
            $imagePath = 'uploads/' . $fileName;
        }

        // Prepare update data
        $updateData = [
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'city' => $request->city,
            'dob' => $request->dob,
            'age' => $request->age,
            'sex' => $request->sex,
        ];

        // Add image only if uploaded
        if ($imagePath) {
            $updateData['image'] = $imagePath;
        }

        // Update employee
        EmployeeModel::where('tag_id', $empTag)->update($updateData);

        return redirect()->back()->with('success', 'Employee details updated successfully!');
    }

    public function delete_employee($empTag)
    {
        $employee = EmployeeModel::where('tag_id', $empTag)->first();
        $employee->delete();
        return redirect()->back()->with('success', 'Employee deleted successfully!');
    }

    public function super_employee_card_print($empTag)
    {
        $employee = EmployeeModel::where('tag_id', $empTag)->first();
        return view('super_admin.super_print_id_card', compact('employee'));
    }


    public function renew_card_index()
    {
        $renew_card = EmployeeModel::all();
        return view('super_admin.renew_card', compact('renew_card'));
    }


    public function super_liveSearch(Request $request)
    {
        $request->validate([
            'search' => 'required|string'
        ]);

        $search = $request->search;

        $employees = EmployeeModel::where('tag_id', 'LIKE', "%{$search}%")
            ->limit(10)
            ->get(['tag_id']); // Only get tag_id field

        if ($employees->isNotEmpty()) {
            return response()->json([
                'status' => true,
                'data' => $employees
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'No matching records found.'
            ]);
        }
    }


    public function show_employee_detail($empTag)
    {
        $employee = EmployeeModel::where('tag_id', $empTag)->first();
        $branch = User::where('id', $employee->branch_id)->first();
        if (!$employee) {
            return redirect()->back()->with('error', 'Client not found!');
        }
        return view('super_admin.show_employee_detail', compact('employee', 'branch'));

    }

    public function renew_card_post(Request $request, $empTag)
    {
        $employee = EmployeeModel::where('tag_id', $empTag)->first();

        if (!$employee) {
            return redirect()->back()->with('error', 'Employee not found!');
        }

        // Use existing expire_date, or today if it's null
        $currentExpireDate = $employee->expire_date ?? now();

        // Extend by one year
        $employee->expire_date = \Carbon\Carbon::parse($currentExpireDate)->addYear();
        $employee->save();

        return redirect()->back()->with('success', 'Card renewed successfully!');
    }

    public function today_employee()
    {
        $today = \Carbon\Carbon::today();
        $employees = EmployeeModel::whereDate('created_at', $today)->get();
        return view('super_admin.today_employee', compact('employees'));
    }


}
