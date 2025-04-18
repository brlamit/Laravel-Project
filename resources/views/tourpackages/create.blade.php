<x-app-layout>
    <head>
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
                            primary: {
                                50: '#f0f9ff',
                                100: '#e0f2fe',
                                500: '#3b82f6',
                                600: '#2563eb',
                                700: '#1d4ed8',
                            },
                            secondary: {
                                500: '#8b5cf6',
                                600: '#7c3aed',
                            }
                        }
                    }
                }
            }
        </script>
    </head>

    <body class="bg-gradient-to-br from-primary-50 to-white min-h-screen">
        <div class="py-12 animate-fade-in">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Card with subtle shadow and rounded corners -->
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-2xl transition-all duration-300 hover:shadow-2xl">
                    <!-- Gradient header -->
                    <div class="bg-gradient-to-r from-primary-600 to-secondary-600 p-6">
                        <h2 class="text-3xl font-heading font-bold text-white text-center animate-slide-up">
                            <i class="fas fa-map-marked-alt mr-3"></i> Create New Tour Package
                        </h2>
                    </div>
                    
                    <!-- Form container -->
                    <div class="p-8 space-y-6">
                        <form method="POST" action="{{ route('packages.store') }}" enctype="multipart/form-data" class="space-y-6">
                            @csrf

                            <!-- Grid layout for first row fields -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- Package Name -->
                                <div class="animate-slide-up" style="animation-delay: 0.1s">
                                    <label for="PackageName" class="block font-heading text-gray-700 font-medium mb-2">
                                        <i class="fas fa-tag text-primary-600 mr-2"></i> Package Name
                                    </label>
                                    <input type="text" name="PackageName" id="PackageName" 
                                           class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition duration-300"
                                           placeholder="E.g., Everest Base Camp Trek" required maxlength="200">
                                    @error('PackageName')
                                        <p class="mt-1 text-sm text-red-600 animate-pulse">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Package Type -->
                                <div class="animate-slide-up" style="animation-delay: 0.2s">
                                    <label for="PackageType" class="block font-heading text-gray-700 font-medium mb-2">
                                        <i class="fas fa-list-alt text-primary-600 mr-2"></i> Package Type
                                    </label>
                                    <select name="PackageType" id="PackageType" 
                                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition duration-300" required>
                                        <option value="">Select package type</option>
                                        <option value="Adventure">Adventure</option>
                                        <option value="Cultural">Cultural</option>
                                        <option value="Pilgrimage">Pilgrimage</option>
                                        <option value="Wildlife">Wildlife</option>
                                        <option value="Luxury">Luxury</option>
                                    </select>
                                    @error('PackageType')
                                        <p class="mt-1 text-sm text-red-600 animate-pulse">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <!-- Second row -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- Package Location -->
                                <div class="animate-slade-up" style="animation-delay: 0.3s">
                                    <label for="PackageLocation" class="block font-heading text-gray-700 font-medium mb-2">
                                        <i class="fas fa-map-marker-alt text-primary-600 mr-2"></i> Location
                                    </label>
                                    <input type="text" name="PackageLocation" id="PackageLocation" 
                                           class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition duration-300"
                                           placeholder="E.g., Kathmandu, Nepal" required maxlength="100">
                                    @error('PackageLocation')
                                        <p class="mt-1 text-sm text-red-600 animate-pulse">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Package Price -->
                                <div class="animate-slide-up" style="animation-delay: 0.4s">
                                    <label for="PackagePrice" class="block font-heading text-gray-700 font-medium mb-2">
                                        <i class="fas fa-rupee-sign text-primary-600 mr-2"></i> Price (₹)
                                    </label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <span class="text-gray-500">₹</span>
                                        </div>
                                        <input type="number" name="PackagePrice" id="PackagePrice" 
                                               class="w-full pl-8 pr-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition duration-300"
                                               placeholder="E.g., 25000" required min="0">
                                    </div>
                                    @error('PackagePrice')
                                        <p class="mt-1 text-sm text-red-600 animate-pulse">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <!-- Package Features -->
                            <div class="animate-slide-up" style="animation-delay: 0.5s">
                                <label for="PackageFetures" class="block font-heading text-gray-700 font-medium mb-2">
                                    <i class="fas fa-star text-primary-600 mr-2"></i> Key Features
                                </label>
                                <textarea name="PackageFetures" id="PackageFetures" 
                                          class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition duration-300"
                                          placeholder="List the main features separated by commas" required maxlength="255" rows="3"></textarea>
                                <p class="mt-1 text-xs text-gray-500">Example: Guided tour, Hotel accommodation, Breakfast included, Transportation</p>
                                @error('PackageFetures')
                                    <p class="mt-1 text-sm text-red-600 animate-pulse">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Package Details -->
                            <div class="animate-slide-up" style="animation-delay: 0.6s">
                                <label for="PackageDetails" class="block font-heading text-gray-700 font-medium mb-2">
                                    <i class="fas fa-align-left text-primary-600 mr-2"></i> Detailed Description
                                </label>
                                <textarea name="PackageDetails" id="PackageDetails" 
                                          class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition duration-300"
                                          placeholder="Describe the package in detail..." required rows="5"></textarea>
                                @error('PackageDetails')
                                    <p class="mt-1 text-sm text-red-600 animate-pulse">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Package Image -->
                            <div class="animate-slide-up" style="animation-delay: 0.7s">
                                <label for="PackageImage" class="block font-heading text-gray-700 font-medium mb-2">
                                    <i class="fas fa-camera text-primary-600 mr-2"></i> Package Image
                                </label>
                                <div class="flex items-center justify-center w-full">
                                    <label for="PackageImage" class="flex flex-col w-full h-32 border-2 border-dashed border-primary-300 hover:border-primary-500 rounded-lg cursor-pointer transition duration-300 hover:bg-primary-50">
                                        <div class="flex flex-col items-center justify-center pt-7">
                                            <i class="fas fa-cloud-upload-alt text-primary-500 text-3xl mb-2"></i>
                                            <p class="text-sm text-gray-600">Click to upload or drag and drop</p>
                                            <p class="text-xs text-gray-500 mt-1">JPEG, PNG, JPG, GIF (Max: 2MB)</p>
                                        </div>
                                        <input id="PackageImage" name="PackageImage" type="file" class="hidden" accept="image/jpeg,image/png,image/jpg,image/gif" required>
                                    </label>
                                </div>
                                @error('PackageImage')
                                    <p class="mt-1 text-sm text-red-600 animate-pulse">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <div class="flex justify-end animate-slide-up" style="animation-delay: 0.8s">
                                <button type="submit" 
                                        class="px-6 py-3 bg-gradient-to-r from-primary-600 to-secondary-600 text-white font-heading font-semibold rounded-lg shadow-md hover:shadow-lg transform hover:-translate-y-1 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                    <i class="fas fa-plus-circle mr-2"></i> Create Package
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Preview image script -->
        <script>
            document.getElementById('PackageImage').addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(event) {
                        const previewContainer = document.querySelector('label[for="PackageImage"]');
                        previewContainer.innerHTML = `
                            <div class="w-full h-full flex items-center justify-center">
                                <img src="${event.target.result}" class="max-h-full max-w-full rounded-lg object-cover" alt="Preview">
                            </div>
                        `;
                    };
                    reader.readAsDataURL(file);
                }
            });
        </script>
    </body>
</x-app-layout>