<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeModel;
use App\Models\SettingModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class EmployeeController extends Controller
{
    public function add_employee()
    {
        $card_fee = SettingModel::where('name', 'card_fee')->first();
        return view('software.add_employee', compact('card_fee'));
    }
    public function employee_list()
    {
        $employees = EmployeeModel::where('branch_id', Auth::user()->id)
            ->orderBy('id', 'desc')
            ->get();

        return view('software.all_employee', compact('employees'));
    }

    public function add_employee_post(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|digits:10',
            'address' => 'required|string|max:500',
            'city' => 'required|string|max:100',
            'age' => 'required|integer|min:1|max:120',
            'fees' => 'required|string|max:100',
            'sex' => 'required|in:Male,Female,Other',
            'dob' => 'required|date|before:today',
            'image' => 'required|image|mimes:jpeg,jpg,png,webp|max:2048',
        ]);
        $card_fee = SettingModel::where('name', 'card_fee')->first();
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
        // Set join date and expire date
        $join_date = Carbon::today()->format('Y-m-d');
        $expire_date = Carbon::parse($join_date)->addYear()->format('Y-m-d');

        // Generate tag_id like: 21072025XXXX (first 4 digits of phone)
        $tag_id = Carbon::today()->format('dmY') . substr($request->phone, 0, 2) . strtoupper(Str::random(2));

        // Set branch id from logged-in user
        $branch_id = Auth::user()->id;

        // Insert into DB
        EmployeeModel::create([
            'branch_id' => $branch_id,
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'city' => $request->city,
            'tag_id' => $tag_id,
            'dob' => $request->dob,
            'join_date' => $join_date,
            'expire_date' => $expire_date,
            'fees' => $card_fee->value,
            'age' => $request->age,
            'sex' => $request->sex,
            'image' => $imagePath,
        ]);


        return redirect()->back()->with('success', 'Employee registered successfully!');
    }



    public function employee_card_print($empTag)
    {
        $employee = EmployeeModel::where('tag_id', $empTag)->first();
        return view('software.print_id_card', compact('employee'));
    }


   

}
