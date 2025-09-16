
# Store E-commerce Platform

<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel">
  </a>
  <br>
  <img src="https://img.shields.io/badge/PHP-8.1+-777BB4?style=flat&logo=php&logoColor=white" alt="PHP 8.1+">
  <img src="https://img.shields.io/badge/Laravel-10.x-FF2D20?style=flat&logo=laravel&logoColor=white" alt="Laravel 10.x">
  <img src="https://img.shields.io/badge/License-MIT-blue.svg" alt="License: MIT">
</p>

## 🛍️ About Store

Store is a modern e-commerce platform built with Laravel 10, designed to provide a seamless shopping experience. This project includes user authentication, product management, and a responsive frontend built with modern web technologies.

## ✨ Features

- 🔐 User Authentication (Login, Registration, Password Reset)
- 🛒 Product Catalog Management
- 🔍 Product Search and Filtering
- 📱 Responsive Design
- 🚀 Built with Laravel 10 and modern PHP 8.1+
- 🎨 Frontend powered by Tailwind CSS and Alpine.js
- 🔒 Secure authentication with Laravel Sanctum

## 🚀 Getting Started

### Prerequisites

- PHP 8.1 or higher
- Composer
- Node.js & NPM
- MySQL 5.7+ or MariaDB 10.3+

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/yourusername/store-project.git
   cd store-project
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install NPM dependencies**
   ```bash
   npm install
   ```

4. **Create environment file**
   ```bash
   cp .env.example .env
   ```

5. **Generate application key**
   ```bash
   php artisan key:generate
   ```

6. **Configure database**
   Update your `.env` file with your database credentials:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=store
   DB_USERNAME=root
   DB_PASSWORD=
   ```

7. **Run migrations and seed the database**
   ```bash
   php artisan migrate --seed
   ```

8. **Compile assets**
   ```bash
   npm run dev
   # or for production
   # npm run build
   ```

9. **Start the development server**
   ```bash
   php artisan serve
   ```


>>>>>>> 49cf197fe0cfb43f53c0f0b0700676d6e11af114
