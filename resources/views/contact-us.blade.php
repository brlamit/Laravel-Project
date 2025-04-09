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
            <!-- Contact Header -->
            <div class="text-center mb-12 animate-fade-in">
                <h1 class="text-4xl md:text-5xl font-bold font-heading text-nepal-blue dark:text-nepal-purple mb-4">
                    Get In Touch
                </h1>
                <p class="text-lg text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    Have questions or ready to plan your Nepalese adventure? We'd love to hear from you!
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-12 items-start">
                <!-- Contact Form -->
                <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-xl border border-gray-100 dark:border-gray-700 animate-slide-up">
                    <h2 class="text-2xl font-bold font-heading text-nepal-blue dark:text-nepal-purple mb-6">
                        Send Us a Message
                    </h2>
                    <form method="POST" action="/contact" class="space-y-6">
                        @csrf
                        <div class="space-y-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Full Name</label>
                                <input type="text" id="name" name="name" required 
                                       class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-nepal-blue focus:border-transparent dark:bg-gray-700 dark:text-gray-100 transition duration-200">
                            </div>
                            
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Email Address</label>
                                <input type="email" id="email" name="email" required 
                                       class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-nepal-blue focus:border-transparent dark:bg-gray-700 dark:text-gray-100 transition duration-200">
                            </div>
                            
                            <div>
                                <label for="subject" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Subject</label>
                                <select id="subject" name="subject" 
                                        class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-nepal-blue focus:border-transparent dark:bg-gray-700 dark:text-gray-100 transition duration-200">
                                    <option value="general">General Inquiry</option>
                                    <option value="booking">Trip Booking</option>
                                    <option value="custom">Custom Tour Request</option>
                                    <option value="feedback">Feedback</option>
                                </select>
                            </div>
                            
                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Your Message</label>
                                <textarea id="message" name="message" rows="5" required 
                                          class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-nepal-blue focus:border-transparent dark:bg-gray-700 dark:text-gray-100 transition duration-200"></textarea>
                            </div>
                            
                            <div class="pt-2">
                                <button type="submit" 
                                        class="w-full bg-gradient-to-r from-nepal-blue to-nepal-purple text-white font-bold py-3 px-6 rounded-lg hover:shadow-lg hover:shadow-blue-500/30 transition-all transform hover:scale-[1.02] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-nepal-blue">
                                    Send Message
                                    <i class="fas fa-paper-plane ml-2"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Contact Info -->
                <div class="space-y-8 animate-zoom-in">
                    <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-xl border border-gray-100 dark:border-gray-700">
                        <h2 class="text-2xl font-bold font-heading text-nepal-blue dark:text-nepal-purple mb-6">
                            Contact Information
                        </h2>
                        
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1 text-nepal-purple dark:text-nepal-blue text-xl">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-medium text-gray-800 dark:text-gray-200">Our Office</h3>
                                    <p class="text-gray-600 dark:text-gray-400">
                                        Pokhara<br>
                                        Nepal
                                    </p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1 text-nepal-purple dark:text-nepal-blue text-xl">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-medium text-gray-800 dark:text-gray-200">Phone</h3>
                                    <p class="text-gray-600 dark:text-gray-400">
                                        +977-1-1234567<br>
                                        +977-9801234567 (Mobile)
                                    </p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1 text-nepal-purple dark:text-nepal-blue text-xl">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-medium text-gray-800 dark:text-gray-200">Email</h3>
                                    <p class="text-gray-600 dark:text-gray-400">
                                        info@nepalexplorer.com<br>
                                        bookings@nepalexplorer.com
                                    </p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1 text-nepal-purple dark:text-nepal-blue text-xl">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-medium text-gray-800 dark:text-gray-200">Office Hours</h3>
                                    <p class="text-gray-600 dark:text-gray-400">
                                        Sunday-Friday: 9:00 AM - 6:00 PM<br>
                                        Saturday: Closed
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Social Media -->
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-xl border border-gray-100 dark:border-gray-700">
                        <h3 class="text-lg font-bold font-heading text-nepal-blue dark:text-nepal-purple mb-4">Follow Us</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-nepal-blue text-white hover:bg-nepal-purple transition-colors">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-nepal-blue text-white hover:bg-nepal-purple transition-colors">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-nepal-blue text-white hover:bg-nepal-purple transition-colors">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-nepal-blue text-white hover:bg-nepal-purple transition-colors">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Map Section -->
            <div class="mt-16 bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-xl border border-gray-100 dark:border-gray-700 animate-fade-in">
                <h2 class="text-2xl font-bold font-heading text-nepal-blue dark:text-nepal-purple mb-6 text-center">
                    Find Us on the Map
                </h2>
                <div class="aspect-w-16 aspect-h-9 rounded-xl overflow-hidden">
                    <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.423091623479!2d83.98559321506163!3d28.20953898258964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399594d4e6b9b3b1%3A0x7c8b8b8b8b8b8b8b!2sPokhara%2C%20Nepal!5e0!3m2!1sen!2snp!4v1697040000000!5m2!1sen!2snp" 
                    width="100%" 
                        height="450" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy"
                        class="rounded-lg shadow-md"
                        title="NepalExplorer Location">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>