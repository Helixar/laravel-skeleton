<div class="max-w-7xl mx-auto px-4 sm:px-6">
    <nav class="relative flex items-center justify-between sm:h-10 md:justify-center" aria-label="Global">
        <div class="flex items-center flex-1 md:absolute md:inset-y-0 md:left-0">
            <div class="flex items-center justify-between w-full md:w-auto">
                <a href="#">
                    <span class="sr-only">Laravel Skeleton</span>
                    <img class="h-8 w-auto sm:h-8" src="{{ asset('storage/assets/images/logo/ls-indigo.png') }}" alt="">
                </a>
                <div class="-mr-1 flex items-center md:hidden">
                    <button @click="open = !open" type="button"
                            class="bg-blue-gray-800 rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                            aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <!-- Heroicon name: outline/menu -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="hidden md:flex md:space-x-10">
            <a href="#features" class="font-medium text-gray-500 hover:text-gray-400">Features</a>

            <a href="#" class="font-medium text-gray-500 hover:text-gray-400">Faq</a>

            <a href="#" class="font-medium text-gray-500 hover:text-gray-400">Docs</a>

            <a href="#" class="font-medium text-gray-500 hover:text-gray-400">Github</a>
        </div>
        <div class="hidden md:absolute md:flex md:items-center md:justify-end md:inset-y-0 md:right-0">
            <span class="inline-flex shadow">
                @guest
                    <a href="{{ route('register') }}"
                       class="inline-flex mr-2 items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-gray-200 bg-indigo-500 hover:bg-indigo-700">Register</a>
                    <a href="{{ route('login') }}"
                       class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-gray-200 bg-blue-gray-800 hover:bg-blue-gray-700">Log in</a>
                @endguest
                @auth
                        <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6">
                        <button class="p-2 rounded-full bg-indigo-600 text-gray-200 hover:bg-indigo-500 hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-indigo-600 focus:ring-white">
                            <span class="sr-only">View notifications</span>
                            <!-- Heroicon name: outline/bell -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </button>

                        <!-- Profile dropdown -->
                        <div x-data="{ open: false }" class="ml-3 relative">
                            <div>
                                <button @click="open = true"
                                        type="button"
                                        class="max-w-xs p-1 flex items-center bg-indigo-600 hover:bg-indigo-500 rounded-full flex text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-indigo-600 focus:ring-indigo-400" id="user-menu-button"
                                        aria-expanded="false"
                                        aria-haspopup="true">
                                    <span class="sr-only">Open user menu</span>
                                    @if(auth()->user()->avatar)
                                        <img class="h-8 w-8 rounded-full" src="{{ auth()->user()->avatar }}" alt="">
                                    @else
                                        <span class="inline-flex items-center justify-center h-8 w-8 rounded-full bg-blue-gray-800">
                                          <span class="text-xs font-medium leading-none text-white">{{ auth()->user()->initial() }}</span>
                                        </span>
                                    @endif
                                    <div class="mx-3">
                                        <div class="text-sm font-medium text-gray-200">{{ auth()->user()->name }}</div>
                                    </div>
                                </button>
                            </div>
                            <div x-show="open" @click.away="open = false"
                                x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="transform opacity-0 scale-95"
                                x-transition:enter-end="transform opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-end="transform opacity-100 scale-100"
                                x-transition:leave-end="transform opacity-0 scale-95"
                                class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-blue-gray-800 ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-200 hover:text-gray-400" role="menuitem" tabindex="-1" id="user-menu-item-0">Mon profile</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-200 hover:text-gray-400" role="menuitem" tabindex="-1" id="user-menu-item-1">Paramètres</a>
                                <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-200 hover:text-gray-400" role="menuitem" tabindex="-1" id="user-menu-item-2">Déconnexion</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endauth
            </span>
        </div>
    </nav>
</div>
