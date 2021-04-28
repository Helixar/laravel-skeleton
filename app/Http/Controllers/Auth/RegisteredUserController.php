<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\Role;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\View\View as ViewContract;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * @return Application|Factory|ViewContract|View
     */
    public function create()
    {
        return view('pages.auth.register');
    }

    /**
     * @param RegisterRequest $request
     * @return RedirectResponse
     */
    public function store(RegisterRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password'])
        ]);
        //$user->roles()->attach(Role::where('name', 'Membres'));
        auth()->login($user);
        event(new Registered($user));
        return redirect(RouteServiceProvider::HOME);
    }
}
