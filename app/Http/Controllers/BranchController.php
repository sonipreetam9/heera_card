<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class BranchController extends Controller
{
    public function branch_list()
    {
        $branches = User::orderBy('id','DESC')->get();

        return view('super_admin.all_branch',compact('branches'));
    }
}
