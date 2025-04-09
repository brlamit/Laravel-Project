
  
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
        
    </head><x-app-layout>


    <div class="py-12 bg-gradient-to-b from-white to-gray-50 dark:from-gray-900 dark:to-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Hero Section -->
            <div class="text-center mb-16 animate-fade-in">
                <h1 class="text-4xl md:text-5xl font-bold font-heading text-nepal-blue dark:text-nepal-purple mb-4">
                    Discover Nepal With Us
                </h1>
                <p class="text-lg text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    NepalExplorer is your trusted guide to the breathtaking landscapes, rich culture, and unforgettable adventures of Nepal.
                </p>
            </div>

            <!-- Mission Section -->
            <div class="grid md:grid-cols-2 gap-12 items-center mb-20">
                <div class="animate-slide-up">
                    <h2 class="text-3xl font-bold font-heading text-nepal-blue dark:text-nepal-purple mb-6">
                        Our Mission
                    </h2>
                    <p class="text-gray-600 dark:text-gray-300 mb-6">
                        To provide authentic, immersive travel experiences that showcase the true beauty of Nepal while supporting local communities and preserving the natural environment.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1 text-nepal-purple dark:text-nepal-blue">
                                <i class="fas fa-mountain fa-lg"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-800 dark:text-gray-200">Sustainable Tourism</h3>
                                <p class="text-gray-600 dark:text-gray-400">
                                    We're committed to eco-friendly practices that protect Nepal's natural wonders.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1 text-nepal-purple dark:text-nepal-blue">
                                <i class="fas fa-hands-helping fa-lg"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-800 dark:text-gray-200">Community Support</h3>
                                <p class="text-gray-600 dark:text-gray-400">
                                    A portion of every trip goes back to local communities and conservation efforts.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative animate-zoom-in">
                    <div class="rounded-xl overflow-hidden shadow-xl border-4 border-white dark:border-gray-700">
                        <img src="https://images.unsplash.com/photo-1526397751294-331021109fbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1674&q=80" 
                             alt="Nepal landscape" 
                             class="w-full h-auto object-cover">
                    </div>
                    <div class="absolute -bottom-6 -right-6 bg-nepal-gold text-white px-4 py-2 rounded-lg shadow-lg font-medium">
                        <i class="fas fa-award mr-2"></i> Certified Guides
                    </div>
                </div>
            </div>

            <!-- Team Section -->
            <div class="text-center mb-20">
                <h2 class="text-3xl font-bold font-heading text-nepal-blue dark:text-nepal-purple mb-12">
                    Meet Our Team
                </h2>
                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Team Member 1 -->
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-md hover:shadow-xl transition-shadow duration-300 animate-float">
                        <div class="w-32 h-32 mx-auto mb-4 rounded-full overflow-hidden border-4 border-nepal-blue dark:border-nepal-purple">
                            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Team member" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 dark:text-gray-200 mb-1">Anjali Sharma</h3>
                        <p class="text-nepal-purple dark:text-nepal-blue mb-4">Founder & CEO</p>
                        <p class="text-gray-600 dark:text-gray-300">
                            Born and raised in Kathmandu, Anjali has been sharing Nepal's wonders with travelers for over 15 years.
                        </p>
                        <div class="flex justify-center space-x-4 mt-4 text-nepal-purple dark:text-nepal-blue">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>

                    <!-- Team Member 2 -->
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-md hover:shadow-xl transition-shadow duration-300 animate-float" style="animation-delay: 0.2s">
                        <div class="w-32 h-32 mx-auto mb-4 rounded-full overflow-hidden border-4 border-nepal-blue dark:border-nepal-purple">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Team member" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 dark:text-gray-200 mb-1">Rajiv Gurung</h3>
                        <p class="text-nepal-purple dark:text-nepal-blue mb-4">Head Guide</p>
                        <p class="text-gray-600 dark:text-gray-300">
                            With 20+ Everest summits, Rajiv knows the Himalayas like the back of his hand.
                        </p>
                        <div class="flex justify-center space-x-4 mt-4 text-nepal-purple dark:text-nepal-blue">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>

                    <!-- Team Member 3 -->
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-md hover:shadow-xl transition-shadow duration-300 animate-float" style="animation-delay: 0.4s">
                        <div class="w-32 h-32 mx-auto mb-4 rounded-full overflow-hidden border-4 border-nepal-blue dark:border-nepal-purple">
                            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Team member" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 dark:text-gray-200 mb-1">Priya Thapa</h3>
                        <p class="text-nepal-purple dark:text-nepal-blue mb-4">Cultural Director</p>
                        <p class="text-gray-600 dark:text-gray-300">
                            Priya ensures every traveler experiences the authentic heart of Nepali culture.
                        </p>
                        <div class="flex justify-center space-x-4 mt-4 text-nepal-purple dark:text-nepal-blue">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Values Section -->
            <div class="bg-nepal-blue dark:bg-nepal-purple rounded-2xl p-8 md:p-12 text-white mb-20 animate-wave">
                <h2 class="text-3xl font-bold font-heading mb-8 text-center">Our Core Values</h2>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="text-center p-6 bg-white/10 rounded-xl backdrop-blur-sm">
                        <div class="text-4xl mb-4 text-nepal-gold">
                            <i class="fas fa-hand-holding-heart"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Respect</h3>
                        <p>For people, cultures, and the environment we explore.</p>
                    </div>
                    <div class="text-center p-6 bg-white/10 rounded-xl backdrop-blur-sm">
                        <div class="text-4xl mb-4 text-nepal-gold">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Sustainability</h3>
                        <p>We tread lightly and give back more than we take.</p>
                    </div>
                    <div class="text-center p-6 bg-white/10 rounded-xl backdrop-blur-sm">
                        <div class="text-4xl mb-4 text-nepal-gold">
                            <i class="fas fa-smile"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Joy</h3>
                        <p>Creating unforgettable, joyful experiences is at our core.</p>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="text-center animate-pulse-slow">
                <h2 class="text-3xl font-bold font-heading text-nepal-blue dark:text-nepal-purple mb-6">
                    Ready to Explore Nepal?
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-300 mb-8 max-w-2xl mx-auto">
                    Join us on an adventure that will leave you with memories to last a lifetime.
                </p>
                <a href="{{ route('contact-us') }}" class="inline-block px-8 py-3 bg-gradient-to-r from-nepal-blue to-nepal-purple text-white font-bold rounded-full hover:shadow-lg hover:shadow-blue-500/30 transition-all transform hover:scale-105">
                    Contact Us Today
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
   

