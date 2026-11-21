<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TourismPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TourismPackageController extends Controller
{
    public function index()
    {
        $packages = TourismPackage::orderBy('sort_order')->get();

        return view('admin.tourism-packages.index', compact('packages'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:150',
            'category' => 'nullable|string|max:100',
            'short_description' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'itinerary' => 'nullable|string',
            'price_per_person' => 'nullable|numeric|min:0',
            'min_participants' => 'nullable|integer|min:1',
            'max_participants' => 'nullable|integer|min:1|gte:min_participants',
            'duration' => 'nullable|string|max:100',
            'included' => 'nullable|string',
            'excluded' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'booking_contact' => 'nullable|string|max:255',
            'is_available' => 'nullable|boolean',
            'is_active' => 'nullable|boolean',
            'sort_order' => 'nullable|integer|min:0',
        ]);

        if ($request->hasFile('image')) {
            $validated['cover_image'] = $request->file('image')
                ->store('tourism-packages', 'public');
        }

        unset($validated['image']);

        $validated['is_available'] = $request->boolean('is_available');
        $validated['is_active'] = $request->boolean('is_active');

        TourismPackage::create($validated);

        return redirect()
            ->route('admin.tourism-packages.index')
            ->with('success', 'Tourism package created successfully.');
    }

    public function update(Request $request, TourismPackage $tourismPackage)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:150',
            'category' => 'nullable|string|max:100',
            'short_description' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'itinerary' => 'nullable|string',
            'price_per_person' => 'nullable|numeric|min:0',
            'min_participants' => 'nullable|integer|min:1',
            'max_participants' => 'nullable|integer|min:1|gte:min_participants',
            'duration' => 'nullable|string|max:100',
            'included' => 'nullable|string',
            'excluded' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'booking_contact' => 'nullable|string|max:255',
            'is_available' => 'nullable|boolean',
            'is_active' => 'nullable|boolean',
            'sort_order' => 'nullable|integer|min:0',
        ]);

        if ($request->hasFile('image')) {
            if ($tourismPackage->cover_image) {
                Storage::disk('public')->delete($tourismPackage->cover_image);
            }

            $validated['cover_image'] = $request->file('image')
                ->store('tourism-packages', 'public');
        }

        unset($validated['image']);

        $validated['is_available'] = $request->boolean('is_available');
        $validated['is_active'] = $request->boolean('is_active');

        $tourismPackage->update($validated);

        return redirect()
            ->route('admin.tourism-packages.index')
            ->with('success', 'Tourism package updated successfully.');
    }

    public function destroy(TourismPackage $tourismPackage)
    {
        if ($tourismPackage->cover_image) {
            Storage::disk('public')->delete($tourismPackage->cover_image);
        }

        $tourismPackage->delete();

        return redirect()
            ->route('admin.tourism-packages.index')
            ->with('success', 'Tourism package deleted successfully.');
    }
}