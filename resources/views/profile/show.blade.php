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
            <!-- Profile Header -->
            <div class="text-center mb-12 animate-fade-in">
                <h1 class="text-4xl md:text-5xl font-bold font-heading text-nepal-blue dark:text-nepal-purple mb-4">
                    Your Profile
                </h1>
                <p class="text-lg text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    Manage your account settings and personal information
                </p>
            </div>

            <!-- Profile Sections -->
            <div class="space-y-8">
                @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                    <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-xl border border-gray-100 dark:border-gray-700 animate-slide-up">
                        <h2 class="text-2xl font-bold font-heading text-nepal-blue dark:text-nepal-purple mb-6 flex items-center">
                            <i class="fas fa-user-circle mr-3"></i>
                            Profile Information
                        </h2>
                        @livewire('profile.update-profile-information-form')
                    </div>
                @endif

                @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                    <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-xl border border-gray-100 dark:border-gray-700 animate-slide-up" style="animation-delay: 0.1s">
                        <h2 class="text-2xl font-bold font-heading text-nepal-blue dark:text-nepal-purple mb-6 flex items-center">
                            <i class="fas fa-lock mr-3"></i>
                            Update Password
                        </h2>
                        @livewire('profile.update-password-form')
                    </div>
                @endif

                @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                    <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-xl border border-gray-100 dark:border-gray-700 animate-slide-up" style="animation-delay: 0.2s">
                        <h2 class="text-2xl font-bold font-heading text-nepal-blue dark:text-nepal-purple mb-6 flex items-center">
                            <i class="fas fa-shield-alt mr-3"></i>
                            Two Factor Authentication
                        </h2>
                        @livewire('profile.two-factor-authentication-form')
                    </div>
                @endif

                <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-xl border border-gray-100 dark:border-gray-700 animate-slide-up" style="animation-delay: 0.3s">
                    <h2 class="text-2xl font-bold font-heading text-nepal-blue dark:text-nepal-purple mb-6 flex items-center">
                        <i class="fas fa-laptop mr-3"></i>
                        Browser Sessions
                    </h2>
                    @livewire('profile.logout-other-browser-sessions-form')
                </div>

                @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                    <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-xl border border-gray-100 dark:border-gray-700 animate-slide-up" style="animation-delay: 0.4s">
                        <h2 class="text-2xl font-bold font-heading text-nepal-red mb-6 flex items-center">
                            <i class="fas fa-exclamation-triangle mr-3"></i>
                            Delete Account
                        </h2>
                        @livewire('profile.delete-user-form')
                    </div>
                @endif
            </div>
        </div>
    </div>

    <style>
        /* Custom styling for Jetstream components */
        .bg-white button:not([type='button']):not(.bg-nepal-blue):not(.bg-nepal-red) {
            background-color: #2563eb;
        }
        .bg-white button:not([type='button']):not(.bg-nepal-blue):not(.bg-nepal-red):hover {
            background-color: #1d4ed8;
        }
        .dark .bg-gray-800 button:not([type='button']):not(.bg-nepal-blue):not(.bg-nepal-red) {
            background-color: #7c3aed;
        }
        .dark .bg-gray-800 button:not([type='button']):not(.bg-nepal-blue):not(.bg-nepal-red):hover {
            background-color: #6d28d9;
        }
    </style>
</x-app-layout>