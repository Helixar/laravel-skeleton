@extends('layouts.auth')

@section('content')
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <a href="{{ route('home') }}">
            <img class="mx-auto h-12 w-auto" src="{{ asset('storage/assets/images/logo/text-indigo.png') }}" alt="Laravel Skeleton">
        </a>
        <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-200">
            Sign in to your account
        </h2>
        <p class="mt-2 text-center text-sm text-gray-400 max-w">
            New to LS?
            <a href="{{ route('register') }}" class="font-medium text-indigo-600 hover:text-indigo-500">
                create an account.
            </a>
        </p>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-blue-gray-800 py-4 px-4 shadow sm:rounded-lg sm:px-10">
            @include('includes.flash')
            <form class="space-y-6" action="{{ route('login') }}" method="POST">
                @csrf
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-400">
                        Email address
                    </label>
                    <div class="mt-1">
                        <input id="email" name="email" type="email" autocomplete="email"
                               class="appearance-none text-gray-400 bg-blue-gray-800 block w-full px-3 py-2 border border-indigo-600 rounded-md shadow-sm placeholder-gray-200 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm {{ $errors->has('email') ? 'border-red-500' : '' }}"
                               value="{{ old('email') }}" required autofocus>
                    </div>
                    @error('email')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-400">
                        Password
                    </label>
                    <div class="mt-1">
                        <input id="password" name="password" type="password" autocomplete="current-password"
                               class="appearance-none text-gray-400 bg-blue-gray-800 block w-full px-3 py-2 border border-indigo-600 rounded-md shadow-sm placeholder-gray-200 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm {{ $errors->has('password') ? 'border-red-500' : '' }}"
                               required>
                    </div>
                    @error('password')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember_me" name="remember" {{ old('remember') ? 'checked' : '' }} type="checkbox"
                               class="h-4 w-4 text-indigo-600 border-indigo-600 bg-blue-gray-800 rounded focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:offset-1">
                        <label for="remember_me" class="ml-2 block text-sm text-gray-400">
                            Remember me
                        </label>
                    </div>

                    <div class="text-sm">
                        <a href="{{ route('password.request') }}" class="font-medium text-indigo-600 hover:text-indigo-500">
                            Forgot your password?
                        </a>
                    </div>
                </div>

                <div>
                    <button type="submit"
                            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Sign in
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
