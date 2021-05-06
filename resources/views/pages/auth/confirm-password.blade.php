@extends('layouts.auth')
@section('content')
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <a href="{{ route('home') }}">
            <img class="mx-auto h-12 w-auto" src="{{ asset('storage/assets/images/logo/text-indigo.png') }}" alt="Laravel Skeleton">
        </a>
        <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-200">
            Confirmation du mot de passe
        </h2>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-blue-gray-800 py-8 px-4 shadow sm:rounded-lg sm:px-10">
            @include('includes.flash')
            <form class="space-y-6" action="{{ route('password.confirm') }}" method="POST">
                @csrf
                <div class="text-gray-200">
                    Vous entrez dans une zone sécurisée, pour continuer veuillez entrer votre mot de passe.
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
                <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Confirmer mon mot de passe</button>
            </form>
        </div>
    </div>
@endsection
