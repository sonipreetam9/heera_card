<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
class DashboardController extends Controller
{
    public function dashboard()
    {
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

        return view('software.index',compact('greeting'));

    }
}
