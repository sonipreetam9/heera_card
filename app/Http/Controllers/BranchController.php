<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\EmployeeModel;
use Illuminate\Http\Request;
use App\Models\User;
class BranchController extends Controller
{
    public function branch_list()
    {
        $branches = User::orderBy('id', 'DESC')->get();

        return view('super_admin.all_branch', compact('branches'));
    }

    public function branch_list_candidate($branch_code)
    {
        $branch = User::where('branch_code', $branch_code)->first();

        if (!$branch) {
            return redirect()->back()->with('error', 'Branch not found');
        }

        $candidates = EmployeeModel::where('branch_id', $branch->id)
            ->orderBy('id', 'DESC')
            ->get();

        return view('super_admin.branch_candidate_list', compact('candidates', 'branch'));
    }

    public function delete_branch($branch_code)
    {
        $branch = User::where('branch_code', $branch_code)->first();

        if (!$branch) {
            return redirect()->back()->with('error', 'Branch not found');
        }

        $branch->delete();

        return redirect()->back()->with('success', 'Branch deleted successfully');
    }

}
