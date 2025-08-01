<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\EmployeeModel;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class SDashboardController extends Controller
{
    public function dashboard()
    {
        $total_branch = User::count();
        $total_employees = EmployeeModel::count();
        $candidates = EmployeeModel::orderBy('created_at', 'desc')->take(10)->get();
        $today_new_clients = EmployeeModel::whereDate('created_at', Carbon::today())->count();
        $total_fees = EmployeeModel::sum('fees');


        $hour = Carbon::now()->format('H');
        $greeting = 'Hello';

        if ($hour >= 5 && $hour < 12) {
            $greeting = 'Good Morning';
        } elseif ($hour >= 12 && $hour < 17) {
            $greeting = 'Good Afternoon';
        } elseif ($hour >= 17 && $hour < 21) {
            $greeting = 'Good Evening';
        } else {
            $greeting = 'Good Night';
        }
        return view('super_admin.index', compact('greeting', 'total_branch', 'total_employees', 'candidates', 'today_new_clients', 'total_fees'));
    }




}
