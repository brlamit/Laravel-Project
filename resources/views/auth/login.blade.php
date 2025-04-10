<x-guest-layout><head>
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

            @session('status')
                <div class="mb-6 bg-green-100 dark:bg-green-900/30 p-4 rounded-lg border border-green-200 dark:border-green-800 text-green-700 dark:text-green-300">
                    {{ $value }}
                </div>
            @endsession

            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <!-- Email -->
                <div>
                    <x-label for="email" value="{{ __('Email') }}" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1" />
                    <x-input id="email" 
                             class="block w-full rounded-lg border-gray-300 dark:border-gray-600 shadow-sm focus:ring-nepal-blue focus:border-nepal-blue dark:bg-gray-700 dark:text-gray-100 transition duration-200" 
                             type="email" 
                             name="email" 
                             :value="old('email')" 
                             required 
                             autofocus 
                             autocomplete="username" />
                </div>

                <!-- Password -->
                <div>
                    <x-label for="password" value="{{ __('Password') }}" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1" />
                    <x-input id="password" 
                             class="block w-full rounded-lg border-gray-300 dark:border-gray-600 shadow-sm focus:ring-nepal-blue focus:border-nepal-blue dark:bg-gray-700 dark:text-gray-100 transition duration-200" 
                             type="password" 
                             name="password" 
                             required 
                             autocomplete="current-password" />
                </div>

                <!-- Remember Me -->
                <div class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" class="rounded border-gray-300 dark:border-gray-600 text-nepal-blue dark:text-nepal-purple shadow-sm focus:ring-nepal-blue dark:focus:ring-nepal-purple" />
                    <label for="remember_me" class="ms-2 text-sm text-gray-600 dark:text-gray-400">
                        {{ __('Remember me') }}
                    </label>
                </div>

                <div class="flex items-center justify-between">
                    @if (Route::has('password.request'))
                        <a class="text-sm text-nepal-blue dark:text-nepal-purple hover:underline focus:outline-none focus:ring-2 focus:ring-nepal-blue dark:focus:ring-nepal-purple rounded-md transition duration-200" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <button type="submit" class="ms-4 px-4 py-2 bg-gradient-to-r from-nepal-blue to-nepal-purple text-white font-bold rounded-lg hover:shadow-lg hover:shadow-blue-500/30 transition-all transform hover:scale-[1.02] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-nepal-blue dark:focus:ring-nepal-purple">
                        {{ __('Log in') }}
                        <i class="fas fa-sign-in-alt ml-2"></i>
                    </button>
                </div>

                @if (Route::has('register'))
                    <div class="text-center text-sm text-gray-600 dark:text-gray-400 mt-6">
                        {{ __("Don't have an account?") }}
                        <a href="{{ route('register') }}" class="text-nepal-blue dark:text-nepal-purple hover:underline font-medium">
                            {{ __('Register') }}
                        </a>
                    </div>
                @endif
            </form>
        </div>
    </div>
</x-guest-layout>