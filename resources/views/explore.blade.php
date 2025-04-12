<x-app-layout>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.bunny.net">
     <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/solid.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css">
    
        <!-- Fonts & Icons -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600|poppins:400,500,600,700" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <script src="https://cdn.tailwindcss.com"></script>
        
        <!-- Tailwind Config -->
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        fontFamily: {
                            'sans': ['Instrument Sans', 'sans-serif'],
                            'heading': ['Poppins', 'sans-serif'],
                        },
                        animation: {
                            'fade-in': 'fadeIn 1.5s ease-in-out',
                            'float': 'float 6s ease-in-out infinite',
                            'zoom-in': 'zoomIn 0.5s ease-in-out',
                            'slide-up': 'slideUp 1s ease-in-out',
                            'pulse-slow': 'pulse 6s infinite',
                            'wave': 'wave 8s ease-in-out infinite',
                        },
                        keyframes: {
                            fadeIn: {
                                '0%': { opacity: '0' },
                                '100%': { opacity: '1' }
                            },
                            float: {
                                '0%, 100%': { transform: 'translateY(0)' },
                                '50%': { transform: 'translateY(-15px)' }
                            },
                            zoomIn: {
                                '0%': { transform: 'scale(0.9)', opacity: '0' },
                                '100%': { transform: 'scale(1)', opacity: '1' }
                            },
                            slideUp: {
                                '0%': { transform: 'translateY(50px)', opacity: '0' },
                                '100%': { transform: 'translateY(0)', opacity: '1' }
                            },
                            wave: {
                                '0%, 100%': { transform: 'rotate(-3deg)' },
                                '50%': { transform: 'rotate(3deg)' }
                            }
                        },
                        colors: {
                            'nepal-blue': '#2563eb',
                            'nepal-purple': '#7c3aed',
                            'nepal-orange': '#f97316',
                            'nepal-red': '#dc2626',
                            'nepal-gold': '#d97706',
                        }
                    }
                }
            }
        </script>
        
    </head>

    <div class="py-12 bg-gradient-to-b from-white to-gray-50 dark:from-gray-900 dark:to-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Page Header -->
            <div class="text-center mb-12 animate-fade-in">
                <h1 class="text-4xl md:text-5xl font-bold font-heading text-nepal-blue dark:text-nepal-purple mb-4">
                    Explore Nepal
                </h1>
                <p class="text-lg text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    Discover the breathtaking beauty and rich culture of Nepal
                </p>
            </div>

            <!-- Features Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl overflow-hidden border border-gray-100 dark:border-gray-700 transition-all duration-300 hover:shadow-2xl hover:-translate-y-1 animate-slide-up">
                    <div class="h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1609660062508-1ac4a930232d?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
                             alt="Himalayas" 
                             class="w-full h-full object-cover transition duration-500 hover:scale-105">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold font-heading text-nepal-blue dark:text-nepal-purple mb-2">
                            Himalayan Treks
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">
                            Experience the majestic Himalayas with our guided treks to Everest, Annapurna, and more.
                        </p>
                        <a href="#" class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-nepal-blue to-nepal-purple text-white rounded-lg hover:shadow-lg transition-all">
                            Explore Treks
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl overflow-hidden border border-gray-100 dark:border-gray-700 transition-all duration-300 hover:shadow-2xl hover:-translate-y-1 animate-slide-up" style="animation-delay: 0.1s">
                    <div class="h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1655827660902-fd200443d7b9?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
                             alt="Cultural Heritage" 
                             class="w-full h-full object-cover transition duration-500 hover:scale-105">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold font-heading text-nepal-blue dark:text-nepal-purple mb-2">
                            Cultural Heritage
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">
                            Discover Nepal's rich cultural heritage through ancient temples, festivals, and traditions.
                        </p>
                        <a href="#" class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-nepal-blue to-nepal-purple text-white rounded-lg hover:shadow-lg transition-all">
                            Explore Culture
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl overflow-hidden border border-gray-100 dark:border-gray-700 transition-all duration-300 hover:shadow-2xl hover:-translate-y-1 animate-slide-up" style="animation-delay: 0.2s">
                    <div class="h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1549888668-19281758dfbe?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
                             alt="Wildlife Safari" 
                             class="w-full h-full object-cover transition duration-500 hover:scale-105">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold font-heading text-nepal-blue dark:text-nepal-purple mb-2">
                            Wildlife Adventures
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">
                            Encounter rare wildlife including Bengal tigers and one-horned rhinos in Nepal's national parks.
                        </p>
                        <a href="#" class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-nepal-blue to-nepal-purple text-white rounded-lg hover:shadow-lg transition-all">
                            Explore Wildlife
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Additional Content -->
            <div class="mt-16 text-center animate-fade-in">
                <h2 class="text-3xl font-bold font-heading text-nepal-blue dark:text-nepal-purple mb-6">
                    More to Discover
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-md border border-gray-100 dark:border-gray-700">
                        <div class="text-nepal-blue dark:text-nepal-purple text-3xl mb-4">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <h3 class="text-lg font-bold mb-2">Local Cuisine</h3>
                        <p class="text-gray-600 dark:text-gray-400">Taste authentic Nepali dishes</p>
                    </div>
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-md border border-gray-100 dark:border-gray-700">
                        <div class="text-nepal-blue dark:text-nepal-purple text-3xl mb-4">
                            <i class="fas fa-spa"></i>
                        </div>
                        <h3 class="text-lg font-bold mb-2">Wellness Retreats</h3>
                        <p class="text-gray-600 dark:text-gray-400">Yoga and meditation programs</p>
                    </div>
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-md border border-gray-100 dark:border-gray-700">
                        <div class="text-nepal-blue dark:text-nepal-purple text-3xl mb-4">
                            <i class="fas fa-hiking"></i>
                        </div>
                        <h3 class="text-lg font-bold mb-2">Adventure Sports</h3>
                        <p class="text-gray-600 dark:text-gray-400">Paragliding, rafting and more</p>
                    </div>
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-md border border-gray-100 dark:border-gray-700">
                        <div class="text-nepal-blue dark:text-nepal-purple text-3xl mb-4">
                            <i class="fas fa-hands-helping"></i>
                        </div>
                        <h3 class="text-lg font-bold mb-2">Community Tourism</h3>
                        <p class="text-gray-600 dark:text-gray-400">Authentic local experiences</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>