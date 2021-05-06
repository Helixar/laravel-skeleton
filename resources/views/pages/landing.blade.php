<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Skeleton</title>
    <link rel="icon" href="{{ asset('storage/assets/images/logo/ls-indigo.png') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="bg-blue-gray-900">
    <div class="relative bg-blue-gray-900 overflow-hidden">
        <div class="hidden sm:block sm:absolute sm:inset-y-0 sm:h-full sm:w-full" aria-hidden="true">
            <div class="relative h-full max-w-7xl mx-auto">
                <svg class="absolute text-indigo-500 right-full transform translate-y-1/4 translate-x-1/4 lg:translate-x-1/2" width="404" height="784" fill="none" viewBox="0 0 404 784">
                    <defs>
                        <pattern id="f210dbf6-a58d-4871-961e-36d5016a0f49" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" fill="currentColor"/>
                        </pattern>
                    </defs>
                    <rect width="404" height="784" fill="url(#f210dbf6-a58d-4871-961e-36d5016a0f49)"/>
                </svg>
                <svg class="absolute text-indigo-500 left-full transform -translate-y-3/4 -translate-x-1/4 md:-translate-y-1/2 lg:-translate-x-1/2" width="404" height="784" fill="currentColor"
                     viewBox="0 0 404 784">
                    <defs>
                        <pattern id="5d0dd344-b041-4d26-bec4-8d33ea57ec9b" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" fill="currentColor"/>
                        </pattern>
                    </defs>
                    <rect width="404" height="784" fill="url(#5d0dd344-b041-4d26-bec4-8d33ea57ec9b)"/>
                </svg>
            </div>
        </div>

        <div class="relative pt-6 pb-16 sm:pb-24">
{{--            @include('includes.header.menu.test')--}}
            @include('includes.header.menu.desktop')
            @include('includes.header.menu.mobile')
            <main class="mt-16 mx-auto max-w-7xl px-4 sm:mt-24">
                <div class="text-center">
                    <h1 class="text-4xl tracking-tight font-extrabold text-gray-200 sm:text-5xl md:text-6xl">
                        <span class="block xl:inline">A better way to</span>
                        <span class="block text-indigo-600 xl:inline">build your app</span>
                    </h1>
                    <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                        Laravel Skeleton is a turnkey solution based on the Laravel framework to start developing without having to install dozens of packages and spend time configuring your
                        project
                    </p>
                    <div class="mt-5 max-w-md mx-auto sm:flex sm:justify-center md:mt-8">
                        <div class="rounded-md shadow">
                            <a href="#"
                               class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg">
                                <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                                </svg>
                                Join Discord
                            </a>
                        </div>
                        <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
                            <a href="#"
                               class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-gray-200 bg-blue-gray-800 hover:bg-blue-gray-700 md:py-4 md:text-lg">
                                <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                </svg>
                                Read the docs
                            </a>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <div class="relative overflow-hidden">
        <main>
            <div class="relative bg-blue-gray-900 py-16" id="features">
                <div class="mx-auto max-w-md px-4 text-center sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
                    <h2 class="text-base font-semibold tracking-wider text-indigo-600 uppercase">Features</h2>
                    <p class="mt-2 text-3xl font-extrabold text-gray-300 tracking-tight sm:text-4xl">
                        Start with multiple features to help you develop faster.
                    </p>
                    <p class="mt-5 max-w-prose mx-auto text-xl text-gray-200">
                        Phasellus lorem quam molestie id quisque diam aenean nulla in. Accumsan in quis quis nunc, ullamcorper malesuada. Eleifend condimentum id viverra nulla.
                    </p>
                    <div class="mt-12">
                        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                            <div class="pt-6">
                                <div class="flow-root bg-indigo-800 rounded-lg px-6 pb-8">
                                    <div class="-mt-6">
                                        <div>
                                                <span class="inline-flex items-center justify-center p-3 bg-indigo-500 rounded-md shadow-lg">
                                                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                                                    </svg>
                                                </span>
                                        </div>
                                        <h3 class="mt-8 text-lg font-medium text-gray-300 tracking-tight">Authentication</h3>
                                        <p class="mt-5 text-base text-gray-200">
                                            Authentication based on older versions of Laravel.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-6">
                                <div class="flow-root bg-indigo-800 rounded-lg px-6 pb-8">
                                    <div class="-mt-6">
                                        <div>
                                                <span class="inline-flex items-center justify-center p-3 bg-indigo-500 rounded-md shadow-lg">
                                                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 54 33"><g clip-path="url(#prefix__clip0)"><path
                                                                fill-rule="evenodd"
                                                                d="M27 0c-7.2 0-11.7 3.6-13.5 10.8 2.7-3.6 5.85-4.95 9.45-4.05 2.054.513 3.522 2.004 5.147 3.653C30.744 13.09 33.808 16.2 40.5 16.2c7.2 0 11.7-3.6 13.5-10.8-2.7 3.6-5.85 4.95-9.45 4.05-2.054-.513-3.522-2.004-5.147-3.653C36.756 3.11 33.692 0 27 0zM13.5 16.2C6.3 16.2 1.8 19.8 0 27c2.7-3.6 5.85-4.95 9.45-4.05 2.054.514 3.522 2.004 5.147 3.653C17.244 29.29 20.308 32.4 27 32.4c7.2 0 11.7-3.6 13.5-10.8-2.7 3.6-5.85 4.95-9.45 4.05-2.054-.513-3.522-2.004-5.147-3.653C23.256 19.31 20.192 16.2 13.5 16.2z"
                                                                clip-rule="evenodd"/></g><defs><clipPath id="prefix__clip0"><path fill="#fff" d="M0 0h54v32.4H0z"/></clipPath></defs></svg>

                                                </span>
                                        </div>
                                        <h3 class="mt-8 text-lg font-medium text-gray-300 tracking-tight">Access Control List</h3>
                                        <p class="mt-5 text-base text-gray-200">
                                            Acl with roles and permissions using laravel gates.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-6">
                                <div class="flow-root bg-indigo-800 rounded-lg px-6 pb-8">
                                    <div class="-mt-6">
                                        <div>
                                                <span class="inline-flex items-center justify-center p-3 bg-indigo-500 rounded-md shadow-lg">
                                                 <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                                </svg>
                                                </span>
                                        </div>
                                        <h3 class="mt-8 text-lg font-medium text-gray-300 tracking-tight">Commands</h3>
                                        <p class="mt-5 text-base text-gray-200">
                                            Customized commands that will increase your productivity.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-6">
                                <div class="flow-root bg-indigo-800 rounded-lg px-6 pb-8">
                                    <div class="-mt-6">
                                        <div>
                                                <span class="inline-flex items-center justify-center p-3 bg-indigo-500 rounded-md shadow-lg">
                                                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80"><path
                                                            d="M0 40a39.87 39.87 0 0 1 11.72-28.28A40 40 0 1 1 0 40zm34 10a4 4 0 0 1-4-4v-2a2 2 0 1 0-4 0v2a4 4 0 0 1-4 4h-2a2 2 0 1 0 0 4h2a4 4 0 0 1 4 4v2a2 2 0 1 0 4 0v-2a4 4 0 0 1 4-4h2a2 2 0 1 0 0-4h-2zm24-24a6 6 0 0 1-6-6v-3a3 3 0 0 0-6 0v3a6 6 0 0 1-6 6h-3a3 3 0 0 0 0 6h3a6 6 0 0 1 6 6v3a3 3 0 0 0 6 0v-3a6 6 0 0 1 6-6h3a3 3 0 0 0 0-6h-3zm-4 36a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM21 28a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"
                                                            fill="currentColor"></path></svg>
                                                </span>
                                        </div>
                                        <h3 class="mt-8 text-lg font-medium text-gray-300 tracking-tight">Debug</h3>
                                        <p class="mt-5 text-base text-gray-200">
                                            Debug enabled by default with Laravel Telescope and Laravel Debugbar.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-6">
                                <div class="flow-root bg-indigo-800 rounded-lg px-6 pb-8">
                                    <div class="-mt-6">
                                        <div>
                                                <span class="inline-flex items-center justify-center p-3 bg-indigo-500 rounded-md shadow-lg">
                                                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                                    </svg>
                                                </span>
                                        </div>
                                        <h3 class="mt-8 text-lg font-medium text-gray-300 tracking-tight">Translation</h3>
                                        <p class="mt-5 text-base text-gray-200">
                                            Translation using Laravel Lang package enabled by default.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-6">
                                <div class="flow-root bg-indigo-800 rounded-lg px-6 pb-8">
                                    <div class="-mt-6">
                                        <div>
                                                <span class="inline-flex items-center justify-center p-3 bg-indigo-500 rounded-md shadow-lg">
                                                  <!-- Heroicon name: outline/cloud-upload -->
                                                  <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                          d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
                                                  </svg>
                                                </span>
                                        </div>
                                        <h3 class="mt-8 text-lg font-medium text-gray-300 tracking-tight">Deploy</h3>
                                        <p class="mt-5 text-base text-gray-200">
                                            Deploy simply with Ansible with configurations configured for you.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-6">
                                <div class="flow-root bg-indigo-800 rounded-lg px-6 pb-8">
                                    <div class="-mt-6">
                                        <div>
                                                <span class="inline-flex items-center justify-center p-3 bg-indigo-500 rounded-md shadow-lg">
                                                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 45.116 22.806"><g opacity=".8"><path
                                                                d="M33.71 0L11.207 22.693l.113.113h22.586l11.21-11.304z" fill="#d8dee9"/><path d="M11.405 0l22.578 22.769-.039.037H11.209L0 11.502z"
                                                                                                                                               fill="currentColor"/></g></svg>
                                                </span>
                                        </div>
                                        <h3 class="mt-8 text-lg font-medium text-gray-300 tracking-tight">Alpine</h3>
                                        <p class="mt-5 text-base text-gray-200">
                                            Alpine is integrated by default to create animations.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-6">
                                <div class="flow-root bg-indigo-800 rounded-lg px-6 pb-8">
                                    <div class="-mt-6">
                                        <div>
                                                <span class="inline-flex items-center justify-center p-3 bg-indigo-500 rounded-md shadow-lg">
                                                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 54 33"><g clip-path="url(#prefix__clip0)"><path
                                                                fill-rule="evenodd"
                                                                d="M27 0c-7.2 0-11.7 3.6-13.5 10.8 2.7-3.6 5.85-4.95 9.45-4.05 2.054.513 3.522 2.004 5.147 3.653C30.744 13.09 33.808 16.2 40.5 16.2c7.2 0 11.7-3.6 13.5-10.8-2.7 3.6-5.85 4.95-9.45 4.05-2.054-.513-3.522-2.004-5.147-3.653C36.756 3.11 33.692 0 27 0zM13.5 16.2C6.3 16.2 1.8 19.8 0 27c2.7-3.6 5.85-4.95 9.45-4.05 2.054.514 3.522 2.004 5.147 3.653C17.244 29.29 20.308 32.4 27 32.4c7.2 0 11.7-3.6 13.5-10.8-2.7 3.6-5.85 4.95-9.45 4.05-2.054-.513-3.522-2.004-5.147-3.653C23.256 19.31 20.192 16.2 13.5 16.2z"
                                                                clip-rule="evenodd"/></g><defs><clipPath id="prefix__clip0"><path fill="#fff" d="M0 0h54v32.4H0z"/></clipPath></defs></svg>
                                                </span>
                                        </div>
                                        <h3 class="mt-8 text-lg font-medium text-gray-300 tracking-tight">Tailwindcss</h3>
                                        <p class="mt-5 text-base text-gray-200">
                                            Create beautiful pages without writing thousands of lines of css.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-6">
                                <div class="flow-root bg-indigo-800 rounded-lg px-6 pb-8">
                                    <div class="-mt-6">
                                        <div>
                                                <span class="inline-flex items-center justify-center p-3 bg-indigo-500 rounded-md shadow-lg">
                                                  <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                                       width="100%"
                                                       height="100%" viewBox="0 0 2084 2084" version="1.1" xml:space="preserve"
                                                       style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"><g><path
                                                              d="M1547.88,1313.96c-36.55,113.305 -91.375,197.371 -168.129,259.505c-76.754,62.133 -179.092,95.029 -307.017,105.995l-25.583,-168.129c84.062,-10.966 146.196,-29.241 186.404,-58.479c14.617,-10.967 43.858,-43.862 43.858,-43.862l-303.362,-972.221l252.192,-0l175.437,727.337l186.404,-727.337l244.884,-0l-285.088,877.191Zm-880.846,-910.087c58.479,-0 113.304,7.312 157.163,25.587c47.512,18.275 91.375,43.859 135.233,80.409l-102.337,138.887c-29.242,-21.929 -58.48,-36.55 -84.067,-47.512c-25.583,-10.967 -58.479,-14.621 -87.717,-14.621c-124.271,-0 -186.404,95.029 -186.404,288.742c0,98.683 14.621,168.129 47.513,208.333c32.895,43.862 76.754,62.133 138.891,62.133c29.238,0 58.479,-3.654 84.063,-14.616c25.583,-10.967 54.825,-25.588 91.375,-47.517l102.337,146.2c-84.062,69.446 -179.091,102.337 -288.741,102.337c-87.721,0 -160.817,-18.275 -226.609,-54.825c-62.133,-36.55 -113.304,-91.37 -146.2,-160.816c-32.891,-69.446 -51.166,-149.854 -51.166,-244.884c-0,-91.375 18.275,-175.437 51.166,-244.883c32.896,-73.1 84.067,-127.925 146.2,-168.129c62.134,-32.896 135.234,-54.825 219.3,-54.825Z"
                                                              style="fill:#fff;fill-rule:nonzero;"/></g></svg>
                                                </span>
                                        </div>
                                        <h3 class="mt-8 text-lg font-medium text-gray-300 tracking-tight">Cypress</h3>
                                        <p class="mt-5 text-base text-gray-200">
                                            ultra simple and fast e2e test powered by cypress.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-blue-gray-900">
                <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-20 lg:px-8">
                    <h2 class="text-base text-center font-semibold tracking-wider text-indigo-600 uppercase mb-6">Faq</h2>
                    <div class="lg:grid lg:grid-cols-3 lg:gap-8">
                        <div>
                            <h2 class="text-3xl font-extrabold text-gray-300">
                                Frequently asked questions
                            </h2>
                            <p class="mt-4 text-lg text-gray-500">Can’t find the answer you’re looking for? Ask your question on our <a href="#"
                                                                                                                                        class="font-medium text-indigo-600 hover:text-indigo-500">Discord
                                    server</a>.</p>
                        </div>
                        <div class="mt-12 lg:mt-0 lg:col-span-2">
                            <dl class="space-y-12">
                                <div>
                                    <dt class="text-lg leading-6 font-medium text-gray-200">
                                        Why Laravel Skeleton?
                                    </dt>
                                    <dd class="mt-2 text-base text-gray-500">
                                        Typing always the same commands to install Laravel with basic features is very redundant, I wanted something user friendly and ready to use.
                                    </dd>
                                </div>
                                <div>
                                    <dt class="text-lg leading-6 font-medium text-gray-200">
                                        What should I do next?
                                    </dt>
                                    <dd class="mt-2 text-base text-gray-500">
                                        If you have followed the steps in the readme.md file you can start developing your application without delay. You can also try the new commands to increase your
                                        productivity.
                                    </dd>
                                </div>
                                <div>
                                    <dt class="text-lg leading-6 font-medium text-gray-200">
                                        Do I really have to use the new commands instead of the old ones?
                                    </dt>
                                    <dd class="mt-2 text-base text-gray-500">
                                        No, the new commands do not affect the old ones and you are not obliged to use them, they are just there to help you in the development of your application.
                                    </dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-indigo-800">
                <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-24 lg:px-8 lg:flex lg:items-center lg:justify-between">
                    <h2 class="text-3xl font-extrabold tracking-tight text-gray-300 md:text-4xl">
                        <span class="block">Ready to get started?</span>
                        <span class="block text-gray-200">Learn more about the features.</span>
                    </h2>
                    <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                        <div class="inline-flex rounded-md">
                            <a href="#"
                               class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-gray-800 hover:bg-blue-gray-700">
                                <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                </svg>
                                Read the docs
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="bg-blue-gray-900">
            <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 md:flex md:items-center md:justify-between lg:px-8">
                <div class="flex justify-center space-x-6 md:order-2">
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">GitHub</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Discord</span>
                        <svg class="h-6 w-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" id="Layer_1" viewBox="0 0 245 240">
                            <path class="st0"
                                  d="M104.4 103.9c-5.7 0-10.2 5-10.2 11.1s4.6 11.1 10.2 11.1c5.7 0 10.2-5 10.2-11.1.1-6.1-4.5-11.1-10.2-11.1zM140.9 103.9c-5.7 0-10.2 5-10.2 11.1s4.6 11.1 10.2 11.1c5.7 0 10.2-5 10.2-11.1s-4.5-11.1-10.2-11.1z"/>
                            <path class="st0"
                                  d="M189.5 20h-134C44.2 20 35 29.2 35 40.6v135.2c0 11.4 9.2 20.6 20.5 20.6h113.4l-5.3-18.5 12.8 11.9 12.1 11.2 21.5 19V40.6c0-11.4-9.2-20.6-20.5-20.6zm-38.6 130.6s-3.6-4.3-6.6-8.1c13.1-3.7 18.1-11.9 18.1-11.9-4.1 2.7-8 4.6-11.5 5.9-5 2.1-9.8 3.5-14.5 4.3-9.6 1.8-18.4 1.3-25.9-.1-5.7-1.1-10.6-2.7-14.7-4.3-2.3-.9-4.8-2-7.3-3.4-.3-.2-.6-.3-.9-.5-.2-.1-.3-.2-.4-.3-1.8-1-2.8-1.7-2.8-1.7s4.8 8 17.5 11.8c-3 3.8-6.7 8.3-6.7 8.3-22.1-.7-30.5-15.2-30.5-15.2 0-32.2 14.4-58.3 14.4-58.3 14.4-10.8 28.1-10.5 28.1-10.5l1 1.2c-18 5.2-26.3 13.1-26.3 13.1s2.2-1.2 5.9-2.9c10.7-4.7 19.2-6 22.7-6.3.6-.1 1.1-.2 1.7-.2 6.1-.8 13-1 20.2-.2 9.5 1.1 19.7 3.9 30.1 9.6 0 0-7.9-7.5-24.9-12.7l1.4-1.6s13.7-.3 28.1 10.5c0 0 14.4 26.1 14.4 58.3 0 0-8.5 14.5-30.6 15.2z"/>
                        </svg>
                    </a>
                </div>
                <div class="mt-8 md:mt-0 md:order-1">
                    <p class="text-center text-base text-gray-400">
                        <span class="flex justify-center">
                                                    Made with &nbsp;
                        <svg class="text-red-500 h-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                        &nbsp; by Helixar
                        </span>
                    </p>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
