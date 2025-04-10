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
            <!-- Gallery Header -->
            <div class="text-center mb-12 animate-fade-in">
                <h1 class="text-4xl md:text-5xl font-bold font-heading text-nepal-blue dark:text-nepal-purple mb-4">
                    Nepal in Pictures
                </h1>
                <p class="text-lg text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    Explore the breathtaking beauty of Nepal through our photo collection
                </p>
                <div class="flex justify-center mt-6 space-x-4">
                    <button class="filter-btn active px-4 py-2 rounded-full bg-nepal-blue text-white" data-filter="all">
                        All
                    </button>
                    <button class="filter-btn px-4 py-2 rounded-full bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200" data-filter="mountains">
                        Mountains
                    </button>
                    <button class="filter-btn px-4 py-2 rounded-full bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200" data-filter="culture">
                        Culture
                    </button>
                    <button class="filter-btn px-4 py-2 rounded-full bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200" data-filter="wildlife">
                        Wildlife
                    </button>
                </div>
            </div>

            <!-- Gallery Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 gallery-grid">
                <!-- Mountain Images -->
                <div class="gallery-item mountains animate-zoom-in" data-category="mountains">
                    <div class="relative overflow-hidden rounded-2xl shadow-xl group">
                        <img src="https://images.unsplash.com/photo-1526397751294-331021109fbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1674&q=80" 
                             alt="Himalayas" 
                             class="w-full h-64 object-cover transition duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end p-6 opacity-0 group-hover:opacity-100 transition duration-300">
                            <div>
                                <h3 class="text-white font-bold text-xl">The Himalayas</h3>
                                <p class="text-gray-200">Everest Region</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gallery-item mountains animate-zoom-in" data-category="mountains" style="animation-delay: 0.1s">
                    <div class="relative overflow-hidden rounded-2xl shadow-xl group">
                        <img src="https://images.unsplash.com/photo-1609660062508-1ac4a930232d?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
                             alt="Annapurna" 
                             class="w-full h-64 object-cover transition duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end p-6 opacity-0 group-hover:opacity-100 transition duration-300">
                            <div>
                                <h3 class="text-white font-bold text-xl">Annapurna Range</h3>
                                <p class="text-gray-200">Pokhara Region</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Culture Images -->
                <div class="gallery-item culture animate-zoom-in" data-category="culture" style="animation-delay: 0.2s">
                    <div class="relative overflow-hidden rounded-2xl shadow-xl group">
                        <img src="https://media.sublimetrails.com/uploads/img/untitled-design--50-.webp"
                             alt="Kathmandu Durbar Square" 
                             class="w-full h-64 object-cover transition duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end p-6 opacity-0 group-hover:opacity-100 transition duration-300">
                            <div>
                                <h3 class="text-white font-bold text-xl">Patan Durbar Square</h3>
                                <p class="text-gray-200">UNESCO World Heritage Site</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gallery-item culture animate-zoom-in" data-category="culture" style="animation-delay: 0.3s">
                    <div class="relative overflow-hidden rounded-2xl shadow-xl group">
                        <img src="https://images.unsplash.com/photo-1566438480900-0609be27a4be?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1889&q=80" 
                             alt="Prayer Flags" 
                             class="w-full h-64 object-cover transition duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end p-6 opacity-0 group-hover:opacity-100 transition duration-300">
                            <div>
                                <h3 class="text-white font-bold text-xl">Prayer Flags</h3>
                                <p class="text-gray-200">Buddhist Tradition</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Wildlife Images -->
                <div class="gallery-item wildlife animate-zoom-in" data-category="wildlife" style="animation-delay: 0.4s">
                    <div class="relative overflow-hidden rounded-2xl shadow-xl group">
                        <img src="https://images.unsplash.com/photo-1589650696265-c0a1a0b3f112?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" 
                             alt="One-horned Rhino" 
                             class="w-full h-64 object-cover transition duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end p-6 opacity-0 group-hover:opacity-100 transition duration-300">
                            <div>
                                <h3 class="text-white font-bold text-xl">One-horned Rhino</h3>
                                <p class="text-gray-200">Chitwan National Park</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gallery-item wildlife animate-zoom-in" data-category="wildlife" style="animation-delay: 0.5s">
                    <div class="relative overflow-hidden rounded-2xl shadow-xl group">
                        <img src="https://images.unsplash.com/photo-1605559424843-9e4c228bf1c2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1064&q=80" 
                             alt="Snow Leopard" 
                             class="w-full h-64 object-cover transition duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end p-6 opacity-0 group-hover:opacity-100 transition duration-300">
                            <div>
                                <h3 class="text-white font-bold text-xl">Snow Leopard</h3>
                                <p class="text-gray-200">Himalayan Region</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Load More Button -->
            <div class="text-center mt-12 animate-fade-in">
                <button class="px-6 py-3 bg-gradient-to-r from-nepal-blue to-nepal-purple text-white font-bold rounded-full hover:shadow-lg hover:shadow-blue-500/30 transition-all transform hover:scale-105 focus:outline-none">
                    Load More Photos
                    <i class="fas fa-arrow-down ml-2"></i>
                </button>
            </div>
        </div>
    </div>

    <script>
        // Filter functionality
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.filter-btn');
            const galleryItems = document.querySelectorAll('.gallery-item');

            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Update active button
                    filterButtons.forEach(btn => btn.classList.remove('active', 'bg-nepal-blue', 'text-white'));
                    filterButtons.forEach(btn => btn.classList.add('bg-gray-200', 'dark:bg-gray-700', 'text-gray-800', 'dark:text-gray-200'));
                    
                    this.classList.add('active', 'bg-nepal-blue', 'text-white');
                    this.classList.remove('bg-gray-200', 'dark:bg-gray-700', 'text-gray-800', 'dark:text-gray-200');

                    // Filter items
                    const filterValue = this.getAttribute('data-filter');
                    
                    galleryItems.forEach(item => {
                        if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>

    <style>
        .gallery-item {
            transition: all 0.3s ease;
        }
        .filter-btn {
            transition: all 0.3s ease;
        }
    </style>
</x-app-layout>