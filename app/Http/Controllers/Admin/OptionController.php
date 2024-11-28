<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Option;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    /**
     * Display the settings form.
     */
    public function index()
    {
        // Retrieve all options
        $settings = Option::pluck('value', 'key')->toArray();

        return view('dashboard.settings.index', compact('settings'));
    }

    /**
     * Update the settings.
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            'logo' => 'nullable|image|max:2048',
            'favicon' => 'nullable|image|max:1024',
            'site_name' => 'required|string|max:255',
            'description' => 'nullable|string|max:500',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'google_analytics' => 'nullable|string|max:5000',
            'site_status' => 'required|in:active,maintenance',
            'allow_registration' => 'required|boolean',
            'custom_header' => 'nullable|string',
            'custom_footer' => 'nullable|string',
        ]);

        // Handle file uploads
        if ($request->hasFile('logo')) {
            $validated['logo'] = $request->file('logo')->store('settings', 'public');
        }

        if ($request->hasFile('favicon')) {
            $validated['favicon'] = $request->file('favicon')->store('settings', 'public');
        }

        // Save settings to the database
        foreach ($validated as $key => $value) {
            Option::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        return redirect()->route('settings.index')->with('success', 'Settings updated successfully.');
    }
}
