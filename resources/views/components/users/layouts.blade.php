<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cleansheet - Minimalist Essentials</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50">
    <!-- Navbar -->
    <nav class="fixed top-0 w-full bg-white shadow-sm z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <!-- Logo -->
                <div class="flex items-center">
                    <span class="text-gray-900 font-bold text-xl">Cleansheet</span>
                </div>
                
                <!-- Menu Desktop -->
                <div class="hidden md:flex md:items-center md:space-x-6">
                    <a href="#" class="text-gray-700 hover:text-gray-900 px-3 py-2 text-sm font-medium">Beranda</a>
                    <a href="#" class="text-gray-700 hover:text-gray-900 px-3 py-2 text-sm font-medium">Pria</a>
                    <a href="#" class="text-gray-700 hover:text-gray-900 px-3 py-2 text-sm font-medium">Wanita</a>
                    <a href="#" class="text-gray-700 hover:text-gray-900 px-3 py-2 text-sm font-medium">Koleksi</a>
                    <a href="#" class="text-gray-700 hover:text-gray-900 px-3 py-2 text-sm font-medium">Tentang</a>
                </div>

                <!-- Icons -->
                <div class="flex items-center space-x-4">
                    <a href="#" class="text-gray-700 p-2"><i class="fas fa-search"></i></a>
                    <a href="#" class="text-gray-700 p-2"><i class="fas fa-user"></i></a>
                    <a href="#" class="text-gray-700 relative p-2">
                        <i class="fas fa-shopping-bag"></i>
                        <span class="absolute -top-1 -right-1 bg-gray-900 text-white rounded-full w-4 h-4 flex items-center justify-center text-xs">3</span>
                    </a>
                    <button class="md:hidden text-gray-700 p-2"><i class="fas fa-bars"></i></button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="pt-16 pb-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center py-12">
                <h1 class="text-4xl font-bold text-gray-900 mb-4">Essentials for Everyday</h1>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">High-quality minimalist clothing designed for comfort and style in daily life</p>
                <button class="mt-6 bg-gray-900 text-white px-6 py-3 rounded-sm font-medium hover:bg-gray-800 transition">Shop Now</button>
            </div>
        </div>
    </div>

    <!-- Featured Products -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">Featured Collection</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white rounded-sm shadow-sm p-4 text-center">
                <div class="bg-gray-100 h-64 mb-4 flex items-center justify-center">[Product Image]</div>
                <h3 class="font-semibold text-gray-900">Basic Tee</h3>
                <p class="text-gray-600 mt-2">Rp 199.000</p>
            </div>
            <div class="bg-white rounded-sm shadow-sm p-4 text-center">
                <div class="bg-gray-100 h-64 mb-4 flex items-center justify-center">[Product Image]</div>
                <h3 class="font-semibold text-gray-900">Classic Pants</h3>
                <p class="text-gray-600 mt-2">Rp 349.000</p>
            </div>
            <div class="bg-white rounded-sm shadow-sm p-4 text-center">
                <div class="bg-gray-100 h-64 mb-4 flex items-center justify-center">[Product Image]</div>
                <h3 class="font-semibold text-gray-900">Minimal Dress</h3>
                <p class="text-gray-600 mt-2">Rp 299.000</p>
            </div>
        </div>
    </div>

    <main>
        {{ $slot }}
    </main>

    <footer class="bg-gray-900 text-gray-300 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Brand -->
                <div>
                    <h3 class="text-2xl font-bold text-white mb-2">Cleansheet</h3>
                    <p class="text-sm">Minimalist essentials for everyday life</p>
                </div>
                
                <!-- Links -->
                <div>
                    <h4 class="font-semibold text-white mb-4">Shop</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-white">All Products</a></li>
                        <li><a href="#" class="hover:text-white">New Arrivals</a></li>
                        <li><a href="#" class="hover:text-white">Best Sellers</a></li>
                    </ul>
                </div>
                
                <!-- Support -->
                <div>
                    <h4 class="font-semibold text-white mb-4">Support</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-white">Contact Us</a></li>
                        <li><a href="#" class="hover:text-white">Shipping</a></li>
                        <li><a href="#" class="hover:text-white">Returns</a></li>
                    </ul>
                </div>
                
                <!-- Contact -->
                <div>
                    <h4 class="font-semibold text-white mb-4">Contact</h4>
                    <ul class="space-y-2 text-sm">
                        <li>help@cleansheet.store</li>
                        <li>+62 812-3456-7890</li>
                        <li>Jakarta, Indonesia</li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-sm">
                <p>© {{ date('Y') }} Cleansheet Store. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>