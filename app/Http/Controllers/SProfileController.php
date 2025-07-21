<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class SProfileController extends Controller
{
    public function profile()
    {
        $comp=User::first();
        return view('super_admin.profile',compact('comp'));
    }
}
