@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-8">
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">Success Stories</h1>
        <p class="text-xl text-gray-600">Real stories from our community about the impact of supporting local</p>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        @forelse($stories as $story)
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
            <div class="p-6">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-orange-400 to-green-600 rounded-full flex items-center justify-center text-white font-bold">
                        {{ strtoupper(substr($story->name, 0, 1)) }}
                    </div>
                    <div class="ml-4">
                        <h3 class="font-semibold text-gray-800">{{ $story->name }}</h3>
                        @if($story->city)
                        <p class="text-sm text-gray-600">{{ $story->city }}</p>
                        @endif
                    </div>
                </div>
                <h4 class="text-lg font-semibold text-gray-800 mb-2">{{ $story->title }}</h4>
                <p class="text-gray-700 mb-4">{{ $story->content }}</p>
                <div class="flex items-center text-sm text-gray-500">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                    ₹{{ number_format($story->impact_savings_inr) }} saved
                </div>
            </div>
        </div>
        @empty
        <div class="col-span-full text-center text-gray-600">No stories yet. Be the first to share yours!</div>
        @endforelse
    </div>

    <div class="mt-12 bg-gradient-to-r from-orange-500 to-green-600 rounded-2xl p-8 text-white text-center">
        <h2 class="text-2xl font-bold mb-4">Share Your Story</h2>
        <p class="text-lg mb-6">Have a success story to share? We'd love to hear how supporting local has made a difference in your life.</p>
        <a href="{{ route('stories.create') }}" class="px-8 py-3 bg-white text-orange-600 rounded-full font-semibold hover:bg-gray-100 transition-colors inline-block">
            Share Your Story
        </a>
    </div>
</div>
@endsection

