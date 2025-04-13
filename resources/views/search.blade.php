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
    
    <div class="min-h-screen bg-gradient-to-b from-white to-gray-50 dark:from-gray-900 dark:to-gray-800">
        <!-- Search Section -->
        <div class="py-16 px-4 sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto">
                <!-- Search Header -->
                <div class="text-center mb-12 animate-fade-in">
                    <h1 class="text-4xl md:text-5xl font-bold font-heading text-nepal-blue dark:text-nepal-purple mb-4">
                        Explore Nepal
                    </h1>
                    <p class="text-lg text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                        Discover the wonders of Nepal through our comprehensive search
                    </p>
                </div>

                <!-- Search Form with Filters -->
                <div class="max-w-6xl mx-auto">
                    <form method="GET" action="{{ route('search') }}" class="mb-8">
                        <div class="relative flex items-center bg-white dark:bg-gray-800 rounded-xl shadow-lg border border-gray-200 dark:border-gray-700 overflow-hidden transition-all duration-300 hover:shadow-xl">
                            <input 
                                type="text" 
                                name="query" 
                                placeholder="Search for treks, temples, cities or experiences..." 
                                required
                                value="{{ request('query') ?? '' }}"
                                class="w-full py-4 px-6 text-gray-800 dark:text-gray-200 bg-transparent focus:outline-none focus:ring-0 border-none placeholder-gray-400 dark:placeholder-gray-500"
                            >
                            <button 
                                type="submit"
                                class="px-6 py-4 bg-gradient-to-r from-nepal-blue to-nepal-purple text-white font-semibold hover:shadow-lg transition-all duration-300 flex items-center justify-center"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                                Search
                            </button>
                        </div>
                        
                        <!-- Filter Section -->
                        <div class="mt-6 bg-white dark:bg-gray-800 rounded-xl shadow-md border border-gray-200 dark:border-gray-700 p-6">
                            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                                    Refine Your Search
                                </h3>
                                
                                <!-- Clear Filters Button -->
                                @if(request()->hasAny(['location', 'category', 'difficulty', 'min_price', 'max_price']))
                                <a href="{{ route('search', ['query' => request('query')]) }}" class="text-sm text-nepal-blue dark:text-nepal-purple hover:underline flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                    </svg>
                                    Clear Filters
                                </a>
                                @endif
                            </div>
                            
                            <div class="mt-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                                <!-- Location Filter -->
                                <div>
                                    <label for="location" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        Location
                                    </label>
                                    <select 
                                        id="location" 
                                        name="location" 
                                        class="w-full rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-200 shadow-sm focus:border-nepal-blue focus:ring-nepal-blue"
                                    >
                                        <option value="">All Locations</option>
                                        <option value="kathmandu" {{ request('location') == 'kathmandu' ? 'selected' : '' }}>Kathmandu</option>
                                        <option value="pokhara" {{ request('location') == 'pokhara' ? 'selected' : '' }}>Pokhara</option>
                                        <option value="everest" {{ request('location') == 'everest' ? 'selected' : '' }}>Everest Region</option>
                                        <option value="annapurna" {{ request('location') == 'annapurna' ? 'selected' : '' }}>Annapurna Region</option>
                                        <option value="chitwan" {{ request('location') == 'chitwan' ? 'selected' : '' }}>Chitwan</option>
                                        <option value="lumbini" {{ request('location') == 'lumbini' ? 'selected' : '' }}>Lumbini</option>
                                    </select>
                                </div>
                                
                                <!-- Category Filter -->
                                <div>
                                    <label for="category" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        Category
                                    </label>
                                    <select 
                                        id="category" 
                                        name="category" 
                                        class="w-full rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-200 shadow-sm focus:border-nepal-blue focus:ring-nepal-blue"
                                    >
                                        <option value="">All Categories</option>
                                        <option value="trekking" {{ request('category') == 'trekking' ? 'selected' : '' }}>Trekking</option>
                                        <option value="temple" {{ request('category') == 'temple' ? 'selected' : '' }}>Temples</option>
                                        <option value="adventure" {{ request('category') == 'adventure' ? 'selected' : '' }}>Adventure</option>
                                        <option value="culture" {{ request('category') == 'culture' ? 'selected' : '' }}>Culture</option>
                                        <option value="wildlife" {{ request('category') == 'wildlife' ? 'selected' : '' }}>Wildlife</option>
                                        <option value="pilgrimage" {{ request('category') == 'pilgrimage' ? 'selected' : '' }}>Pilgrimage</option>
                                    </select>
                                </div>
                                
                                <!-- Difficulty Filter -->
                                <div>
                                    <label for="difficulty" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        Difficulty
                                    </label>
                                    <select 
                                        id="difficulty" 
                                        name="difficulty" 
                                        class="w-full rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-200 shadow-sm focus:border-nepal-blue focus:ring-nepal-blue"
                                    >
                                        <option value="">Any Difficulty</option>
                                        <option value="easy" {{ request('difficulty') == 'easy' ? 'selected' : '' }}>Easy</option>
                                        <option value="moderate" {{ request('difficulty') == 'moderate' ? 'selected' : '' }}>Moderate</option>
                                        <option value="challenging" {{ request('difficulty') == 'challenging' ? 'selected' : '' }}>Challenging</option>
                                        <option value="difficult" {{ request('difficulty') == 'difficult' ? 'selected' : '' }}>Difficult</option>
                                        <option value="extreme" {{ request('difficulty') == 'extreme' ? 'selected' : '' }}>Extreme</option>
                                    </select>
                                </div>
                                
                                <!-- Price Range Filter -->
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        Price Range (USD)
                                    </label>
                                    <div class="grid grid-cols-2 gap-2">
                                        <input 
                                            type="number" 
                                            name="min_price" 
                                            placeholder="Min" 
                                            value="{{ request('min_price') ?? '' }}"
                                            class="w-full rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-200 shadow-sm focus:border-nepal-blue focus:ring-nepal-blue"
                                        >
                                        <input 
                                            type="number" 
                                            name="max_price" 
                                            placeholder="Max" 
                                            value="{{ request('max_price') ?? '' }}"
                                            class="w-full rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-200 shadow-sm focus:border-nepal-blue focus:ring-nepal-blue"
                                        >
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Active Filters (if any) -->
                            @if(request()->hasAny(['location', 'category', 'difficulty', 'min_price', 'max_price']))
                            <div class="mt-4 pt-4 border-t border-gray-200 dark:border-gray-700">
                                <h4 class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    Active Filters:
                                </h4>
                                <div class="flex flex-wrap gap-2">
                                    @if(request('location'))
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-nepal-blue/10 text-nepal-blue dark:bg-nepal-purple/20 dark:text-nepal-purple">
                                        Location: {{ ucfirst(request('location')) }}
                                        <a href="{{ route('search', array_merge(request()->except('location'), ['query' => request('query')])) }}" class="ml-1.5 inline-flex text-nepal-blue dark:text-nepal-purple">
                                            <svg class="h-3.5 w-3.5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                            </svg>
                                        </a>
                                    </span>
                                    @endif
                                    
                                    @if(request('category'))
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-nepal-blue/10 text-nepal-blue dark:bg-nepal-purple/20 dark:text-nepal-purple">
                                        Category: {{ ucfirst(request('category')) }}
                                        <a href="{{ route('search', array_merge(request()->except('category'), ['query' => request('query')])) }}" class="ml-1.5 inline-flex text-nepal-blue dark:text-nepal-purple">
                                            <svg class="h-3.5 w-3.5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                            </svg>
                                        </a>
                                    </span>
                                    @endif
                                    
                                    @if(request('difficulty'))
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-nepal-blue/10 text-nepal-blue dark:bg-nepal-purple/20 dark:text-nepal-purple">
                                        Difficulty: {{ ucfirst(request('difficulty')) }}
                                        <a href="{{ route('search', array_merge(request()->except('difficulty'), ['query' => request('query')])) }}" class="ml-1.5 inline-flex text-nepal-blue dark:text-nepal-purple">
                                            <svg class="h-3.5 w-3.5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                            </svg>
                                        </a>
                                    </span>
                                    @endif
                                    
                                    @if(request('min_price') || request('max_price'))
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-nepal-blue/10 text-nepal-blue dark:bg-nepal-purple/20 dark:text-nepal-purple">
                                        Price: 
                                        @if(request('min_price') && request('max_price'))
                                            ${{ request('min_price') }} - ${{ request('max_price') }}
                                        @elseif(request('min_price'))
                                            From ${{ request('min_price') }}
                                        @else
                                            Up to ${{ request('max_price') }}
                                        @endif
                                        <a href="{{ route('search', array_merge(request()->except(['min_price', 'max_price']), ['query' => request('query')])) }}" class="ml-1.5 inline-flex text-nepal-blue dark:text-nepal-purple">
                                            <svg class="h-3.5 w-3.5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                            </svg>
                                        </a>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            @endif
                        </div>
                    </form>

                    <!-- Popular Searches -->
                    <div class="mt-3 flex flex-wrap justify-center gap-2">
                        <span class="text-sm text-gray-500 dark:text-gray-400">Try:</span>
                        <a href="{{ route('search', ['query' => 'Everest Base Camp']) }}" class="text-sm text-nepal-blue dark:text-nepal-purple hover:underline">Everest Base Camp</a>
                        <span class="text-sm text-gray-500 dark:text-gray-400">•</span>
                        <a href="{{ route('search', ['query' => 'Pashupatinath']) }}" class="text-sm text-nepal-blue dark:text-nepal-purple hover:underline">Pashupatinath</a>
                        <span class="text-sm text-gray-500 dark:text-gray-400">•</span>
                        <a href="{{ route('search', ['query' => 'Pokhara']) }}" class="text-sm text-nepal-blue dark:text-nepal-purple hover:underline">Pokhara</a>
                        <span class="text-sm text-gray-500 dark:text-gray-400">•</span>
                        <a href="{{ route('search', ['query' => 'Annapurna Circuit']) }}" class="text-sm text-nepal-blue dark:text-nepal-purple hover:underline">Annapurna Circuit</a>
                    </div>

                    <!-- Search Results -->
                    @if(isset($results) && $results->count() > 0)
                        <div class="mt-12 bg-white dark:bg-gray-800 rounded-xl shadow-md border border-gray-200 dark:border-gray-700 overflow-hidden animate-slide-up">
                            <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                                <h3 class="text-xl font-bold font-heading text-nepal-blue dark:text-nepal-purple">
                                    Search Results for "{{ request('query') }}"
                                </h3>
                                <p class="text-sm text-gray-500 dark:text-gray-400">
                                    {{ $results->total() }} results found
                                </p>
                            </div>

                            <div class="divide-y divide-gray-200 dark:divide-gray-700">
                                @foreach($results as $result)
                                <div class="p-6 hover:bg-gray-50 dark:hover:bg-gray-700/50 transition duration-200">
                                    <a href="{{ $result->url }}" class="block">
                                        <div class="flex flex-col md:flex-row md:items-center gap-4">
                                            @if($result->image)
                                            <div class="flex-shrink-0 w-full md:w-40 h-32 rounded-lg overflow-hidden">
                                                <img src="{{ $result->image }}" alt="{{ $result->title }}" class="w-full h-full object-cover">
                                            </div>
                                            @endif
                                            <div class="flex-1">
                                                <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-1">
                                                    {{ $result->title }}
                                                </h4>
                                                <p class="text-gray-600 dark:text-gray-400 mb-2">
                                                    {{ $result->excerpt }}
                                                </p>
                                                <div class="flex flex-wrap items-center gap-x-4 gap-y-2 text-sm text-gray-500 dark:text-gray-400">
                                                    @if($result->location)
                                                    <span class="flex items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        </svg>
                                                        {{ $result->location }}
                                                    </span>
                                                    @endif
                                                    
                                                    @if($result->duration)
                                                    <span class="flex items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                        </svg>
                                                        {{ $result->duration }}
                                                    </span>
                                                    @endif
                                                    
                                                    @if($result->difficulty)
                                                    <span class="flex items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                                        </svg>
                                                        {{ ucfirst($result->difficulty) }}
                                                    </span>
                                                    @endif
                                                    
                                                    @if($result->price)
                                                    <span class="flex items-center font-medium text-nepal-blue dark:text-nepal-purple">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                        </svg>
                                                        ${{ number_format($result->price) }}
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>

                            @if($results->hasPages())
                            <div class="px-6 py-4 border-t border-gray-200 dark:border-gray-700">
                                {{ $results->withQueryString()->links() }}
                            </div>
                            @endif
                        </div>
                    @elseif(request()->has('query'))
                        <div class="text-center py-12">
                            <div class="mx-auto h-24 w-24 text-gray-400 dark:text-gray-500 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-medium text-gray-700 dark:text-gray-300 mb-2">
                                No results found for "{{ request('query') }}"
                            </h3>
                            <p class="text-gray-500 dark:text-gray-400 max-w-md mx-auto">
                                Try different keywords or browse our popular destinations above
                            </p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>