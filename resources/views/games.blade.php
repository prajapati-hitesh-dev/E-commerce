@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-8">
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">Local First Games</h1>
        <p class="text-xl text-gray-600">Fun games to learn about local products and earn rewards</p>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Spin Wheel Game -->
        <div class="bg-white rounded-2xl shadow-lg p-6 text-center border-t-4 border-orange-500">
            <div class="w-16 h-16 bg-gradient-to-r from-orange-400 to-green-600 rounded-full flex items-center justify-center text-white mx-auto mb-4">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path>
                </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-800 mb-2">Spin & Win</h3>
            <p class="text-gray-600 mb-4">Spin the wheel to win amazing discounts on local products</p>
            <button onclick="showSpinWheel()" class="btn-primary">
                Play Now
            </button>
        </div>

        <!-- Quiz Game -->
        <div class="bg-white rounded-2xl shadow-lg p-6 text-center border-t-4 border-purple-500">
            <div class="w-16 h-16 bg-gradient-to-r from-blue-400 to-purple-600 rounded-full flex items-center justify-center text-white mx-auto mb-4">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-800 mb-2">Local Knowledge Quiz</h3>
            <p class="text-gray-600 mb-4">Test your knowledge about local products and win points</p>
            <a href="#quiz" class="btn-primary inline-block">
                Start Quiz
            </a>
        </div>

        <!-- Scavenger Hunt -->
        <div class="bg-white rounded-2xl shadow-lg p-6 text-center border-t-4 border-green-500">
            <div class="w-16 h-16 bg-gradient-to-r from-green-400 to-blue-600 rounded-full flex items-center justify-center text-white mx-auto mb-4">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-800 mb-2">Local Hunt</h3>
            <p class="text-gray-600 mb-4">Find local products in your area and earn rewards</p>
            <a href="#hunt" class="btn-primary inline-block">
                Start Hunt
            </a>
        </div>
    </div>

    <!-- Quiz Section -->
    <div id="quiz" class="mt-12 bg-white rounded-2xl shadow-lg p-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Quick Local Knowledge Quiz</h2>
        <div class="space-y-6 max-w-3xl mx-auto">
            <div>
                <p class="font-semibold mb-3">1) Which fabric is traditionally handwoven in India?</p>
                <div class="grid sm:grid-cols-2 gap-3">
                    <button class="px-4 py-3 border rounded-lg hover:bg-gray-50 text-left">Polyester</button>
                    <button class="px-4 py-3 border rounded-lg hover:bg-gray-50 text-left">Nylon</button>
                    <button class="px-4 py-3 border rounded-lg hover:bg-gray-50 text-left">Rayon</button>
                    <button class="px-4 py-3 border rounded-lg hover:bg-gray-50 text-left">Khadi</button>
                </div>
            </div>
            <div>
                <p class="font-semibold mb-3">2) Which state is famous for brass handicrafts?</p>
                <div class="grid sm:grid-cols-2 gap-3">
                    <button class="px-4 py-3 border rounded-lg hover:bg-gray-50 text-left">Kerala</button>
                    <button class="px-4 py-3 border rounded-lg hover:bg-gray-50 text-left">Uttar Pradesh</button>
                    <button class="px-4 py-3 border rounded-lg hover:bg-gray-50 text-left">Punjab</button>
                    <button class="px-4 py-3 border rounded-lg hover:bg-gray-50 text-left">Assam</button>
                </div>
            </div>
            <div class="text-center">
                <button class="btn-primary">Submit Answers</button>
            </div>
        </div>
    </div>

    <!-- Pledge CTA -->
    <div class="mt-12 bg-gradient-to-r from-orange-500 to-green-600 rounded-2xl p-8 text-white text-center">
        <h2 class="text-2xl font-bold mb-4">Take the Swadeshi Pledge</h2>
        <p class="text-lg mb-6">Commit to supporting local businesses and building a self-reliant India.</p>
        <a href="{{ route('pledge') }}" class="px-8 py-3 bg-white text-orange-600 rounded-full font-semibold hover:bg-gray-100 transition-colors inline-block">
            Take the Pledge
        </a>
    </div>

    <!-- Leaderboard -->
    <div class="mt-12 bg-white rounded-2xl shadow-lg p-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Leaderboard</h2>
        <div class="space-y-4">
            <div class="flex items-center justify-between p-4 bg-gradient-to-r from-yellow-100 to-orange-100 rounded-lg">
                <div class="flex items-center gap-4">
                    <div class="w-8 h-8 bg-yellow-500 rounded-full flex items-center justify-center text-white font-bold">1</div>
                    <div>
                        <h4 class="font-semibold">Priya Sharma</h4>
                        <p class="text-sm text-gray-600">Mumbai</p>
                    </div>
                </div>
                <div class="text-right">
                    <p class="text-2xl font-bold text-orange-600">2,450</p>
                    <p class="text-sm text-gray-600">points</p>
                </div>
            </div>
            
            <div class="flex items-center justify-between p-4 bg-gradient-to-r from-gray-100 to-gray-200 rounded-lg">
                <div class="flex items-center gap-4">
                    <div class="w-8 h-8 bg-gray-500 rounded-full flex items-center justify-center text-white font-bold">2</div>
                    <div>
                        <h4 class="font-semibold">Raj Patel</h4>
                        <p class="text-sm text-gray-600">Ahmedabad</p>
                    </div>
                </div>
                <div class="text-right">
                    <p class="text-2xl font-bold text-orange-600">2,100</p>
                    <p class="text-sm text-gray-600">points</p>
                </div>
            </div>
            
            <div class="flex items-center justify-between p-4 bg-gradient-to-r from-orange-100 to-red-100 rounded-lg">
                <div class="flex items-center gap-4">
                    <div class="w-8 h-8 bg-orange-500 rounded-full flex items-center justify-center text-white font-bold">3</div>
                    <div>
                        <h4 class="font-semibold">Anita Singh</h4>
                        <p class="text-sm text-gray-600">Delhi</p>
                    </div>
                </div>
                <div class="text-right">
                    <p class="text-2xl font-bold text-orange-600">1,890</p>
                    <p class="text-sm text-gray-600">points</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
