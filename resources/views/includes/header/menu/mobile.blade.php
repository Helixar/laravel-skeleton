<div x-data="{ open: false }" x-show="open" @click.away="open = false"
     x-transition:enter="duration-150 ease-out"
     x-transition:enter-start="opacity-0 scale-95"
     x-transition:enter-end="opacity-100 scale-100"
     x-transition:leave="transition ease-in duration-300"
     x-transition:leave-end="opacity-100 scale-100"
     x-transition:leave-end="opacity-0 scale-95"
     class="absolute top-0 inset-x-0 transition transform origin-top-right md:hidden">
    <div class="shadow-md bg-blue-gray-800 ring-1 ring-black ring-opacity-5 overflow-hidden">
        <div class="px-5 pt-4 flex items-center justify-between">
            <div>
                <img class="h-8 w-auto" src="{{ asset('storage/assets/images/logo/ls-indigo.svg') }}" alt="">
            </div>
            <div class="-mr-2">
                <button type="button" @click="open = false"
                        class="p-2 inline-flex items-center justify-center text-gray-200 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                    <span class="sr-only">Close menu</span>
                    <!-- Heroicon name: outline/x -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
        <div class="px-2 pt-2 pb-3">
            <a href="#features" class="block px-3 py-2 rounded-md text-base font-medium text-gray-200">Features</a>

            <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-200">Faq</a>

            <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-200">Docs</a>

            <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-200">Github</a>
        </div>
        @guest
            <a href="{{ route('register') }}" class="block w-full px-5 py-3 text-center font-medium text-gray-200 bg-indigo-500 border-b border-indigo-800">
                Register
            </a>
            <a href="{{ route('login') }}" class="block w-full px-5 py-3 text-center font-medium text-gray-200 bg-indigo-500">
                Login
            </a>
        @endguest
        @auth
            <div class="pt-4 pb-3 border-t border-blue-gray-900">
                <div class="flex items-center px-5">
                    <div class="flex-shrink-0">
                        @if(auth()->user()->avatar)
                            <img class="h-10 w-10 rounded-full" src="{{ auth()->user()->avatar }}" alt="">
                        @else
                            <span class="inline-flex items-center justify-center h-10 w-10 rounded-full bg-gray-500">
                              <span class="text-xs font-medium leading-none text-white">{{ auth()->user()->initial() }}</span>
                            </span>
                        @endif
                    </div>
                    <div class="ml-3">
                        <div class="text-base font-medium text-white">{{ auth()->user()->name }}</div>
                        <div class="text-sm font-medium text-indigo-300">{{ auth()->user()->email }}</div>
                    </div>
                    <button class="ml-auto flex-shrink-0 p-1 rounded-full text-indigo-200 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-indigo-600 focus:ring-white">
                        <span class="sr-only">Voir les notifications</span>
                        <!-- Heroicon name: outline/bell -->
                        <svg class="h-6 w-6 text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                    </button>
                </div>
                <div class="mt-3 px-2 space-y-1">
                    <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-indigo-500 hover:bg-opacity-75">Mon profile</a>

                    <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-indigo-500 hover:bg-opacity-75">Paramètres</a>

                    <a href="{{ route('logout') }}" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-indigo-500 hover:bg-opacity-75">Déconnexion</a>
                </div>
            </div>
        @endauth
    </div>
</div>
