<?php

namespace App\Http\Controllers;

use App\Models\EmployeeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class DashboardController extends Controller
{
    public function dashboard()
    {

        $total_client = EmployeeModel::where('branch_id', Auth::user()->id)->count();
        $today_client = EmployeeModel::where('branch_id', Auth::user()->id)->whereDate('created_at', Carbon::today())->count();
        $total_fees = EmployeeModel::where('branch_id', Auth::user()->id)->sum('fees');
        $new_candidates = EmployeeModel::where('branch_id', Auth::user()->id)
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();

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

        return view('software.index', compact('greeting', 'total_client', 'today_client', 'total_fees', 'new_candidates'));

    }



}
