<?php

namespace App\Http\Controllers;
use App\Models\SettingModel;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function edit_setting_index()
    {
        $setting = SettingModel::first();
        return view('super_admin.edit_setting', compact('setting'));
    }

    public function edit_setting_post(Request $request)
    {
        $request->validate([
            'value' => 'string',
        ]);

        try {
            $setting = SettingModel::first();
            $setting->value = $request->value;
            $setting->save();

            return redirect()->back()->with('success', 'Setting updated successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Update failed: ' . $e->getMessage());
        }
    }
}
