<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TourismDestination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TourismDestinationController extends Controller
{
    public function index()
    {
        $destinations = TourismDestination::orderBy('sort_order')->get();

        return view('admin.tourism-destinations.index', compact('destinations'));
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
            'maps_url' => 'nullable|url|max:255',
            'opening_hours' => 'nullable|string|max:255',
            'entrance_fee' => 'nullable|numeric|min:0',
            'sort_order' => 'nullable|integer|min:0',
            'is_active' => 'nullable|boolean',
        ]);

        if ($request->hasFile('image')) {
            $validated['cover_image'] = $request->file('image')
                ->store('tourism-destinations', 'public');
        }

        unset($validated['image']);

        $validated['is_active'] = $request->boolean('is_active');

        TourismDestination::create($validated);

        return redirect()
            ->route('admin.tourism-destinations.index')
            ->with('success', 'Tourism destination created successfully.');
    }

    public function update(Request $request, TourismDestination $tourismDestination)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:150',
            'category' => 'nullable|string|max:100',
            'short_description' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'address' => 'nullable|string|max:255',
            'maps_url' => 'nullable|url|max:255',
            'opening_hours' => 'nullable|string|max:255',
            'entrance_fee' => 'nullable|numeric|min:0',
            'sort_order' => 'nullable|integer|min:0',
            'is_active' => 'nullable|boolean',
        ]);

        if ($request->hasFile('image')) {
            if ($tourismDestination->cover_image) {
                Storage::disk('public')->delete($tourismDestination->cover_image);
            }

            $validated['cover_image'] = $request->file('image')
                ->store('tourism-destinations', 'public');
        }

        unset($validated['image']);

        $validated['is_active'] = $request->boolean('is_active');

        $tourismDestination->update($validated);

        return redirect()
            ->route('admin.tourism-destinations.index')
            ->with('success', 'Tourism destination updated successfully.');
    }

    public function destroy(TourismDestination $tourismDestination)
    {
        if ($tourismDestination->cover_image) {
            Storage::disk('public')->delete($tourismDestination->cover_image);
        }

        $tourismDestination->delete();

        return redirect()
            ->route('admin.tourism-destinations.index')
            ->with('success', 'Tourism destination deleted successfully.');
    }
}