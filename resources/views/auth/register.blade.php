<x-guest-layout> <head>
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
    
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-b from-white to-gray-50 dark:from-gray-900 dark:to-gray-800">
        <div class="w-full sm:max-w-md px-6 py-8 bg-white dark:bg-gray-800 shadow-xl rounded-2xl border border-gray-100 dark:border-gray-700 overflow-hidden">
            <!-- Logo -->
            <div class="flex justify-center mb-8 animate-fade-in">
                <a href="{{ route('dashboard') }}" class="flex items-center group">
                    <div class="mr-3 text-nepal-blue dark:text-nepal-purple">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 3l18 18M21 3L3 21M12 12a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold bg-gradient-to-r from-nepal-blue to-nepal-purple bg-clip-text text-transparent transition-all duration-500 group-hover:from-nepal-purple group-hover:to-nepal-blue font-heading">
                        NepalExplorer
                    </h2>
                </a>
            </div>

            <!-- Validation Errors -->
            <x-validation-errors class="mb-6 bg-nepal-red/10 dark:bg-nepal-red/20 p-4 rounded-lg border border-nepal-red/20 dark:border-nepal-red/30" />

            <form method="POST" action="{{ route('register') }}" class="space-y-6">
                @csrf

                <!-- Name -->
                <div>
                    <x-label for="name" value="{{ __('Name') }}" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1" />
                    <x-input id="name" 
                             class="block w-full rounded-lg border-gray-300 dark:border-gray-600 shadow-sm focus:ring-nepal-blue focus:border-nepal-blue dark:bg-gray-700 dark:text-gray-100 transition duration-200" 
                             type="text" 
                             name="name" 
                             :value="old('name')" 
                             required 
                             autofocus 
                             autocomplete="name" />
                </div>

                <!-- Email -->
                <div>
                    <x-label for="email" value="{{ __('Email') }}" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1" />
                    <x-input id="email" 
                             class="block w-full rounded-lg border-gray-300 dark:border-gray-600 shadow-sm focus:ring-nepal-blue focus:border-nepal-blue dark:bg-gray-700 dark:text-gray-100 transition duration-200" 
                             type="email" 
                             name="email" 
                             :value="old('email')" 
                             required 
                             autocomplete="username" />
                </div>

                <!-- Password -->
                <div class="relative">
                    <x-label for="password" value="{{ __('Password') }}" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1" />
                    <x-input id="password" 
                             class="block w-full rounded-lg border-gray-300 dark:border-gray-600 shadow-sm focus:ring-nepal-blue focus:border-nepal-blue dark:bg-gray-700 dark:text-gray-100 transition duration-200 pr-10" 
                             type="password" 
                             name="password" 
                             required 
                             autocomplete="new-password" />
                    <button type="button" 
                            onclick="togglePasswordVisibility('password', 'password-icon')" 
                            class="absolute right-3 top-9 text-gray-500 dark:text-gray-400 hover:text-nepal-blue dark:hover:text-nepal-purple">
                        <i id="password-icon" class="fas fa-eye"></i>
                    </button>
                </div>

                <!-- Confirm Password Field with Toggle -->
                <div class="relative">
                    <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1" />
                    <x-input id="password_confirmation" 
                             class="block w-full rounded-lg border-gray-300 dark:border-gray-600 shadow-sm focus:ring-nepal-blue focus:border-nepal-blue dark:bg-gray-700 dark:text-gray-100 transition duration-200 pr-10" 
                             type="password" 
                             name="password_confirmation" 
                             required 
                             autocomplete="new-password" />
                    <button type="button" 
                            onclick="togglePasswordVisibility('password_confirmation', 'confirm-password-icon')" 
                            class="absolute right-3 top-9 text-gray-500 dark:text-gray-400 hover:text-nepal-blue dark:hover:text-nepal-purple">
                        <i id="confirm-password-icon" class="fas fa-eye"></i>
                    </button>
                </div>

                <!-- Terms and Submit button remain the same -->
            </form>
        </div>
    </div>

    <script>
        function togglePasswordVisibility(inputId, iconId) {
            const input = document.getElementById(inputId);
            const icon = document.getElementById(iconId);
            
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }
    </script>
</x-guest-layout>