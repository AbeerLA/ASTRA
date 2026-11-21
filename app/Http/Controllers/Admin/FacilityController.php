<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Facility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FacilityController extends Controller
{
public function index()
{
    return redirect()->route('admin.dashboard');
}

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:150',
            'category' => 'nullable|string|max:100',
            'short_description' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'address' => 'nullable|string|max:255',
            'operating_hours' => 'nullable|string|max:255',
            'contact' => 'nullable|string|max:255',
            'sort_order' => 'nullable|integer|min:0',
            'is_active' => 'nullable|boolean',
        ]);

        if ($request->hasFile('image')) {
            $validated['image_path'] = $request->file('image')
                ->store('facilities', 'public');
        }

        unset($validated['image']);

        $validated['is_active'] = $request->boolean('is_active');

        Facility::create($validated);

        return redirect()
            ->route('admin.facilities.index')
            ->with('success', 'Facility created successfully.');
    }

    public function update(Request $request, Facility $facility)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:150',
            'category' => 'nullable|string|max:100',
            'short_description' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'address' => 'nullable|string|max:255',
            'operating_hours' => 'nullable|string|max:255',
            'contact' => 'nullable|string|max:255',
            'sort_order' => 'nullable|integer|min:0',
            'is_active' => 'nullable|boolean',
        ]);

        if ($request->hasFile('image')) {
            if ($facility->image_path) {
                Storage::disk('public')->delete($facility->image_path);
            }

            $validated['image_path'] = $request->file('image')
                ->store('facilities', 'public');
        }

        unset($validated['image']);

        $validated['is_active'] = $request->boolean('is_active');

        $facility->update($validated);

        return redirect()
            ->route('admin.facilities.index')
            ->with('success', 'Facility updated successfully.');
    }

    public function destroy(Facility $facility)
    {
        if ($facility->image_path) {
            Storage::disk('public')->delete($facility->image_path);
        }

        $facility->delete();

        return redirect()
            ->route('admin.facilities.index')
            ->with('success', 'Facility deleted successfully.');
    }
}