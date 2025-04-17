<x-app-layout> <head>
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
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header with Create Button -->
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-3xl font-bold text-gray-900 font-heading">
                    <i class="fas fa-map-marked-alt text-primary-600 mr-3"></i>
                    Our Tour Packages
                </h1>
                <a href="{{ route('tourpackages.create') }}" 
                   class="bg-gradient-to-r from-primary-600 to-secondary-600 text-white px-6 py-3 rounded-lg shadow hover:shadow-lg transition duration-300 flex items-center">
                    <i class="fas fa-plus-circle mr-2"></i> Add New Package
                </a>
            </div>

            <!-- Success Message -->
            @if(session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded animate-fade-in">
                    <div class="flex items-center">
                        <i class="fas fa-check-circle mr-2"></i>
                        <p>{{ session('success') }}</p>
                    </div>
                </div>
            @endif

            <!-- Package Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($packages as $package)
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300 animate-slide-up" 
                     style="animation-delay: {{ $loop->index * 0.1 }}s">
                    <!-- Package Image -->
                    <div class="h-48 overflow-hidden">
                        <img src="{{ asset('storage/'.$package->PackageImage) }}" 
                             alt="{{ $package->PackageName }}"
                             class="w-full h-full object-cover hover:scale-105 transition duration-500">
                    </div>

                    <!-- Package Details -->
                    <div class="p-6">
                        <!-- Badge -->
                        <span class="inline-block px-3 py-1 text-xs font-semibold rounded-full 
                                    {{ $package->PackageType === 'Adventure' ? 'bg-red-100 text-red-800' : 
                                       ($package->PackageType === 'Cultural' ? 'bg-blue-100 text-blue-800' : 
                                       'bg-purple-100 text-purple-800') }}">
                            {{ $package->PackageType }}
                        </span>

                        <h3 class="mt-2 text-xl font-bold text-gray-900 font-heading">{{ $package->PackageName }}</h3>
                        <p class="mt-1 text-gray-600 flex items-center">
                            <i class="fas fa-map-marker-alt text-primary-600 mr-2"></i>
                            {{ $package->PackageLocation }}
                        </p>

                        <!-- Features (truncated) -->
                        <div class="mt-3">
                            @foreach(explode(',', $package->PackageFetures) as $feature)
                                @if($loop->index < 3) <!-- Show first 3 features -->
                                <span class="inline-block bg-gray-100 rounded-full px-3 py-1 text-sm font-medium text-gray-700 mr-1 mb-1">
                                    {{ trim($feature) }}
                                </span>
                                @endif
                            @endforeach
                            @if(count(explode(',', $package->PackageFetures)) > 3)
                                <span class="text-sm text-gray-500">+{{ count(explode(',', $package->PackageFetures)) - 3 }} more</span>
                            @endif
                        </div>

                        <!-- Price and Action -->
                        <div class="mt-4 flex justify-between items-center">
                            <span class="text-2xl font-bold text-primary-600">
                                ₹{{ number_format($package->PackagePrice) }}
                            </span>
                            <a href="#" 
                               class="text-white bg-primary-500 hover:bg-primary-600 px-4 py-2 rounded-lg transition duration-300">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-8">
                {{ $packages->links() }}
            </div>
        </div>
    </div>
</x-app-layout>