// Global JavaScript for Local First application

// Cart functionality
let cart = [];

// Initialize cart from session
function initCart() {
    fetch('/cart')
        .then(response => response.json())
        .then(data => {
            cart = data.items || [];
            updateCartUI();
        })
        .catch(error => console.error('Error loading cart:', error));
}

// Add item to cart
function addToCart(productId) {
    fetch('/cart/add', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({ product_id: productId })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            showToast('Product added to cart!', 'success');
            updateCartUI();
        }
    })
    .catch(error => console.error('Error adding to cart:', error));
}

// Update cart quantity
function updateCartQuantity(productId, quantity) {
    fetch('/cart/update', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({ 
            product_id: productId, 
            quantity: quantity 
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            updateCartUI();
        }
    })
    .catch(error => console.error('Error updating cart:', error));
}

// Remove item from cart
function removeFromCart(productId) {
    fetch('/cart/remove', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({ product_id: productId })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            showToast('Product removed from cart', 'info');
            updateCartUI();
        }
    })
    .catch(error => console.error('Error removing from cart:', error));
}

// Update cart UI
function updateCartUI() {
    const cartCount = document.getElementById('cart-count');
    const cartItems = document.getElementById('cart-items');
    const cartEmpty = document.getElementById('cart-empty');
    const cartFooter = document.getElementById('cart-footer');
    
    if (cart.length === 0) {
        if (cartCount) cartCount.classList.add('hidden');
        if (cartEmpty) cartEmpty.classList.remove('hidden');
        if (cartItems) cartItems.classList.add('hidden');
        if (cartFooter) cartFooter.classList.add('hidden');
    } else {
        if (cartCount) {
            cartCount.textContent = cart.reduce((sum, item) => sum + item.quantity, 0);
            cartCount.classList.remove('hidden');
        }
        
        if (cartEmpty) cartEmpty.classList.add('hidden');
        if (cartItems) cartItems.classList.remove('hidden');
        if (cartFooter) cartFooter.classList.remove('hidden');
        
        // Update cart items display
        if (cartItems) {
            cartItems.innerHTML = cart.map(item => `
                <div class="flex gap-4 p-4 bg-gray-50 rounded-xl">
                    <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center text-2xl">
                        ${item.image}
                    </div>
                    <div class="flex-1">
                        <h3 class="font-semibold text-gray-800 mb-1">${item.name}</h3>
                        <p class="text-sm text-gray-600 mb-2">by ${item.vendor}</p>
                        <div class="flex items-center justify-between">
                            <span class="font-bold text-orange-600">₹${item.price}</span>
                            <div class="flex items-center gap-3">
                                <div class="flex items-center gap-2 bg-white rounded-full p-1">
                                    <button onclick="updateCartQuantity(${item.id}, ${item.quantity - 1})" class="w-8 h-8 flex items-center justify-center rounded-full hover:bg-gray-100 transition-colors">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
                                        </svg>
                                    </button>
                                    <span class="w-8 text-center font-semibold">${item.quantity}</span>
                                    <button onclick="updateCartQuantity(${item.id}, ${item.quantity + 1})" class="w-8 h-8 flex items-center justify-center rounded-full hover:bg-gray-100 transition-colors">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                        </svg>
                                    </button>
                                </div>
                                <button onclick="removeFromCart(${item.id})" class="p-2 text-red-500 hover:bg-red-50 rounded-full transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            `).join('');
        }
        
        // Update totals
        const total = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
        const shipping = total > 0 ? 50 : 0;
        const grandTotal = total + shipping;
        
        const subtotalEl = document.getElementById('cart-subtotal');
        const shippingEl = document.getElementById('cart-shipping');
        const totalEl = document.getElementById('cart-total');
        
        if (subtotalEl) subtotalEl.textContent = `₹${total.toFixed(2)}`;
        if (shippingEl) shippingEl.textContent = `₹${shipping.toFixed(2)}`;
        if (totalEl) totalEl.textContent = `₹${grandTotal.toFixed(2)}`;
    }
}

// Toggle cart visibility
function toggleCart() {
    const cartSidebar = document.getElementById('cart-sidebar');
    const cartBackdrop = document.getElementById('cart-backdrop');
    
    if (cartSidebar.classList.contains('translate-x-full')) {
        cartSidebar.classList.remove('translate-x-full');
        cartBackdrop.classList.remove('hidden');
    } else {
        cartSidebar.classList.add('translate-x-full');
        cartBackdrop.classList.add('hidden');
    }
}

// Mobile search toggle
function toggleMobileSearch() {
    const mobileSearch = document.getElementById('mobile-search');
    mobileSearch.classList.toggle('hidden');
}

// Auth modal functions
function showAuthModal() {
    document.getElementById('auth-modal').classList.remove('hidden');
}

function hideAuthModal() {
    document.getElementById('auth-modal').classList.add('hidden');
}

function showLoginForm() {
    document.getElementById('login-form').classList.remove('hidden');
    document.getElementById('register-form').classList.add('hidden');
}

function showRegisterForm() {
    document.getElementById('register-form').classList.remove('hidden');
    document.getElementById('login-form').classList.add('hidden');
}

// Spin wheel functionality
function showSpinWheel() {
    document.getElementById('spin-wheel-modal').classList.remove('hidden');
    initSpinWheel();
}

function hideSpinWheel() {
    document.getElementById('spin-wheel-modal').classList.add('hidden');
}

function initSpinWheel() {
    const prizes = [
        { label: '10% OFF', color: 'bg-red-500', value: 10 },
        { label: '₹50 OFF', color: 'bg-blue-500', value: 50 },
        { label: '15% OFF', color: 'bg-green-500', value: 15 },
        { label: 'Free Shipping', color: 'bg-yellow-500', value: 'shipping' },
        { label: '5% OFF', color: 'bg-purple-500', value: 5 },
        { label: '₹100 OFF', color: 'bg-orange-500', value: 100 },
        { label: '20% OFF', color: 'bg-pink-500', value: 20 },
        { label: 'Try Again', color: 'bg-gray-500', value: 0 }
    ];
    
    const wheel = document.getElementById('wheel');
    wheel.innerHTML = prizes.map((prize, index) => `
        <div class="absolute w-full h-full ${prize.color} flex items-center justify-center text-white font-bold text-sm" 
             style="transform: rotate(${index * 45}deg); clip-path: polygon(50% 50%, 0% 0%, 29.3% 29.3%)">
            <span class="transform -rotate-22.5">${prize.label}</span>
        </div>
    `).join('');
}

function spinWheel() {
    const wheel = document.getElementById('wheel');
    const spinButton = document.getElementById('spin-button');
    const resultDiv = document.getElementById('spin-result');
    const prizeText = document.getElementById('prize-text');
    
    if (spinButton.disabled) return;
    
    spinButton.disabled = true;
    spinButton.textContent = 'Spinning...';
    resultDiv.classList.add('hidden');
    
    const randomRotation = 1440 + Math.random() * 1440;
    const finalAngle = randomRotation % 360;
    const prizeIndex = Math.floor((360 - finalAngle) / 45) % 8;
    
    wheel.style.transform = `rotate(${randomRotation}deg)`;
    
    setTimeout(() => {
        spinButton.disabled = false;
        spinButton.textContent = 'Spin the Wheel!';
        
        const prizes = ['10% OFF', '₹50 OFF', '15% OFF', 'Free Shipping', '5% OFF', '₹100 OFF', '20% OFF', 'Try Again'];
        const prize = prizes[prizeIndex];
        
        prizeText.textContent = prize;
        resultDiv.classList.remove('hidden');
        
        showToast(`Congratulations! You won: ${prize}`, 'success');
    }, 3000);
}

// Toast notification system
function showToast(message, type = 'info') {
    const container = document.getElementById('toast-container');
    const toast = document.createElement('div');
    
    toast.className = `toast toast-${type} transform translate-x-full`;
    toast.innerHTML = `
        <div class="flex items-center justify-between">
            <span>${message}</span>
            <button onclick="this.parentElement.parentElement.remove()" class="ml-4 text-white hover:text-gray-200">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
    `;
    
    container.appendChild(toast);
    
    // Animate in
    setTimeout(() => {
        toast.classList.remove('translate-x-full');
    }, 100);
    
    // Auto remove after 5 seconds
    setTimeout(() => {
        toast.classList.add('translate-x-full');
        setTimeout(() => {
            if (toast.parentElement) {
                toast.remove();
            }
        }, 300);
    }, 5000);
}

// Initialize app when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    initCart();
    
    // Close modals when clicking outside
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('fixed') && e.target.classList.contains('inset-0')) {
            e.target.classList.add('hidden');
        }
    });
});