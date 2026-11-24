@extends('layouts.app')

@section('content')

<main class="w-full bg-surface">
    <div class="flex flex-col w-full">

        @include('partials.home.hero')

        @include('partials.home.about-preview')

        @include('partials.home.facilities-preview')

        @include('partials.home.tourism-preview')

        @include('partials.home.programs-preview')

        @include('partials.home.news-preview')

        @include('partials.home.faq')

    </div>
</main>

@endsection

@push('scripts')
<script>
    function handlePrompt(btn) {
        const text = btn.innerText;
        alert("Membuka percakapan Asisten AI dengan topik: \"" + text + "\"");
    }
</script>
@endpush
