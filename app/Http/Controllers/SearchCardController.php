<?php

namespace App\Http\Controllers;

use App\Models\EmployeeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SearchCardController extends Controller
{

    public function index()
    {
        return view('software.card_search');
    }

    public function liveSearch(Request $request)
    {
        $request->validate([
            'search' => 'required|string'
        ]);

        $search = $request->search;


        $employees = EmployeeModel::where('branch_id', Auth::id())
            ->where('tag_id', 'LIKE', "%{$search}%")
            ->limit(10)
            ->get();

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


}
