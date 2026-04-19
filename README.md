# Ecommerce Laravel 9 + Vue 3

A modern ecommerce application built with Laravel 11, Vue 3, and Vite. This application features product management, shopping basket functionality, and user authentication.

## Tech Stack

- **Backend**: Laravel 11
- **Frontend**: Vue 3 with Vite
- **Database**: MySQL
- **Authentication**: Laravel Auth + Sanctum API
- **CSS Framework**: Bootstrap 5
- **Package Manager**: Composer (PHP), npm (Node.js)

## Features

- User authentication and authorization
- Product catalog with search and filtering
- Shopping basket management
- Responsive UI with Bootstrap 5
- RESTful API with token-based authentication
- Database seeders for demo data

## Prerequisites

Before running this application, ensure you have:

- PHP 8.2+ installed
- MySQL/MariaDB server running
- Node.js 16+ and npm
- Composer installed globally
- A local `.env` file configured

## Installation & Setup

### 1. Clone and Environment Setup

```bash
# Copy environment configuration
cp .env.example .env

# Generate application key (if not already set)
php artisan key:generate
```

### 2. Database Configuration

Edit `.env` file with your MySQL credentials:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ecommerce_db
DB_USERNAME=root
DB_PASSWORD=
```

### 3. Install Dependencies

```bash
# Install PHP dependencies
composer install

# Install JavaScript dependencies
npm install
```

### 4. Database Setup

```bash
# Run migrations to create tables
php artisan migrate

# Seed database with sample data
php artisan db:seed
```

### 5. Build Frontend Assets

```bash
# Build Vue components with Vite for production
npm run build

# Or run in development mode with watch
npm run dev
```

## Running the Application

### Development Server

```bash
# Start the Laravel development server
php artisan serve
```

The application will be available at `http://localhost:8000`

### Frontend Development with Hot Reload

In a separate terminal:

```bash
npm run dev
```

This enables Vite's hot module replacement for faster development.

## Project Structure

```
├── app/
│   ├── Models/              # Eloquent models (Product, User, Basket)
│   ├── Http/Controllers/    # API and web controllers
│   └── Providers/           # Service providers
├── database/
│   ├── migrations/          # Database schema migrations
│   ├── factories/           # Model factories for testing
│   └── seeders/             # Database seeders with sample data
├── routes/
│   ├── web.php              # Web routes
│   └── api.php              # API routes (Sanctum protected)
├── resources/
│   ├── views/               # Blade templates
│   └── js/                  # Vue components
├── public/                  # Public assets and compiled files
├── storage/                 # Log files and cache
└── tests/                   # Feature and unit tests
```

## Database Schema

### Products Table
- `id`: Primary key
- `name`: Product name
- `slug`: URL slug
- `description`: Product description
- `image_name`: Product image filename
- `price`: Regular price
- `sale_price`: Discounted price
- `timestamps`: Created/updated timestamps

### Baskets Table (Shopping Cart)
- `id`: Primary key
- `product_id`: Foreign key to products
- `user_id`: Foreign key to users
- `qty`: Quantity in cart
- `price`: Price at time of adding to cart
- `timestamps`: Created/updated timestamps

### Users Table
- Standard Laravel authentication table
- `id`, `name`, `email`, `password`, `timestamps`

## API Endpoints

### Authentication
- `POST /api/login` - User login (returns Sanctum token)
- `POST /api/register` - New user registration
- `POST /api/logout` - User logout
- `GET /api/user` - Get authenticated user (requires token)

### Products
- `GET /api/products` - List all products
- `GET /api/products/{id}` - Get product details

### Shopping Basket
- `GET /api/basket` - Get user's basket items
- `POST /api/basket` - Add item to basket
- `PUT /api/basket/{id}` - Update basket item quantity
- `DELETE /api/basket/{id}` - Remove item from basket

## Available Commands

```bash
# Run tests
php artisan test

# Clear application cache
php artisan cache:clear

# View database migrations status
php artisan migrate:status

# Fresh migration and seeding
php artisan migrate:fresh --seed

# Access Tinker REPL
php artisan tinker

# Build frontend assets
npm run build

# Watch for frontend changes
npm run dev
```

## Troubleshooting

### Database Connection Error
- Ensure MySQL is running
- Verify DB credentials in `.env`
- Check DB_HOST is correct (localhost or 127.0.0.1)

### Node Modules Issues
```bash
# Clear cache and reinstall
rm -rf node_modules package-lock.json
npm install
```

### Permission Issues on Linux/Mac
```bash
chmod -R 775 storage bootstrap/cache
```

### Port Already in Use
```bash
# Run on different port
php artisan serve --port=8080
```

## License

This project is open-source software licensed under the [MIT license](LICENSE).

## Support

For Laravel documentation, visit [laravel.com/docs](https://laravel.com/docs)
For Vue 3 documentation, visit [vuejs.org](https://vuejs.org)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
