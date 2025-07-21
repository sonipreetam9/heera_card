<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        $comp=User::first();
        return view('software.profile',compact('comp'));
    }
}
