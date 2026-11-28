<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HeroSlide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Facility;
use App\Models\TourismDestination;
use App\Models\Pillar;
use App\Models\News;
use App\Models\Setting;

class HeroSlideController extends Controller
{
public function index()
{
    // Get Hero Slides
    $slides = HeroSlide::orderBy('sort_order')->get();

    $heroSlides = $slides->map(fn ($slide) => [
        'id' => $slide->id,
        'title' => $slide->title,
        'category' => $slide->category,
        'description' => $slide->description,
        'image' => asset('storage/' . $slide->image_path),
        'status' => $slide->is_active ? 'Aktif' : 'Nonaktif',
    ])->values();

    // Get Facilities
    $facilities = Facility::orderBy('sort_order')->get();

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

// Get Tourism Destinations
$destinations = TourismDestination::orderBy('sort_order')->get();

$destinationsData = $destinations->map(fn ($destination) => [
    'id' => $destination->id,
    'title' => $destination->name,
    'category' => $destination->category,
    'description' => $destination->short_description,
    'full_description' => $destination->description,
    'image' => $destination->cover_image
        ? asset('storage/' . $destination->cover_image)
        : 'https://placehold.co/400x250?text=Destination',
    'address' => $destination->address,
    'maps_url' => $destination->maps_url,
    'opening_hours' => $destination->opening_hours,
    'entrance_fee' => $destination->entrance_fee,
    'price' => $destination->price_per_person,
    'price_per_person' => $destination->price_per_person,
    'booking_contact' => $destination->booking_contact,
    'is_active' => $destination->is_active,
    'sort_order' => $destination->sort_order,
    'status' => $destination->is_active ? 'Aktif' : 'Nonaktif',
])->values();

// Get Sustainability Pillars
$pillars = Pillar::orderBy('sort_order')->get();

$pillarsData = $pillars->map(fn ($pillar, $index) => [
    'id' => $pillar->id,
    'number' => 'Pilar ' . str_pad($index + 1, 2, '0', STR_PAD_LEFT),
    'title' => $pillar->name,
    'category' => $pillar->category,
    'description' => $pillar->short_description,
    'full_description' => $pillar->description,
    'icon' => $pillar->icon,
    'image' => $pillar->cover_image
        ? asset('storage/' . $pillar->cover_image)
        : null,
    'activities' => $pillar->activities,
    'achievements' => $pillar->achievements,
    'is_active' => $pillar->is_active,
    'sort_order' => $pillar->sort_order,
    'status' => $pillar->is_active ? 'Aktif' : 'Nonaktif',
])->values();

$pillarsCount = Pillar::count();

// Get News Articles
$news = News::latest()->get();

$newsData = $news->map(fn ($article) => [
    'id' => $article->id,
    'title' => $article->title,
    'slug' => $article->slug,
    'category' => $article->category,
    'excerpt' => $article->excerpt,
    'content' => $article->content,
    'image' => $article->featured_image
        ? asset('storage/' . $article->featured_image)
        : 'https://placehold.co/400x250?text=News',
    'author' => $article->author,
    'published_at' => $article->published_at?->format('d M Y H:i'),
    'status' => $article->status,
])->values();

// Get Website Logos
$settings = Setting::pluck('value', 'key');

return view('admin.layouts.app', compact(
    'heroSlides',
    'facilitiesData',
    'destinationsData',
    'pillarsData',
    'pillarsCount',
    'newsData',
    'settings'
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