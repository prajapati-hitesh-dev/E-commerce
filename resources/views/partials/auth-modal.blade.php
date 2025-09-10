<!-- Auth Modal -->
<div id="auth-modal" class="fixed inset-0 bg-black/50 flex items-center justify-center z-50 p-4 hidden">
    <div class="bg-white rounded-2xl p-8 max-w-md w-full relative">
        <button onclick="hideAuthModal()" class="absolute top-4 right-4 p-2 hover:bg-gray-100 rounded-full transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <!-- Login Form -->
        <div id="login-form">
            <div class="text-center mb-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Welcome Back</h2>
                <p class="text-gray-600">Sign in to your account</p>
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="space-y-4">
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent outline-none"
                            placeholder="Enter your email"
                        >
                    </div>
                    
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent outline-none"
                            placeholder="Enter your password"
                        >
                    </div>
                    
                    <button
                        type="submit"
                        class="w-full py-3 bg-gradient-to-r from-orange-500 to-green-600 text-white rounded-lg font-semibold hover:from-orange-600 hover:to-green-700 transition-all"
                    >
                        Sign In
                    </button>
                </div>
            </form>

            <div class="text-center mt-6">
                <p class="text-gray-600">Don't have an account? 
                    <button onclick="showRegisterForm()" class="text-orange-600 hover:text-orange-700 font-semibold">
                        Sign up
                    </button>
                </p>
            </div>
        </div>

        <!-- Register Form -->
        <div id="register-form" class="hidden">
            <div class="text-center mb-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Create Account</h2>
                <p class="text-gray-600">Join the local first movement</p>
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="space-y-4">
                    <div>
                        <label for="reg_name" class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                        <input
                            type="text"
                            id="reg_name"
                            name="name"
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent outline-none"
                            placeholder="Enter your full name"
                        >
                    </div>
                    
                    <div>
                        <label for="reg_email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <input
                            type="email"
                            id="reg_email"
                            name="email"
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent outline-none"
                            placeholder="Enter your email"
                        >
                    </div>
                    
                    <div>
                        <label for="reg_city" class="block text-sm font-medium text-gray-700 mb-2">City</label>
                        <input
                            type="text"
                            id="reg_city"
                            name="city"
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent outline-none"
                            placeholder="Enter your city"
                        >
                    </div>
                    
                    <div>
                        <label for="reg_password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                        <input
                            type="password"
                            id="reg_password"
                            name="password"
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent outline-none"
                            placeholder="Create a password"
                        >
                    </div>
                    
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">Confirm Password</label>
                        <input
                            type="password"
                            id="password_confirmation"
                            name="password_confirmation"
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent outline-none"
                            placeholder="Confirm your password"
                        >
                    </div>
                    
                    <button
                        type="submit"
                        class="w-full py-3 bg-gradient-to-r from-orange-500 to-green-600 text-white rounded-lg font-semibold hover:from-orange-600 hover:to-green-700 transition-all"
                    >
                        Create Account
                    </button>
                </div>
            </form>

            <div class="text-center mt-6">
                <p class="text-gray-600">Already have an account? 
                    <button onclick="showLoginForm()" class="text-orange-600 hover:text-orange-700 font-semibold">
                        Sign in
                    </button>
                </p>
            </div>
        </div>
    </div>
</div>
