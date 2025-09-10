# Local First - Laravel E-commerce Platform

A Laravel-based e-commerce platform that promotes local businesses and products, converted from the original React/TypeScript application.

## Features

- **Product Catalog**: Browse and search local products with filtering and sorting
- **Shopping Cart**: Session-based cart with add/remove/update functionality
- **User Authentication**: Registration and login system
- **Alternative Finder**: Discover local alternatives to foreign products
- **Spin Wheel Game**: Interactive game to win discounts
- **Pledge System**: Take the Swadeshi pledge and get digital certificates
- **Success Stories**: Community-driven success stories
- **Responsive Design**: Mobile-first design with Tailwind CSS

## Technology Stack

- **Backend**: Laravel 12.x
- **Frontend**: Blade templates with Tailwind CSS
- **Database**: SQLite (configurable)
- **JavaScript**: Vanilla JS for interactivity
- **Styling**: Tailwind CSS with custom components

## Installation

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd laravel-version
   ```

2. **Install dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Database setup**
   ```bash
   php artisan migrate
   php artisan db:seed --class=ProductSeeder
   ```

5. **Build assets**
   ```bash
   npm run build
   ```

6. **Start the server**
   ```bash
   php artisan serve
   ```

## Project Structure

```
laravel-version/
├── app/
│   ├── Http/Controllers/
│   │   ├── HomeController.php
│   │   ├── ProductController.php
│   │   ├── CartController.php
│   │   └── AuthController.php
│   └── Models/
│       ├── Product.php
│       ├── Category.php
│       ├── Order.php
│       └── OrderItem.php
├── database/
│   ├── migrations/
│   └── seeders/
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   ├── partials/
│   │   ├── home.blade.php
│   │   ├── products.blade.php
│   │   ├── alternatives.blade.php
│   │   ├── pledge.blade.php
│   │   ├── games.blade.php
│   │   └── stories.blade.php
│   ├── css/
│   │   └── app.css
│   └── js/
│       └── app.js
└── routes/
    └── web.php
```

## Key Features Implemented

### 1. Product Management
- Product listing with pagination
- Category-based filtering
- Price and rating sorting
- Product search functionality

### 2. Shopping Cart
- Session-based cart storage
- Add/remove/update items
- Real-time cart updates
- Cart persistence across sessions

### 3. User Interface
- Responsive design with Tailwind CSS
- Mobile-first approach
- Interactive components (modals, dropdowns)
- Toast notifications

### 4. Interactive Features
- Spin wheel game with prizes
- Alternative finder for foreign products
- Pledge system with digital certificates
- Success stories showcase

## API Endpoints

- `GET /` - Home page
- `GET /products` - Product listing
- `GET /products/{id}` - Product detail
- `POST /cart/add` - Add item to cart
- `POST /cart/update` - Update cart item
- `POST /cart/remove` - Remove cart item
- `GET /cart` - Get cart contents
- `POST /login` - User login
- `POST /register` - User registration
- `POST /logout` - User logout

## Database Schema

### Categories
- id, name, slug, description, icon, is_active, timestamps

### Products
- id, name, description, vendor, price, original_price, image, badge, rating, category_id, is_active, stock_quantity, timestamps

### Orders
- id, order_number, user_id, subtotal, shipping, total, status, payment_status, shipping_address, billing_address, timestamps

### Order Items
- id, order_id, product_id, quantity, price, timestamps

## Customization

### Adding New Products
1. Use the ProductSeeder to add sample data
2. Or create products through the admin interface (if implemented)

### Styling
- Modify `resources/css/app.css` for custom styles
- Update Tailwind configuration in `tailwind.config.js`

### JavaScript Functionality
- Add new interactive features in `resources/js/app.js`
- Extend cart functionality as needed

## Deployment

1. **Production Environment**
   ```bash
   composer install --optimize-autoloader --no-dev
   npm run production
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```

2. **Web Server Configuration**
   - Point document root to `public/` directory
   - Configure URL rewriting for Laravel

## Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Test thoroughly
5. Submit a pull request

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Support

For support and questions, please contact the development team or create an issue in the repository.