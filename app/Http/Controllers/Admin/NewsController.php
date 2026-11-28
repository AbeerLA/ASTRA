<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NewsController extends Controller
{
public function index()
{
    return redirect()->route('admin.dashboard');
}
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:200',
            'slug' => 'nullable|string|max:200|unique:news,slug',
            'category' => 'nullable|string|max:100',
            'excerpt' => 'nullable|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'author' => 'nullable|string|max:255',
            'published_at' => 'nullable|date',
            'status' => 'required|in:draft,published,scheduled',
        ]);

        $validated['slug'] = $validated['slug'] ?: Str::slug($validated['title']);

        if ($request->hasFile('image')) {
            $validated['featured_image'] = $request->file('image')
                ->store('news', 'public');
        }

        unset($validated['image']);

        News::create($validated);

        return redirect()
            ->route('admin.dashboard')
            ->with('success', 'News article created successfully.');
    }

    public function update(Request $request, News $news)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:200',
            'slug' => 'nullable|string|max:200|unique:news,slug,' . $news->id,
            'category' => 'nullable|string|max:100',
            'excerpt' => 'nullable|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'author' => 'nullable|string|max:255',
            'published_at' => 'nullable|date',
            'status' => 'required|in:draft,published,scheduled',
        ]);

        $validated['slug'] = $validated['slug'] ?: Str::slug($validated['title']);

        if ($request->hasFile('image')) {
            if ($news->featured_image) {
                Storage::disk('public')->delete($news->featured_image);
            }

            $validated['featured_image'] = $request->file('image')
                ->store('news', 'public');
        }

        unset($validated['image']);

        $news->update($validated);

        return redirect()
            ->route('admin.dashboard')
            ->with('success', 'News article updated successfully.');
    }

    public function destroy(News $news)
    {
        if ($news->featured_image) {
            Storage::disk('public')->delete($news->featured_image);
        }

        $news->delete();

        return redirect()
            ->route('admin.dashboard')
            ->with('success', 'News article deleted successfully.');
    }
}