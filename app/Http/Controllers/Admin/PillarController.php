<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pillar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PillarController extends Controller
{
    public function index()
    {
        $pillars = Pillar::orderBy('sort_order')->get();

        return view('admin.pillars.index', compact('pillars'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:150',
            'category' => 'nullable|string|max:100',
            'short_description' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'icon' => 'nullable|string|max:100',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'activities' => 'nullable|string',
            'achievements' => 'nullable|string',
            'sort_order' => 'nullable|integer|min:0',
            'is_active' => 'nullable|boolean',
        ]);

        if ($request->hasFile('image')) {
            $validated['cover_image'] = $request->file('image')
                ->store('pillars', 'public');
        }

        unset($validated['image']);

        $validated['is_active'] = $request->boolean('is_active');

        Pillar::create($validated);

        return redirect()
            ->route('admin.pillars.index')
            ->with('success', 'Pillar created successfully.');
    }

    public function update(Request $request, Pillar $pillar)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:150',
            'category' => 'nullable|string|max:100',
            'short_description' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'icon' => 'nullable|string|max:100',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'activities' => 'nullable|string',
            'achievements' => 'nullable|string',
            'sort_order' => 'nullable|integer|min:0',
            'is_active' => 'nullable|boolean',
        ]);

        if ($request->hasFile('image')) {
            if ($pillar->cover_image) {
                Storage::disk('public')->delete($pillar->cover_image);
            }

            $validated['cover_image'] = $request->file('image')
                ->store('pillars', 'public');
        }

        unset($validated['image']);

        $validated['is_active'] = $request->boolean('is_active');

        $pillar->update($validated);

        return redirect()
            ->route('admin.pillars.index')
            ->with('success', 'Pillar updated successfully.');
    }

    public function destroy(Pillar $pillar)
    {
        if ($pillar->cover_image) {
            Storage::disk('public')->delete($pillar->cover_image);
        }

        $pillar->delete();

        return redirect()
            ->route('admin.pillars.index')
            ->with('success', 'Pillar deleted successfully.');
    }
}