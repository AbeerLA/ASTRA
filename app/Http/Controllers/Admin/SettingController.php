<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function index()
    {
        return redirect()->route('admin.dashboard');
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'header_logo' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp,svg', 'max:5120'],
            'footer_logo' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp,svg', 'max:5120'],
            'admin_logo' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp,svg', 'max:5120'],
        ]);

        foreach (['header_logo', 'footer_logo', 'admin_logo'] as $key) {
            if ($request->hasFile($key)) {
                $setting = Setting::firstOrNew(['key' => $key]);

                $oldImage = $setting->value;

                $setting->value = $request->file($key)
                    ->store('settings', 'public');

                $setting->save();

                if ($oldImage) {
                    Storage::disk('public')->delete($oldImage);
                }
            }
        }

        return redirect()
            ->route('admin.dashboard')
            ->with('success', 'Logos updated successfully.');
    }
}