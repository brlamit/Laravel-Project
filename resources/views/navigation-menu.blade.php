
<nav x-data="{ open: false }" class="container mx-auto px-6 lg:px-8 py-4 flex items-center justify-between">
<header class="fixed top-0 left-0 right-0 z-50 bg-white/80 dark:bg-[#0a0a0a]/80 backdrop-blur-sm shadow-sm border-b border-white/10">
    <nav class="container mx-auto px-6 lg:px-8 py-4 flex items-center justify-between">
        <!-- Logo -->
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

        <!-- Desktop Navigation -->
        <div class="hidden md:flex items-center gap-6">
            <a href="{{ route('dashboard') }}" class="text-gray-700 dark:text-gray-300 hover:text-nepal-blue dark:hover:text-nepal-purple transition-colors {{ request()->routeIs('dashboard') ? 'text-nepal-blue dark:text-nepal-purple font-medium' : '' }}">
                {{ __('Home') }}
            </a>
            <a href="{{ route('about-us') }}" class="text-gray-700 dark:text-gray-300 hover:text-nepal-blue dark:hover:text-nepal-purple transition-colors {{ request()->routeIs('about-us') ? 'text-nepal-blue dark:text-nepal-purple font-medium' : '' }}">
                {{ __('About Us') }}
            </a>
            <a href="{{ route('contact-us') }}" class="text-gray-700 dark:text-gray-300 hover:text-nepal-blue dark:hover:text-nepal-purple transition-colors {{ request()->routeIs('contact-us') ? 'text-nepal-blue dark:text-nepal-purple font-medium' : '' }}">
                {{ __('Contact Us') }}
            </a>

            @auth
                <!-- User Dropdown -->
                <div class="relative ml-4" x-data="{ open: false }">
                    <button @click="open = !open" class="flex items-center focus:outline-none">
                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                        @else
                            <span class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-nepal-blue dark:hover:text-nepal-purple transition-colors">
                                {{ Auth::user()->name }}
                                <svg class="ml-1 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </span>
                        @endif
                    </button>

                    <div x-show="open" 
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 scale-95"
                         x-transition:enter-end="opacity-100 scale-100"
                         x-transition:leave="transition ease-in duration-75"
                         x-transition:leave-start="opacity-100 scale-100"
                         x-transition:leave-end="opacity-0 scale-95"
                         class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white dark:bg-gray-800 ring-1 ring-black ring-opacity-5 focus:outline-none z-50"
                         @click.away="open = false">
                        <!-- Account Management -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Manage Account') }}
                        </div>

                        <a href="{{ route('profile.show') }}" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                            {{ __('Profile') }}
                        </a>

                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <a href="{{ route('api-tokens.index') }}" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                                {{ __('API Tokens') }}
                            </a>
                        @endif

                        <div class="border-t border-gray-200 dark:border-gray-600"></div>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                                {{ __('Log Out') }}
                            </button>
                        </form>
                    </div>
                </div>
            @else
                <a href="{{ route('login') }}" class="px-4 py-2 text-gray-700 dark:text-gray-300 font-medium hover:text-nepal-blue dark:hover:text-nepal-purple transition-colors">
                    {{ __('Login') }}
                </a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="px-4 py-2 rounded-md bg-gradient-to-r from-nepal-blue to-nepal-purple text-white font-medium hover:shadow-lg hover:shadow-blue-500/30 transition-all">
                        {{ __('Register') }}
                    </a>
                @endif
            @endauth
        </div>

        <!-- Mobile menu button -->
        <div class="md:hidden flex items-center">
            <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-700 dark:text-gray-300 hover:text-nepal-blue dark:hover:text-nepal-purple focus:outline-none transition-colors">
                <svg class="h-6 w-6" :class="{'hidden': open, 'block': !open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg class="h-6 w-6" :class="{'hidden': !open, 'block': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </nav>

    <!-- Mobile Navigation -->
    <div class="md:hidden" x-show="open" x-transition:enter="transition ease-out duration-100" 
         x-transition:enter-start="opacity-0 scale-95" 
         x-transition:enter-end="opacity-100 scale-100" 
         x-transition:leave="transition ease-in duration-75" 
         x-transition:leave-start="opacity-100 scale-100" 
         x-transition:leave-end="opacity-0 scale-95"
         @click.away="open = false">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white dark:bg-[#0a0a0a] shadow-lg">
            <a href="{{ route('dashboard') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-300 hover:text-nepal-blue dark:hover:text-nepal-purple {{ request()->routeIs('dashboard') ? 'text-nepal-blue dark:text-nepal-purple font-medium' : '' }}">
                {{ __('Home') }}
            </a>
            <a href="{{ route('about-us') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-300 hover:text-nepal-blue dark:hover:text-nepal-purple {{ request()->routeIs('about-us') ? 'text-nepal-blue dark:text-nepal-purple font-medium' : '' }}">
                {{ __('About Us') }}
            </a>
            <a href="{{ route('contact-us') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-300 hover:text-nepal-blue dark:hover:text-nepal-purple {{ request()->routeIs('contact-us') ? 'text-nepal-blue dark:text-nepal-purple font-medium' : '' }}">
                {{ __('Contact Us') }}
            </a>

            @auth
                <div class="pt-4 pb-3 border-t border-gray-200 dark:border-gray-600">
                    <div class="flex items-center px-5">
                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <div class="shrink-0 mr-3">
                                <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            </div>
                        @endif

                        <div>
                            <div class="text-base font-medium text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                            <div class="text-sm font-medium text-gray-500">{{ Auth::user()->email }}</div>
                        </div>
                    </div>

                    <div class="mt-3 space-y-1">
                        <a href="{{ route('profile.show') }}" class="block px-4 py-2 text-base font-medium text-gray-700 dark:text-gray-300 hover:text-nepal-blue dark:hover:text-nepal-purple">
                            {{ __('Profile') }}
                        </a>

                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <a href="{{ route('api-tokens.index') }}" class="block px-4 py-2 text-base font-medium text-gray-700 dark:text-gray-300 hover:text-nepal-blue dark:hover:text-nepal-purple">
                                {{ __('API Tokens') }}
                            </a>
                        @endif

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="block w-full text-left px-4 py-2 text-base font-medium text-gray-700 dark:text-gray-300 hover:text-nepal-blue dark:hover:text-nepal-purple">
                                {{ __('Log Out') }}
                            </button>
                        </form>
                    </div>
                </div>
            @else
                <div class="py-4 px-4 space-y-2 border-t border-gray-200 dark:border-gray-600">
                    <a href="{{ route('login') }}" class="block w-full px-4 py-2 text-center text-gray-700 dark:text-gray-300 font-medium hover:text-nepal-blue dark:hover:text-nepal-purple transition-colors">
                        {{ __('Login') }}
                    </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="block w-full px-4 py-2 rounded-md bg-gradient-to-r from-nepal-blue to-nepal-purple text-white font-medium hover:shadow-lg hover:shadow-blue-500/30 transition-all text-center">
                            {{ __('Register') }}
                        </a>
                    @endif
                </div>
            @endauth
        </div>
    </div>
</header>
</nav>
