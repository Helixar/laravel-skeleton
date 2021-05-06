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
        $validated = collect($request->validated());
        $user = User::create([
            'name' => $validated->get('name'),
            'email' => $validated->get('email'),
            'password' => Hash::make($validated->get('password'),),
            'terms' => now(),
            'privacy' => now(),
            'newsletter' => $validated->has('name') ? now() : null,
        ]);
        auth()->login($user);
        event(new Registered($user));
        return redirect(RouteServiceProvider::HOME);
    }
}
