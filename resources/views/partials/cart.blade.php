<!-- Cart Sidebar -->
<div id="cart-sidebar" class="fixed top-0 right-0 h-full w-full max-w-md bg-white z-50 transform transition-transform duration-300 ease-in-out shadow-xl translate-x-full">
    <div class="flex flex-col h-full">
        <!-- Header -->
        <div class="flex items-center justify-between p-6 border-b bg-gradient-to-r from-orange-500 to-green-600 text-white">
            <div class="flex items-center gap-3">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.5 5M7 13l2.5 5m6-5v6a2 2 0 01-2 2H9a2 2 0 01-2-2v-6m8 0V9a2 2 0 00-2-2H9a2 2 0 00-2 2v4.01"></path>
                </svg>
                <h2 class="text-xl font-bold">Shopping Cart</h2>
            </div>
            <button onclick="toggleCart()" class="p-2 hover:bg-white/20 rounded-full transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Cart Items -->
        <div class="flex-1 overflow-y-auto p-6">
            <div id="cart-empty" class="text-center py-16">
                <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.5 5M7 13l2.5 5m6-5v6a2 2 0 01-2 2H9a2 2 0 01-2-2v-6m8 0V9a2 2 0 00-2-2H9a2 2 0 00-2 2v4.01"></path>
                </svg>
                <h3 class="text-xl font-semibold text-gray-600 mb-2">Your cart is empty</h3>
                <p class="text-gray-500">Start shopping to add items to your cart</p>
            </div>
            
            <div id="cart-items" class="space-y-4 hidden">
                <!-- Cart items will be populated here -->
            </div>
        </div>

        <!-- Footer -->
        <div id="cart-footer" class="border-t p-6 bg-gray-50 hidden">
            <div class="space-y-2 mb-6">
                <div class="flex justify-between">
                    <span>Subtotal:</span>
                    <span id="cart-subtotal">₹0.00</span>
                </div>
                <div class="flex justify-between">
                    <span>Shipping:</span>
                    <span id="cart-shipping">₹50.00</span>
                </div>
                <div class="flex justify-between text-lg font-bold border-t pt-2">
                    <span>Total:</span>
                    <span id="cart-total" class="text-orange-600">₹0.00</span>
                </div>
            </div>
            <button class="w-full py-4 bg-gradient-to-r from-orange-500 to-green-600 text-white rounded-xl font-semibold text-lg hover:from-orange-600 hover:to-green-700 transition-all flex items-center justify-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                </svg>
                Proceed to Checkout
            </button>
        </div>
    </div>
</div>

<!-- Cart Backdrop -->
<div id="cart-backdrop" class="fixed inset-0 bg-black/50 z-40 hidden" onclick="toggleCart()"></div>
