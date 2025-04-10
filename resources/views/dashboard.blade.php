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
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-black/10 z-10"></div>
            
            <!-- Animated Mountain Silhouette -->
            <div class="absolute bottom-0 left-0 right-0 h-40 bg-[url('https://www.transparentpng.com/thumb/mountain/mountain-silhouette-png-5.png')] bg-cover bg-bottom opacity-20 animate-wave z-10"></div>
            
            <!-- Hero Content -->
            <div class="relative z-20 h-full flex flex-col items-center justify-center px-6 text-center">
            <div class="max-w-4xl space-y-6 animate-fade-in">
                    <div class="inline-block px-4 py-2 mb-6 bg-white/10 backdrop-blur-sm rounded-full border border-white/20">
                        <span class="text-sm font-medium text-white/90 tracking-widest">EXPLORE THE HIMALAYAS</span>
                    </div>
                    
                    <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold text-white mb-4 leading-tight font-heading">
                        <span class="bg-clip-text text-transparent bg-gradient-to-r from-white to-[#a5b4fc] drop-shadow-2xl">Nepal's Sacred</span>
                        <span class="block mt-2 text-white">Horizons</span>
                    </h1>
                    
                    <p class="text-xl md:text-2xl text-white/90 font-medium max-w-2xl mx-auto leading-relaxed">
                        Where Himalayan peaks meet ancient spiritual legacy
                    </p>
                    
                    <div class="pt-8 flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="#explore" class="px-8 py-3.5 bg-white text-[#1b1b18] font-semibold rounded-full hover:bg-gray-100 hover:shadow-lg transition-all duration-300 hover:scale-[1.03] flex items-center justify-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg>
                            Explore Nepal
                        </a>
                        <a href="#gallery" class="px-8 py-3.5 border-2 border-white text-white font-semibold rounded-full hover:bg-white/10 hover:shadow-lg transition-all duration-300 hover:scale-[1.03] flex items-center justify-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                <polyline points="21 15 16 10 5 21"></polyline>
                            </svg>
                            View Gallery
                        </a>
                    </div>
                </div>
                
                <!-- Scroll Indicator -->
                <div class="absolute bottom-10 animate-float">
                    <a href="#about" class="flex flex-col items-center text-white/80 hover:text-white transition-colors">
                        <span class="mb-2 text-sm tracking-wider">SCROLL TO EXPLORE</span>
                        <div class="w-8 h-12 border-2 border-white/60 rounded-full flex justify-center p-1">
                            <div class="w-1 h-2 bg-white/80 rounded-full animate-pulse-slow"></div>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="py-20 bg-white dark:bg-[#0a0a0a]">
            <div class="container mx-auto px-6 lg:px-8">
                <div class="text-center mb-16">
                    <span class="inline-block px-4 py-1.5 bg-nepal-blue/10 text-nepal-blue dark:text-nepal-purple rounded-full text-sm font-medium mb-4">DISCOVER NEPAL</span>
                    <h2 class="text-4xl md:text-5xl text-white font-bold text-center mb-6 font-heading">Nepal's Natural & Cultural Wonders</h2>
                    <p class="text-lg text-center max-w-3xl mx-auto text-gray-600 dark:text-gray-400 leading-relaxed">
                        From the majestic Himalayas to the vibrant culture, Nepal offers breathtaking landscapes, ancient temples, and warm hospitality that will leave you spellbound.
                    </p>
                </div>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Card 1 -->
                    <div class="group overflow-hidden rounded-2xl shadow-xl hover:shadow-2xl transition-shadow duration-500 bg-white dark:bg-gray-900">
                        <div class="relative overflow-hidden h-72">
                            <img 
                                src="https://images.unsplash.com/photo-1609660062508-1ac4a930232d?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
                                alt="Mount Everest"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                            >
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
                            <span class="absolute top-4 right-4 bg-nepal-red text-white px-3 py-1 rounded-full text-xs font-bold">ADVENTURE</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2 font-heading">Mount Everest</h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-4">The highest peak in the world at 8,848 meters, a must-visit for adventurers and trekkers.</p>
                            <a href="#" class="inline-flex items-center text-nepal-blue dark:text-nepal-purple font-medium group">
                                Explore more
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-1 transition-transform group-hover:translate-x-1">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Card 2 -->
                    <div class="group overflow-hidden rounded-2xl shadow-xl hover:shadow-2xl transition-shadow duration-500 bg-white dark:bg-gray-900">
                        <div class="relative overflow-hidden h-72">
                            <img 
                                src="https://media.sublimetrails.com/uploads/img/untitled-design--50-.webp" 
                                alt="Patan Durbar Square"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                            >
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
                            <span class="absolute top-4 right-4 bg-nepal-gold text-white px-3 py-1 rounded-full text-xs font-bold">CULTURE</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2 font-heading">Patan Durbar Square</h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-4">A UNESCO World Heritage Site showcasing Nepal's rich history and Newari architecture.</p>
                            <a href="#" class="inline-flex items-center text-nepal-blue dark:text-nepal-purple font-medium group">
                                Explore more
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-1 transition-transform group-hover:translate-x-1">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Card 3 -->
                    <div class="group overflow-hidden rounded-2xl shadow-xl hover:shadow-2xl transition-shadow duration-500 bg-white dark:bg-gray-900">
                        <div class="relative overflow-hidden h-72">
                            <img 
                                src="https://youimg1.tripcdn.com/target/100b1c000001dks1y8A7D.jpg?proc=source%2ftrip" 
                                alt="Phewa Lake"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                            >
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
                            <span class="absolute top-4 right-4 bg-nepal-blue text-white px-3 py-1 rounded-full text-xs font-bold">NATURE</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2 font-heading">Phewa Lake</h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-4">A serene lake in Pokhara, perfect for boating and relaxation with Annapurna views.</p>
                            <a href="#" class="inline-flex items-center text-nepal-blue dark:text-nepal-purple font-medium group">
                                Explore more
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-1 transition-transform group-hover:translate-x-1">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Mountain & Temple Section -->
        <section class="py-20 bg-gradient-to-br from-cyan-900/90 via-indigo-900/90 to-purple-900/90">
            <div class="container mx-auto px-6 flex flex-col md:flex-row gap-12 items-center">
                <div class="md:w-1/2 relative group">
                    <div class="absolute -bottom-6 -right-6 bg-nepal-red text-white p-6 rounded-xl shadow-2xl z-10 animate-pulse-slow">
                        <p class="font-bold text-xs uppercase tracking-wider">Altitude</p>
                        <p class="text-2xl font-bold font-heading">12,467ft</p>
                    </div>
                    <div class="absolute -top-6 -left-6 bg-nepal-gold text-white p-4 rounded-xl shadow-2xl z-10 rotate-6">
                        <p class="font-bold text-xs uppercase tracking-wider">Sacred Site</p>
                    </div>
                    <img src="https://th.bing.com/th/id/OIP.Kgn8WP3TjZ7hzm2CC-T6rgHaEn?rs=1&pid=ImgDetMain" 
                        alt="Muktinath Temple"
                        class="rounded-2xl shadow-2xl border-8 border-amber-400/30 transform transition-transform duration-700 group-hover:scale-105"
                    >      
                </div>
                
                <div class="md:w-1/2 text-rose-50">
                    <span class="inline-block px-3 py-1 bg-white/10 backdrop-blur-sm rounded-full text-sm font-medium mb-4">SPIRITUAL JOURNEY</span>
                    <h2 class="text-4xl md:text-5xl font-bold mb-6 font-heading">Muktinath Temple</h2>
                    <p class="text-lg mb-6 leading-relaxed">Sacred to both Hindus and Buddhists, this high-altitude sanctuary at 3,710 meters offers spiritual awakening amidst snow-capped peaks. The temple is one of the eight sacred shrines known as Svayam Vyakta Kshetras.</p>
                    
                    <div class="grid grid-cols-2 gap-4 mb-8">
                        <div class="bg-white/5 p-4 rounded-lg backdrop-blur-sm border border-white/10">
                            <p class="font-bold text-amber-300 mb-1">Hindu Belief</p>
                            <p class="text-sm">One of 108 Divya Desams</p>
                        </div>
                        <div class="bg-white/5 p-4 rounded-lg backdrop-blur-sm border border-white/10">
                            <p class="font-bold text-amber-300 mb-1">Buddhist Name</p>
                            <p class="text-sm">Chumig Gyatsa</p>
                        </div>
                    </div>
                    
                    <div class="bg-amber-400/20 p-6 rounded-xl border border-amber-400/30">
                        <p class="font-bold text-amber-300 mb-2 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="12" y1="16" x2="12" y2="12"></line>
                                <line x1="12" y1="8" x2="12.01" y2="8"></line>
                            </svg>
                            Did you know?
                        </p>
                        <p>The temple contains sacred Shaligram stones considered natural embodiments of Lord Vishnu, formed by fossilized ammonite mollusks.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Cultural Festival Banner -->
        <section class="py-20 bg-[url('https://images.unsplash.com/photo-1605000797499-95a51c5269ae?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] bg-cover bg-center">
            <div class="container mx-auto px-6  text-center">
                <div class="max-w-full mx-auto bg-white/90 dark:bg-gray-900/90 backdrop-blur-sm p-8 rounded-2xl shadow-xl">
                    <span class="inline-block px-3 py-1 bg-nepal-orange/10 text-nepal-orange dark:text-nepal-gold rounded-full text-sm font-medium mb-4">FESTIVALS</span>
                    <h3 class="text-3xl font-bold text-gray-900 dark:text-white mb-6 font-heading">Experience Living Traditions</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-8">Nepal's vibrant festivals reflect its rich cultural tapestry, blending Hindu and Buddhist traditions with ancient animist practices.</p>
                    
                    <div class="grid md:grid-cols-3 gap-6">
                        <!-- Festival 1 -->
                        <div class="p-6 bg-white dark:bg-gray-800 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 group">
                            <div class="w-16 h-16 bg-nepal-red/10 text-nepal-red dark:text-nepal-orange rounded-full flex items-center justify-center mx-auto mb-4 transition-colors duration-300 group-hover:bg-nepal-red/20">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 2a3 3 0 0 0-3 3v7a3 3 0 0 0 6 0V5a3 3 0 0 0-3-3z"></path>
                                    <path d="M19 10v2a7 7 0 0 1-14 0v-2"></path>
                                    <line x1="12" y1="19" x2="12" y2="22"></line>
                                </svg>
                            </div>
                            <p class="text-xl text-gray-900 dark:text-white font-medium mb-1">Holi Festival</p>
                            <p class="text-nepal-orange dark:text-nepal-gold text-sm mb-2">March Color Festival</p>
                            <p class="text-gray-500 dark:text-gray-400 text-sm">Celebration of colors marking the arrival of spring</p>
                        </div>
                        
                        <!-- Festival 2 -->
                        <div class="p-6 bg-white dark:bg-gray-800 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 group">
                            <div class="w-16 h-16 bg-nepal-blue/10 text-nepal-blue dark:text-nepal-purple rounded-full flex items-center justify-center mx-auto mb-4 transition-colors duration-300 group-hover:bg-nepal-blue/20">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                                </svg>
                            </div>
                            <p class="text-xl text-gray-900 dark:text-white font-medium mb-1">Dashain</p>
                            <p class="text-nepal-orange dark:text-nepal-gold text-sm mb-2">October Celebrations</p>
                            <p class="text-gray-500 dark:text-gray-400 text-sm">Longest and most auspicious Hindu festival in Nepal</p>
                        </div>
                        
                        <!-- Festival 3 -->
                        <div class="p-6 bg-white dark:bg-gray-800 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 group">
                            <div class="w-16 h-16 bg-nepal-purple/10 text-nepal-purple rounded-full flex items-center justify-center mx-auto mb-4 transition-colors duration-300 group-hover:bg-nepal-purple/20">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                                    <line x1="9" y1="9" x2="9.01" y2="9"></line>
                                    <line x1="15" y1="9" x2="15.01" y2="9"></line>
                                </svg>
                            </div>
                            <p class="text-xl text-gray-900 dark:text-white font-medium mb-1">Buddha Jayanti</p>
                            <p class="text-nepal-orange dark:text-nepal-gold text-sm mb-2">May Processions</p>
                            <p class="text-gray-500 dark:text-gray-400 text-sm">Celebration of Buddha's birth, enlightenment and death</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="py-20 bg-gray-50 dark:bg-gray-900/50">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <span class="inline-block px-4 py-1.5 bg-nepal-purple/10 text-nepal-purple rounded-full text-sm font-medium mb-4">TRAVELER STORIES</span>
                    <h2 class="text-4xl md:text-5xl font-bold text-center mb-6 font-heading">What Visitors Say</h2>
                    <p class="text-lg text-center max-w-3xl mx-auto text-gray-600 dark:text-gray-400 leading-relaxed">
                        Hear from travelers who've experienced the magic of Nepal firsthand.
                    </p>
                </div>
                
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Testimonial 1 -->
                    <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                                <img src="https://randomuser.me/api/portraits/women/43.jpg" alt="Sarah Johnson" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h4 class="font-bold">Sarah Johnson</h4>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Australia</p>
                            </div>
                        </div>
                        <div class="text-gray-600 dark:text-gray-300 mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-nepal-blue dark:text-nepal-purple w-6 h-6 mb-2">
                                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                            </svg>
                            <p class="italic">"Trekking to Everest Base Camp was the adventure of a lifetime. The stunning Himalayan views combined with the warm hospitality of the Sherpa people made this an unforgettable experience."</p>
                        </div>
                        <div class="flex text-amber-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                            </svg>
                        </div>
                    </div>
                    
                    <!-- Testimonial 2 -->
                    <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Michael Chen" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h4 class="font-bold">Michael Chen</h4>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Canada</p>
                            </div>
                        </div>
                        <div class="text-gray-600 dark:text-gray-300 mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-nepal-blue dark:text-nepal-purple w-6 h-6 mb-2">
                                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                            </svg>
                            <p class="italic">"The cultural heritage of Kathmandu Valley is incredible. The ancient temples, intricate wood carvings, and living goddess tradition fascinated me beyond words."</p>
                        </div>
                        <div class="flex text-amber-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon> 
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                            </svg>
                        </div>
                    </div>
                                       <!-- Testimonial 3 -->
                                       <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                                <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Priya Sharma" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h4 class="font-bold">Priya Sharma</h4>
                                <p class="text-sm text-gray-500 dark:text-gray-400">India</p>
                            </div>
                        </div>
                        <div class="text-gray-600 dark:text-gray-300 mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-nepal-blue dark:text-nepal-purple w-6 h-6 mb-2">
                                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                            </svg>
                            <p class="italic">"The peace and spirituality of Lumbini, Buddha's birthplace, was transformative. Waking up to monks chanting at dawn is an experience I'll cherish forever."</p>
                        </div>
                        <div class="flex text-amber-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>

      <!-- Call to Action Section -->
<section class="py-28 text-white relative overflow-hidden">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1581995258500-5bcaaaa484a8?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
             alt="Himalayan mountain view with prayer flags"
             class="w-full h-full object-cover object-center"
             loading="lazy">
        <div class="absolute inset-0 bg-gradient-to-br from-nepal-blue/70 via-nepal-purple/60 to-nepal-red/50"></div>
    </div>
    
    <!-- Animated elements -->
    <div class="absolute inset-0 overflow-hidden">
        <!-- Floating prayer flags -->
        <div class="absolute top-1/4 left-10 opacity-40 animate-float">
            <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                <path d="M3 12h18M5 6h14M7 18h10"></path>
            </svg>
        </div>
        <div class="absolute top-1/3 right-16 opacity-40 animate-float animation-delay-1000">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                <path d="M3 12h18M5 6h14M7 18h10"></path>
            </svg>
        </div>
        
        <!-- Subtle snow animation -->
        <div class="absolute inset-0 bg-[url('https://www.transparentpng.com/thumb/snow/snow-png-image-5.png')] opacity-10 mix-blend-overlay"></div>
    </div>
    
    <div class="container mx-auto px-6 text-center relative z-10">
        <!-- Decorative elements -->
        <div class="flex justify-center mb-6">
            <div class="w-16 h-1 bg-amber-400 rounded-full"></div>
        </div>
        
        <h2 class="text-4xl md:text-6xl font-extrabold mb-6 font-heading">
            <span class="bg-clip-text text-transparent bg-gradient-to-r from-white to-amber-200 drop-shadow-xl">
                Embark on Your Nepalese Adventure
            </span>
        </h2>
        
        <p class="text-xl md:text-2xl mb-10 max-w-3xl mx-auto leading-relaxed text-white/90">
            Discover the beauty, culture, and adventure of Nepal. Start your journey today and create memories that last a lifetime.
        </p>
        
        <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
            <a href="{{ route('register') }}" 
               class="px-10 py-4 bg-white text-nepal-blue font-bold rounded-full shadow-lg hover:bg-gray-100 hover:shadow-xl transition-all duration-300 hover:scale-105 flex items-center gap-3 group backdrop-blur-sm bg-white/90">
                <span class="relative">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="group-hover:animate-bounce">
                        <path d="M12 20v-6M6 12l6-6 6 6"></path>
                    </svg>
                </span>
                <span class="relative after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-nepal-blue after:scale-x-0 after:transition-transform after:duration-300 group-hover:after:scale-x-100">
                    Create Account
                </span>
            </a>
            
            <span class="text-white/70 hidden sm:block">or</span>
            
            <a href="#contact" 
               class="px-10 py-4 border-2 border-white/80 text-white font-bold rounded-full shadow-lg hover:bg-white/10 hover:border-white hover:shadow-xl transition-all duration-300 hover:scale-105 flex items-center gap-3 group backdrop-blur-sm bg-white/10">
                <span class="relative">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="group-hover:animate-pulse">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                        <polyline points="17 8 12 3 7 8"></polyline>
                        <line x1="12" y1="3" x2="12" y2="15"></line>
                    </svg>
                </span>
                <span class="relative after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-white after:scale-x-0 after:transition-transform after:duration-300 group-hover:after:scale-x-100">
               Contact Us
                </span>
            </a>
        </div>
        
        <!-- Trust indicators -->
        <div class="mt-12 flex flex-col sm:flex-row justify-center items-center gap-6 text-white/80 text-sm backdrop-blur-sm bg-black/10 rounded-full py-3 px-6 max-w-max mx-auto">
            <div class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                </svg>
                <span>5,000+ Happy Travelers</span>
            </div>
            <div class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 2L15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2z"></path>
                </svg>
                <span>4.9/5 Rating</span>
            </div>
            <div class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"></circle>
                    <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                    <line x1="12" y1="17" x2="12.01" y2="17"></line>
                </svg>
                <span>24/7 Support</span>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-gradient-to-b from-gray-900 to-gray-800 text-white pt-16 pb-8">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-10">
            <!-- Brand Column -->
            <div class="md:col-span-2">
                <div class="mb-8">
                <a href="{{ route('dashboard') }}" class="flex items-center group">
                    <div class="mr-3 text-nepal-blue">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 3l18 18M21 3L3 21M12 12a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold bg-gradient-to-r from-nepal-blue to-nepal-purple bg-clip-text text-transparent transition-all duration-500 group-hover:from-nepal-purple group-hover:to-nepal-blue font-heading">
                        NepalExplorer
                    </h2>
                </a>  
                </div>
                <p class="text-gray-300 mb-6 leading-relaxed">
                    Discover the majestic Himalayas, ancient temples, and rich cultural heritage of Nepal with our expert guides and curated experiences.
                </p>
                <div class="flex gap-5">
                    <a href="#" class="text-gray-400 hover:text-orange-400 hover:scale-110 transition-all duration-300">
                        <i class="fab fa-facebook text-2xl"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-orange-400 hover:scale-110 transition-all duration-300">
                        <i class="fab fa-instagram text-2xl"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-orange-400 hover:scale-110 transition-all duration-300">
                        <i class="fab fa-twitter text-2xl"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-orange-400 hover:scale-110 transition-all duration-300">
                        <i class="fab fa-youtube text-2xl"></i>
                    </a>
                </div>
            </div>
            
            <!-- Quick Links Column -->
            <div>
                <h3 class="text-xl font-semibold mb-6 font-heading border-b border-orange-400 pb-2 inline-block">Explore</h3>
                <ul class="space-y-3">
                    <li>
                        <a href="#" class="text-gray-300 hover:text-orange-400 transition-colors flex items-center group">
                            <span class="w-2 h-2 bg-orange-400 rounded-full mr-2 opacity-0 group-hover:opacity-100 transition-opacity"></span>
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="#about" class="text-gray-300 hover:text-orange-400 transition-colors flex items-center group">
                            <span class="w-2 h-2 bg-orange-400 rounded-full mr-2 opacity-0 group-hover:opacity-100 transition-opacity"></span>
                            About Nepal
                        </a>
                    </li>

                    <li>
                        <a href="#destinations" class="text-gray-300 hover:text-orange-400 transition-colors flex items-center group">
                            <span class="w-2 h-2 bg-orange-400 rounded-full mr-2 opacity-0 group-hover:opacity-100 transition-opacity"></span>
                            Destinations
                        </a>
                    </li>

                    <li>
                        <a href="#treks" class="text-gray-300 hover:text-orange-400 transition-colors flex items-center group">
                            <span class="w-2 h-2 bg-orange-400 rounded-full mr-2 opacity-0 group-hover:opacity-100 transition-opacity"></span>
                            Treks & Tours
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('gallery') }}"
                        class="transition-colors flex items-center group
                                {{ request()->routeIs('gallery') 
                                        ? 'text-nepal-blue dark:text-nepal-purple font-medium' 
                                        : 'text-gray-300 hover:text-orange-400 dark:hover:text-orange-400' }}">
                            <span class="w-2 h-2 bg-orange-400 rounded-full mr-2 opacity-0 group-hover:opacity-100 transition-opacity"></span>
                            {{ __('Gallery') }}
                        </a>
                    </li>
                </ul>
            </div>
            
            <!-- Map Column - Increased Size -->
            <div class="md:row-span-2"> <!-- Span two rows -->
                <h3 class="text-xl font-semibold mb-6 font-heading border-b border-orange-400 pb-2 inline-block">Find Us</h3>
                <div class="w-full h-64 rounded-lg overflow-hidden shadow-lg transform hover:shadow-xl hover:scale-[1.02] transition-all duration-300 border-2 border-gray-700 hover:border-orange-400">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.423091623479!2d83.98559321506163!3d28.20953898258964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399594d4e6b9b3b1%3A0x7c8b8b8b8b8b8b8b!2sPokhara%2C%20Nepal!5e0!3m2!1sen!2snp!4v1697040000000!5m2!1sen!2snp" 
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
            
            <!-- Contact Column - Moved Up -->
            <div class="md:-mt-4"> <!-- Negative margin to pull up -->
                <h3 class="text-xl font-semibold mb-6 font-heading border-b border-orange-400 pb-2 inline-block">Contact</h3>
                <address class="text-gray-300 not-italic space-y-3">
                    <p class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-orange-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                        </svg>
                        Pokhara, Nepal
                    </p>
                    <p class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-orange-400" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                        </svg>
                        +977 9800000002
                    </p>
                    <p class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-orange-400" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                        </svg>
                        info@nepalexplorer.com
                    </p>
                </address>
               
            </div>
        </div>
        
        <!-- Bottom Section -->
        <div class="border-t border-gray-700 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
            <p class="text-gray-200 text-sm mb-4 md:mb-0">
                &copy; 2025 NepalExplorer. All rights reserved. 
            </p>
            <div class="flex gap-6">
                <a href="#" class="text-gray-200 hover:text-orange-400 text-sm transition-colors">Privacy Policy</a>
                <a href="#" class="text-gray-200 hover:text-orange-400 text-sm transition-colors">Terms of Service</a>
                <a href="#" class="text-gray-200 hover:text-orange-400 text-sm transition-colors">Sitemap</a>
            </div>
        </div>
    </div>
</footer>
   

</x-app-layout>
