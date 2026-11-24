@extends('admin.layouts.app')

@section('title', 'Dashboard')
@section('page-heading', 'Dashboard')

@section('content')

<div class="space-y-6">

    {{-- Welcome Banner --}}
    <div class="rounded-2xl bg-primary p-8 text-white"
         style="background-color: #2D3091;">

        <h2 class="text-2xl font-bold mb-2">
            Selamat Datang di Admin Panel Desa Sejahtera Astra Kepongpongan!
        </h2>

        <p class="text-white/80">
            Kelola informasi, fasilitas, potensi wisata, dan berita desa
            melalui satu dashboard terpadu.
        </p>

    </div>

    {{-- Overview Cards --}}
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-5">

        @php
            $cards = [
                ['title' => 'Hero Slides', 'icon' => 'image', 'color' => '#2D3091'],
                ['title' => 'Facilities', 'icon' => 'apartment', 'color' => '#F16421'],
                ['title' => 'Tourism Destinations', 'icon' => 'travel_explore', 'color' => '#2D3091'],
                ['title' => 'News & Agenda', 'icon' => 'newspaper', 'color' => '#F16421'],
            ];
        @endphp

        @foreach ($cards as $card)
            <div class="bg-white rounded-2xl border border-slate-200 p-6 shadow-sm">

                <div class="flex items-center justify-between mb-5">
                    <span class="text-sm text-slate-500 font-medium">
                        {{ $card['title'] }}
                    </span>

                    <span class="material-symbols-outlined"
                          style="color: {{ $card['color'] }};">
                        {{ $card['icon'] }}
                    </span>
                </div>

                <h3 class="text-3xl font-bold text-slate-800">0</h3>

                <p class="text-xs text-slate-400 mt-2">
                    Total data
                </p>

            </div>
        @endforeach

    </div>

    {{-- Quick Access --}}
    <div>
        <h3 class="text-xl font-bold text-slate-800 mb-4">
            Quick Access
        </h3>

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">

            @php
                $modules = [
                    ['name' => 'Hero & Slider', 'route' => 'admin.hero-slides.index'],
                    ['name' => 'Facilities', 'route' => 'admin.facilities.index'],
                    ['name' => 'Tourism Destinations', 'route' => 'admin.tourism-destinations.index'],
                    ['name' => 'Tourism Packages', 'route' => 'admin.tourism-packages.index'],
                    ['name' => 'Four Pillars', 'route' => 'admin.pillars.index'],
                    ['name' => 'News & Agenda', 'route' => 'admin.news.index'],
                    ['name' => 'FAQ', 'route' => 'admin.faqs.index'],
                ];
            @endphp

            @foreach ($modules as $module)
                <a href="{{ route($module['route']) }}"
                   class="bg-white border border-slate-200 rounded-xl p-5 hover:border-orange-400 hover:shadow-md transition">

                    <div class="flex items-center justify-between">
                        <span class="font-semibold text-slate-700">
                            {{ $module['name'] }}
                        </span>

                        <span class="material-symbols-outlined text-slate-400">
                            arrow_forward
                        </span>
                    </div>

                </a>
            @endforeach

        </div>
    </div>

</div>

@endsection