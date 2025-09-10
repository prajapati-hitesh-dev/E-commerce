@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto px-4 py-8">
    <div class="text-center mb-8">
        <h1 class="text-4xl font-bold text-gray-800 mb-2">Share Your Story</h1>
        <p class="text-lg text-gray-600">Tell us how choosing local made a difference.</p>
    </div>

    @if ($errors->any())
        <div class="mb-6 p-4 bg-red-50 border border-red-200 text-red-700 rounded-lg">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('stories.store') }}" class="bg-white rounded-2xl shadow-lg p-8">
        @csrf
        <div class="grid md:grid-cols-2 gap-6">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Name</label>
                <input name="name" type="text" class="input-field" placeholder="Your name" value="{{ old('name') }}" required>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">City</label>
                <input name="city" type="text" class="input-field" placeholder="Your city" value="{{ old('city') }}">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Email (optional)</label>
                <input name="email" type="email" class="input-field" placeholder="you@example.com" value="{{ old('email') }}">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Estimated Savings (₹)</label>
                <input name="impact_savings_inr" type="number" min="0" class="input-field" placeholder="e.g., 1500" value="{{ old('impact_savings_inr') }}">
            </div>
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Story Title</label>
                <input name="title" type="text" class="input-field" placeholder="Give your story a title" value="{{ old('title') }}" required>
            </div>
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Your Story</label>
                <textarea name="content" rows="6" class="input-field" placeholder="Share your experience..." required>{{ old('content') }}</textarea>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-between">
            <a href="{{ route('stories') }}" class="px-6 py-3 border rounded-lg hover:bg-gray-50">Back to Stories</a>
            <button type="submit" class="btn-primary">Submit Story</button>
        </div>
    </form>
</div>
@endsection


