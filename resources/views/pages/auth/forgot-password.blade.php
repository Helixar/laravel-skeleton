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
        <div class="bg-blue-gray-800 py-8 px-8 shadow sm:rounded-lg">
            @include('includes.flash')
            <form action="{{ route('password.email') }}" method="POST">
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
                <div class="mt-4">
                    <button type="submit"
                            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Réinitialiser mon mot de passe
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
