<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>NepalExplorer | Discover the Himalayas</title>
        
        <!-- Fonts & Icons -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <script src="https://cdn.tailwindcss.com"></script>
        
        <!-- Tailwind Config -->
        <script>
    tailwind.config = {
        theme: {
            extend: {
                animation: {
                    'fade-in': 'fadeIn 1.5s ease-in-out',
                    'float': 'float 6s ease-in-out infinite',
                    'zoom-in': 'zoomIn 0.5s ease-in-out',
                    'slide-up': 'slideUp 1s ease-in-out'
                },
                keyframes: {
                    fadeIn: {
                        '0%': { opacity: '0' },
                        '100%': { opacity: '1' }
                    },
                    float: {
                        '0%, 100%': { transform: 'translateY(0)' },
                        '50%': { transform: 'translateY(-10px)' }
                    },
                    zoomIn: {
                        '0%': { transform: 'scale(0.9)', opacity: '0' },
                        '100%': { transform: 'scale(1)', opacity: '1' }
                    },
                    slideUp: {
                        '0%': { transform: 'translateY(50px)', opacity: '0' },
                        '100%': { transform: 'translateY(0)', opacity: '1' }
                    }
                }
            }
        }
    }
</script>


        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC]">
        <!-- Navigation -->
        <header class="fixed top-0 left-0 right-0 z-50 bg-white/80 dark:bg-[#0a0a0a]/80 backdrop-blur-sm shadow-sm">
            <nav class="container mx-auto px-6 lg:px-8 py-4 flex items-center justify-between">
                <a href="{{ route('dashboard') }}" class="flex items-center group">
                    <h2 class="text-2xl font-bold bg-gradient-to-r from-[#2563eb] to-[#7c3aed] bg-clip-text text-transparent transition-all duration-300 group-hover:from-[#7c3aed] group-hover:to-[#2563eb]">
                        NepalExplorer
                    </h2>
                </a>    

                <div class="flex items-center gap-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="px-5 py-2 rounded-lg bg-gradient-to-r from-[#2563eb] to-[#7c3aed] text-white font-medium hover:shadow-lg hover:shadow-blue-500/20 transition-all">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="px-5 py-2 text-[#1b1b18] dark:text-[#EDEDEC] font-medium hover:text-[#2563eb] dark:hover:text-[#7c3aed] transition-colors">
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="px-5 py-2 rounded-lg bg-gradient-to-r from-[#2563eb] to-[#7c3aed] text-white font-medium hover:shadow-lg hover:shadow-blue-500/20 transition-all">
                                Register
                            </a>
                        @endif
                    @endauth
                </div>
            </nav>
        </header>

        <!-- Hero Section -->
        <section class="relative h-screen w-full overflow-hidden">
            <!-- Background Image with Parallax Effect -->
            <div class="absolute inset-0 overflow-hidden">
                <img 
                    src="https://images.unsplash.com/photo-1607836046730-3317bd58a31b?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
                    alt="Snow-covered Himalayas in Nepal"
                    class="absolute inset-0 w-full h-full object-cover scale-110 lg:scale-100 transform transition-all duration-1000 ease-out hover:scale-100"
                    loading="eager"
                >
            </div>
            
            <!-- Gradient Overlay -->
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-black/10 z-10"></div>
            
            <!-- Hero Content -->
            <div class="relative z-20 h-full flex flex-col items-center justify-center px-6 text-center">
                <div class="max-w-4xl space-y-6 animate-fade-in">
                    <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold text-white mb-4 leading-tight">
                        <span class="bg-clip-text text-transparent bg-gradient-to-r from-white to-[#a5b4fc]">Nepal's Sacred</span>
                        <span class="block mt-2">Horizons</span>
                    </h1>
                    
                    <p class="text-xl md:text-2xl text-white/90 font-medium max-w-2xl mx-auto">
                        Where Himalayan peaks meet ancient spiritual legacy
                    </p>
                    
                    <div class="pt-8 flex gap-4 justify-center">
                        <a href="#explore" class="px-8 py-3 bg-white text-[#1b1b18] font-semibold rounded-full hover:bg-gray-100 hover:shadow-lg transition-all duration-300">
                            Explore Nepal
                        </a>
                        <a href="#gallery" class="px-8 py-3 border-2 border-white text-white font-semibold rounded-full hover:bg-white/10 hover:shadow-lg transition-all duration-300">
                            View Gallery
                        </a>
                    </div>
                </div>
                
                <!-- Scroll Indicator -->
                <div class="absolute bottom-10 animate-float">
                    <a href="#about" class="flex flex-col items-center text-white/80 hover:text-white transition-colors">
                        <span class="mb-2 text-sm">Scroll Down</span>
                        <i class="fas fa-chevron-down text-xl"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- About Section (Placeholder) -->
        <section id="about" class="py-20 bg-white dark:bg-[#0a0a0a]">
            <div class="container mx-auto px-6 lg:px-8">
                <h2 class="text-4xl font-bold text-center mb-12">Discover Nepal's Wonders</h2>
                <p class="text-lg text-center mb-8">
                    From the majestic Himalayas to the vibrant culture, explore the beauty of Nepal.
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="overflow-hidden rounded-lg shadow-lg">
                        <img 
                            src="https://images.unsplash.com/photo-1609660062508-1ac4a930232d?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
                            alt="Mount Everest"
                            class="w-full h-64 object-cover transition-transform duration-300 hover:scale-105"
                        >
                        <div class="p-4">
                            <h3 class="text-xl font-semibold mb-2">Mount Everest</h3>
                            <p class="text-gray-600 dark:text-gray-400">The highest peak in the world, a must-visit for adventurers.</p>
                        </div>
                    </div>
                    <div class="overflow-hidden rounded-lg shadow-lg">
                        <img 
                            src="https://media.sublimetrails.com/uploads/img/untitled-design--50-.webp" 
                            alt="Patan Durbar Square"
                            class="w-full h-64 object-cover transition-transform duration-300 hover:scale-105"
                        >
                        <div class="p-4">
                            <h3 class="text-xl font-semibold mb-2">Patan Durbar Square</h3>
                            <p class="text-gray-600 dark:text-gray-400">A UNESCO World Heritage Site showcasing Nepal's rich history.</p>
                        </div>
                    </div>
                    <div class="overflow-hidden rounded-lg shadow-lg">
                        <img 
                            src="https://youimg1.tripcdn.com/target/100b1c000001dks1y8A7D.jpg?proc=source%2ftrip" 
                            alt="Phewa Lake"
                            class="w-full h-64 object-cover transition-transform duration-300 hover:scale-105"
                        >
                        <div class="p-4">
                            <h3 class="text-xl font-semibold mb-2">Phewa Lake</h3>
                            <p class="text-gray-600 dark:text-gray-400">A serene lake in Pokhara, perfect for boating and relaxation.</p>
                        </div>
                    </div>
                </div>
                <!-- Content would go here -->
            </div>
        </section>

        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif
    </body>
</html>