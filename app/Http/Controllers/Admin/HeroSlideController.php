<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HeroSlide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeroSlideController extends Controller
{
public function index()
{
    // Get Hero Slides from database
    $slides = HeroSlide::orderBy('sort_order')->get();

    $heroSlides = $slides->map(fn ($slide) => [
        'id' => $slide->id,
        'title' => $slide->title,
        'category' => $slide->category,
        'description' => $slide->description,
        'image' => asset('storage/' . $slide->image_path),
        'status' => $slide->is_active ? 'Aktif' : 'Nonaktif',
    ])->values();

    // Get Facilities from database
    $facilities = \App\Models\Facility::orderBy('sort_order')->get();

    $facilitiesData = $facilities->map(fn ($facility) => [
        'id' => $facility->id,
        'title' => $facility->name,
        'category' => $facility->category,
        'description' => $facility->short_description,
        'image' => $facility->image_path
            ? asset('storage/' . $facility->image_path)
            : 'https://placehold.co/120x90?text=Facility',
        'status' => $facility->is_active ? 'Aktif' : 'Nonaktif',
    ])->values();

    return view('admin.layouts.app', compact(
        'slides',
        'heroSlides',
        'facilitiesData'
    ));
}
 
public function store(Request $request)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'category' => 'nullable|string|max:255',
        'description' => 'nullable|string',
        'image' => 'nullable|image|max:5120',
        'image_url' => 'nullable|url|max:2048',
        'is_active' => 'required|boolean',
    ]);

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('hero-slides', 'public');
    } elseif (!empty($validated['image_url'])) {
        $imagePath = $validated['image_url'];
    } else {
        return back()->withErrors([
            'image' => 'Please upload an image or provide an image URL.'
        ])->withInput();
    }

    HeroSlide::create([
        'title' => $validated['title'],
        'category' => $validated['category'] ?? null,
        'description' => $validated['description'] ?? null,
        'image_path' => $imagePath,
        'is_active' => $validated['is_active'],
    ]);

    return redirect()->route('admin.dashboard')
        ->with('success', 'Hero Slide added successfully!');
}

    public function update(Request $request, HeroSlide $heroSlide)
    {
        $validated = $request->validate([
            'category' => 'nullable|string|max:100',
            'title' => 'required|string|max:120',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'cta_text' => 'nullable|string|max:100',
            'cta_link' => 'nullable|string|max:255',
            'sort_order' => 'nullable|integer|min:0',
            'is_active' => 'nullable|boolean',
        ]);

        if ($request->hasFile('image')) {
            if ($heroSlide->image_path) {
                Storage::disk('public')->delete($heroSlide->image_path);
            }

            $validated['image_path'] = $request->file('image')
                ->store('hero-slides', 'public');
        }

        unset($validated['image']);

        $validated['is_active'] = $request->boolean('is_active');

        $heroSlide->update($validated);

        return redirect()
            ->route('admin.hero-slides.index')
            ->with('success', 'Hero slide updated successfully.');
    }

    public function destroy(HeroSlide $heroSlide)
    {
        if ($heroSlide->image_path) {
            Storage::disk('public')->delete($heroSlide->image_path);
        }

        $heroSlide->delete();

        return redirect()
            ->route('admin.hero-slides.index')
            ->with('success', 'Hero slide deleted successfully.');
    }
}