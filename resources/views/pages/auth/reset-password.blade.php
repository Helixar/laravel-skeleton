@extends('layouts.auth')

@section('content')
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <a href="{{ route('home') }}">
            <img class="mx-auto h-12 w-auto" src="{{ asset('storage/assets/images/logo/text-indigo.png') }}" alt="Laravel Skeleton">
        </a>
        <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-200">
            Réinitialiser votre mot de passe
        </h2>
        <p class="mt-2 text-center text-sm text-gray-600 max-w">
            Vous n'avez pas de compte?
            <a href="{{ route('register') }}" class="font-medium text-indigo-600 hover:text-indigo-500">
                créez-en un.
            </a>
        </p>
    </div>
    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-blue-gray-800 py-4 px-4 shadow sm:rounded-lg sm:px-10">
            @include('includes.flash')
            <form class="space-y-6 mb-4" action="{{ route('password.update') }}" method="POST">
                @csrf
                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-400">
                        Email address
                    </label>
                    <div class="mt-1">
                        <input id="email" name="email" type="email" autocomplete="email"
                               class="appearance-none text-gray-400 bg-blue-gray-800 block w-full px-3 py-2 border border-indigo-600 rounded-md shadow-sm placeholder-gray-200 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm {{ $errors->has('email') ? 'border-red-500' : '' }}"
                               value="{{ request('email') }}" required autofocus>
                    </div>
                    @error('email')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-400">
                        Nouveau mot de passe
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

                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-400">
                        confirmation du nouveau mot de passe
                    </label>
                    <div class="mt-1">
                        <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="password_confirmation"
                               class="appearance-none text-gray-400 bg-blue-gray-800 block w-full px-3 py-2 border border-indigo-600 rounded-md shadow-sm placeholder-gray-200 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm {{ $errors->has('password_confirmation') ? 'border-red-500' : '' }}"
                               required>
                    </div>
                    @error('password_confirmation')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <button type="submit"
                            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Réinitialiser mon mot de passe
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
