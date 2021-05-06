@extends('layouts.auth')

@section('content')
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <a href="{{ route('home') }}">
            <img class="mx-auto h-12 w-auto" src="{{ asset('storage/assets/images/logo/text-indigo.png') }}" alt="Laravel Skeleton">
        </a>
        <h2 class="mt-6 text-center text-3xl font-bold text-gray-200">
            Register your account
        </h2>
        <p class="mt-2 text-center text-sm text-gray-400 max-w">
            you have an account?
            <a href="{{ route('login') }}" class="font-medium text-indigo-600 hover:text-indigo-500">
                sign in.
            </a>
        </p>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-blue-gray-800 py-8 px-8 shadow sm:rounded-lg">
            @include('includes.flash')
            <form action="{{ route('register') }}" method="POST" autocomplete="on">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-400">
                        Nom <span class="text-red-500">*</span>
                    </label>
                    <div class="mt-1">
                        <input id="name" name="name" type="text" autocomplete="nickname"
                               class="appearance-none text-gray-400 bg-blue-gray-800 block w-full px-3 py-2 border border-indigo-600 rounded-md shadow-sm placeholder-gray-200 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm {{ $errors->has('name') ? 'border-red-500' : '' }}"
                               value="{{ old('name') }}"
                               required autofocus>
                    </div>
                    @error('name')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mt-4">
                    <label for="email" class="block text-sm font-medium text-gray-400">
                        Adresse email <span class="text-red-500">*</span>
                    </label>
                    <div class="mt-1">
                        <input id="email" name="email" type="email" autocomplete="email"
                               class="appearance-none text-gray-400 bg-blue-gray-800 block w-full px-3 py-2 border border-indigo-600 rounded-md shadow-sm placeholder-gray-200 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm {{ $errors->has('email') ? 'border-red-500' : '' }}"
                               value="{{ old('email') }}" required>
                    </div>
                    @error('email')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mt-4">
                    <label for="password" class="block text-sm font-medium text-gray-400">
                        Mot de passe <span class="text-red-500">*</span>
                    </label>
                    <div class="mt-1">
                        <input id="password" name="password" type="password" autocomplete="new-password"
                               class="appearance-none text-gray-400 bg-blue-gray-800 block w-full px-3 py-2 border border-indigo-600 rounded-md shadow-sm placeholder-gray-200 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm {{ $errors->has('password') ? 'border-red-500' : '' }}"
                               required>
                    </div>
                    @error('password')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mt-4">
                    <label for="password" class="block text-sm font-medium text-gray-400">
                        Confirmation du mot de passe <span class="text-red-500">*</span>
                    </label>
                    <div class="mt-1">
                        <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password"
                               class="appearance-none text-gray-400 bg-blue-gray-800 block w-full px-3 py-2 border border-indigo-600 rounded-md shadow-sm placeholder-gray-200 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm {{ $errors->has('password_confirmation') ? 'border-red-500' : '' }}"
                               required>
                    </div>
                    @error('password-confirmation')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col justify-between mt-4">
                    <div class="flex">
                        <input id="terms" name="terms" {{ old('terms') ? 'checked' : '' }} type="checkbox"
                               class="h-4 w-4 text-indigo-600 border-indigo-600 bg-blue-gray-800 rounded focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:offset-1">
                        <div>
                            <label for="terms" class="ml-2 block text-sm text-gray-400">
                                En cliquant sur Créer mon compte, je confirme avoir lu et accepté les <a href="{{ route('terms') }}" class="font-medium text-indigo-600 hover:text-indigo-500">Conditions
                                    d'utilisation</a> <span class="text-red-500">*</span>
                            </label>
                            @error('terms')
                            <span class="ml-2 text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="flex mt-2">
                        <input id="privacy" name="privacy" {{ old('privacy') ? 'checked' : '' }} type="checkbox"
                               class="h-4 w-4 text-indigo-600 border-indigo-600 bg-blue-gray-800 rounded focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:offset-1">
                        <div>
                            <label for="privacy" class="ml-2 block text-sm text-gray-400">
                                En cliquant sur Créer mon compte, je confirme avoir lu et accepté la <a href="{{ route('privacy') }}" class="font-medium text-indigo-600 hover:text-indigo-500">Politique de
                                    confidentialité</a> <span class="text-red-500">*</span>
                            </label>
                            @error('privacy')
                            <span class="ml-2 text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="flex mt-2">
                        <input id="newsletter" name="newsletter" {{ old('newsletter') ? 'checked' : '' }} type="checkbox"
                               class="h-4 w-4 text-indigo-600 border-indigo-600 bg-blue-gray-800 rounded focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:offset-1">
                        <label for="newsletter" class="ml-2 block text-sm text-gray-400">
                            En cliquant sur Créer mon compte, je souhaite recevoir les derniers article de mise à jour par email, vous pouvez vous désinscrire via votre profile ou en nous contactant
                            via notre <a href="{{ route('privacy') }}" class="font-medium text-indigo-600 hover:text-indigo-500">support</a>.
                        </label>
                    </div>
                    <div class="flex mt-2">
                        <p class="text-sm text-gray-400"><span class="text-red-500">*</span> Champs requis</p>
                    </div>
                </div>
                <div class="mt-4">
                    <button type="submit"
                            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400">
                        Créer mon compte
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
